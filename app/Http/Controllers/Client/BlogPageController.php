<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Event;
use App\Models\PopUp;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogPageController extends Controller
{
    public function index(Request $request, $category = null)
    {
        $search = $request->input('search');
        $blogCategories = BlogCategory::whereHas('blogs')->active()->sorting()->get();
        $blogSuperHighlights = Blog::whereHas('category', function($active){
            $active->where('active', 1);
        })->superHighlightOnly()->active()->sorting()->limit(6)->get();
        $blogHighlights = Blog::whereHas('category', function($active){
            $active->where('active', 1);
        })->highlightOnly()->active()->sorting()->limit(2)->get();

        $superHighlightIds = $blogSuperHighlights->pluck('id');
        $highlightIds = $blogHighlights->pluck('id');        

        $excludedIds = $superHighlightIds->merge($highlightIds);

        $blogAll = Blog::with('category')
        ->whereHas('category', function($active){
            $active->where('active', 1);
        });
        // ->whereNotIn('id', $excludedIds);

        if ($category) {
            $blogAll = $blogAll->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        }

        if ($search) {
            $blogAll = $blogAll->whereHas('category')->where('title', 'like', '%' . $search . '%');
        }

        $blogAll = $blogAll->active()->sorting()->paginate(15);
        
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

        $announcementVerticals = Announcement::select(
            'exhibition',
            'link',
            'exhibition',
            'path_image',
            'active',
            'sorting',
        )
        ->where('exhibition', '=', 'vertical')
        ->active()
        ->sorting()
        ->get();
        $popUp = PopUp::active()->first();
        $startOfWeek = Carbon::now()->startOfWeek(Carbon::SUNDAY); // começa no domingo
        $endOfWeek   = Carbon::now()->endOfWeek(Carbon::SATURDAY); // termina no sábado
        $events = Event::active()
        ->whereBetween('date', [$startOfWeek, $endOfWeek])
        ->orderBy('date', 'asc')
        ->get();

        return view('client.blades.blog', compact(
            'blogCategories',
            'blogSuperHighlights',
            'blogHighlights',
            'blogAll',
            'events',
            'announcements',
            'announcementVerticals',
            'popUp',
        ));
    }

    public function blogInner($slug = null)
    {
        if (!$slug) {
            abort(404);
        }

        $blogInner = Blog::with([
            'category',
            'comments' => function ($query) {
                $query->where('active', 1)->orderBy('created_at', 'desc')->with('client');
            }
        ])
        ->whereHas('category')
        ->where('slug', $slug)
        ->active()
        ->sorting()
        ->first();

        if (!$blogInner) {
            abort(404);
        }

        // Buscar relacionados da mesma categoria
        $blogRelacionados = Blog::whereHas('category', function ($query) use ($blogInner) {
            $query->where('id', $blogInner->category->id);
        })
        ->where('id', '!=', $blogInner->id)
        ->active()
        ->sorting()
        ->take(4)
        ->get();

        $blogCategories = BlogCategory::whereHas('blogs')->active()->sorting()->get();
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
        $announcementVerticals = Announcement::select(
            'exhibition',
            'link',
            'exhibition',
            'path_image',
            'active',
            'sorting',
        )
        ->where('exhibition', '=', 'vertical')
        ->active()
        ->sorting()
        ->get();
        // Compartilha a variável globalmente (para menu/header)
        view()->share('blogInner', $blogInner);

        return view('client.blades.blog-inner', compact('announcementVerticals', 'announcements','blogInner', 'slug', 'blogCategories', 'blogRelacionados'));
    }

}
