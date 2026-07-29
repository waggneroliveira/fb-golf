<?php

use Inertia\Inertia;
use App\Models\About;
use App\Models\Report;
use App\Models\Contact;
use App\Models\Statute;
use App\Models\Agreement;
use App\Models\Direction;
use App\Models\Announcement;
use App\Models\BenefitTopic;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FormIndexController;
use App\Http\Middleware\AuthClientMiddleware;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Auth\AuthClientController;
use App\Http\Controllers\Client\BlogPageController;
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Client\AboutPageController;
use App\Http\Controllers\Client\EventPageController;
use App\Http\Controllers\Client\RegionPageController;
use App\Http\Controllers\Client\BenefitPageController;
use App\Http\Controllers\Client\ContactPageController;
use App\Http\Controllers\Client\JuridicoPageController;
use App\Http\Controllers\Client\NoticiesPageController;
use App\Http\Controllers\Auth\PasswordEmailClientController;
use App\Http\Controllers\Auth\ResetPasswordClientController;

require __DIR__ . '/dashboard.php';

Route::get('/', function () {
    return redirect()->route('index');
});

Route::post('login.do', [AuthClientController::class, 'authenticate'])
->name('client.user.authenticate');

Route::post('send-contact', [FormIndexController::class, 'store'])->name('send-contact');

Route::get('noticias/interna/{slug}', [BlogPageController::class, 'blogInner'])
->name('blog-inner');
Route::get('noticias/{category?}', [BlogPageController::class, 'index'])->name('blog');
Route::post('noticias/search', [BlogPageController::class, 'index'])->name('blog-search');
Route::post('send-newsletter', [NewsletterController::class, 'store'])->name('send-newsletter');
Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('documentos', [JuridicoPageController::class, 'index'])->name('juridico');
Route::get('documentos/search', [JuridicoPageController::class, 'searchJuridico'])->name('search-juridico');
Route::get('agenda', [EventPageController::class, 'index'])->name('client.event');
Route::get('blog/filter/{category?}', [HomePageController::class, 'filterByCategory'])
    ->name('blog.filter');

View::composer('client.core.client', function ($view) {
    $announcements = Announcement::select(
        'exhibition',
        'link',
        'exhibition',
        'path_image',
        'active',
        'sorting',
    )
    ->where('exhibition', '=', 'mobile')
    ->orWhere('exhibition', '=', 'horizontal')
    ->active()
    ->sorting()
    ->get();
    $contact = Contact::first();
    $abouts = About::active()->sorting()->get();
    $statute = Statute::active()->count();
    $directions = Direction::active()->sorting()->count();
    $benefitTopics = BenefitTopic::active()->sorting()->count();
    $report = Report::active()->count();
    $agreement = Agreement::active()->count();

    return $view->with('announcements', $announcements)
    ->with('contact', $contact)
    ->with('statute', $statute)
    ->with('directions', $directions)
    ->with('benefitTopics', $benefitTopics)
    ->with('report', $report)
    ->with('agreement', $agreement)
    ->with('abouts', $abouts);
});
