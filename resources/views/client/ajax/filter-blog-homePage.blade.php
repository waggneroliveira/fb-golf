@if ($latestNews->count() > 0)  
    <div class="row" id="news-grid">
        @foreach($latestNews as $news)
            @php
                \Carbon\Carbon::setLocale('pt_BR');
                $dataFormatada = \Carbon\Carbon::parse($news->date)->translatedFormat('d \d\e F \d\e Y');
            @endphp
            <article class="col-12 col-sm-12 col-md-6">
                <div class="d-flex flex-column align-items-center bg-white mb-3 overflow-hidden position-relative">
                    <img loading="lazy" class="img-fluid col-12"
                    src="{{ $news->path_image_thumbnail ? asset('storage/' . $news->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                    alt="{{ $news->title }}"
                    style="height: 280px;aspect-ratio:1/1;object-fit: cover;">
                    <span class="montserrat-medium font-10 text-uppercase py-1 px-2 mr-2 background-red position-absolute start-0" style="top:15px">
                        {{ $news->category->title }}
                    </span>
                    <div class="col-12 h-100 p-3 d-flex flex-column justify-content-center border border-left-0">
                        <a href="{{ route('blog-inner', $news->slug) }}" class="underline">
                            <h3 class="h6 m-0 montserrat-bold font-14 title-blue">
                                {{ Str::limit($news->title, 60) }}
                            </h3>
                        </a>
                        <div class="blog-text mt-3">{!! Str::limit($news->text, 160) !!}</div>
                        <div class="date-blog-home">
                            <p class="text-color mb-0 montserrat-regular font-12">
                                {{ $dataFormatada }}
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endif