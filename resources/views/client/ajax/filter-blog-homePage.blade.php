@if ($latestNews->count() > 0)  
    <div class="row g-2 g-lg-3 px-0" id="news-grid">
        @foreach($latestNews as $news)
            @php
                \Carbon\Carbon::setLocale('pt_BR');
                $dataFormatada = \Carbon\Carbon::parse($news->date)->translatedFormat('d \d\e F \d\e Y');
            @endphp
            <article class="col-6 col-sm-12 col-md-4">
                <div class="d-flex flex-column align-items-center bg-white mb-0 overflow-hidden position-relative h-auto">
                    <img loading="lazy" class="img-fluid col-12 blg"
                    src="{{ $news->path_image_thumbnail ? asset('storage/' . $news->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                    alt="{{ $news->title }}"
                    style="height: 190px;aspect-ratio:1/1;object-fit: cover;">
                    <span class="montserrat-medium font-10 text-uppercase py-1 p-2 px-lg-3 mr-2 bg-danger position-absolute start-0" style="top:15px">
                        {{ $news->category->title }}
                    </span>
                    <div class="col-12 h-auto p-2 p-lg-3 d-flex flex-column justify-content-center border border-left-0">
                        <a href="{{ route('blog-inner', $news->slug) }}" class="underline">
                            <h4 class="h6 m-0 montserrat-semiBold font-14 title-blue" title="{{$news->title}}">
                                {{ Str::limit($news->title, 40) }}
                            </h4>
                        </a>
                        @php
                            $isMobile = preg_match('/Mobile|Android|iPhone|iPad|iPod/i', $_SERVER['HTTP_USER_AGENT']);
                            $textLimit = $isMobile ? 60 : 120;
                        @endphp

                        <div class="blog-text mt-2 mt-lg-3">{!! Str::limit($news->text, $textLimit) !!}</div>
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