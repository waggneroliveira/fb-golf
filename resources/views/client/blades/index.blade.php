@extends('client.core.client')
@section('content')

@if (!empty($slides) && $slides->count() > 0)
    <section id="hero" class="hero position-relative d-flex flex-column section dark-background overflow-hidden">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <div class="swiper-slide position-relative">
                        <picture class="d-flex">
                            <source srcset="{{ asset('storage/' . $slide->path_image_mobile) }}" media="(max-width: 885px)">
                            <img src="{{ asset('storage/' . $slide->path_image) }}" alt="Banner Hero" title="Banner Hero" class="image-hero w-100">
                        </picture>
                        
                        <!-- Conteúdo do Banner -->
                        <div class="w-100 d-flex justify-content-center flex-column align-items-center position-absolute description" style="z-index: 6; top: 0; left: 0; height: 100%;">
                            <div class="max-width container">
                                @if ($slide->title)                                    
                                    <h1 class="text-white mb-2 montserrat-semiBold text-uppercase">
                                        <svg class="me-2" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.04004 0C3.60676 0 0 3.60676 0 8.04001C0 12.4733 3.60676 16.0801 8.04004 16.0801C12.4733 16.0801 16.08 12.4733 16.08 8.04001C16.08 3.60676 12.4733 0 8.04004 0ZM3.65456 8.77091C3.25091 8.77091 2.92365 8.44371 2.92365 8.04001C2.92365 7.63638 3.25091 7.30913 3.65456 7.30913C4.05822 7.30913 4.38548 7.63638 4.38548 8.04001C4.38548 8.44371 4.05822 8.77091 3.65456 8.77091ZM4.59954 5.63319C4.31409 5.34775 4.31409 4.88498 4.59954 4.59954C4.88498 4.31409 5.34775 4.31409 5.63319 4.59954C5.91864 4.88493 5.91864 5.34775 5.63319 5.63319C5.3478 5.91864 4.88498 5.91864 4.59954 5.63319ZM7.09507 10.0187C6.80962 10.3041 6.34686 10.3041 6.06141 10.0187C5.77596 9.73321 5.77596 9.27041 6.06141 8.98501C6.34686 8.69961 6.80962 8.69961 7.09507 8.98501C7.38046 9.27041 7.38046 9.73331 7.09507 10.0187ZM8.55694 7.09502C8.27144 7.38047 7.80868 7.38047 7.52324 7.09502C7.23779 6.80957 7.23779 6.34681 7.52324 6.06136C7.80868 5.77592 8.27144 5.77592 8.55694 6.06136C8.84224 6.34681 8.84224 6.80962 8.55694 7.09502Z" fill="#3BBA36"/>
                                        </svg>
                                        {!!$slide->title!!}
                                    </h1>
                                @endif
                                <div class="description text-white mb-5 montserrat-semiBold d-flex no-wrap align-items-center">
                                    {!!$slide->description!!}
                                </div>
                                @if (!empty($slide->link))
                                    <a href="{{$slide->link}}" target=_blank rel="noopener noreferrer" class="montserrat-semiBold font-15 px-3 rounded-5 col-12 col-lg-2 py-2 text-black background-red d-flex justify-content-center align-items-center">
                                        Saiba mais
                                        <svg class="ms-3" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 5.66003C14.562 5.66003 12.34 3.439 12.34 1V0H10.34V1C10.34 2.774 11.118 4.43803 12.339 5.66003H0V7.66003H12.339C11.118 8.88203 10.34 10.546 10.34 12.32V13.32H12.34V12.32C12.34 9.88103 14.562 7.66003 17 7.66003H18V5.66003H17Z" fill="black"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> 
        </div>
        
        <!-- TÓPICOS FIXOS - FORA DO SWIPER, MAS DENTRO DA SECTION -->
        @if (isset($topics) && $topics->count() > 0)
            <div class="position-absolute w-100" style="bottom: 30px; z-index: 10; left: 0; pointer-events: none;">
                <div class="container-fluid px-0">
                    <div class="row g-2 justify-content-center">
                        @foreach($topics as $topic)                
                            <div class="col-lg-3 px-5 d-flex justify-content-center position-relative box-topic">
                                @if (isset($topic->link) && $topic->link <> null)                            
                                    <a href="{{$topic->link}}" class="position-absolute top-0 left-0 w-100 h-100" rel="noopener noreferrer" style="z-index: 2;"></a>
                                @endif
                                <div class="partner-card w-100">
                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                        @if ($topic->path_image <> null)                                
                                            <img src="{{ asset('storage/' . $topic->path_image) }}" 
                                                alt="{{$topic->title}}" 
                                                class="img-fluid" 
                                                loading="lazy"/>
                                        @endif
                                        <h2 class="montserrat-semiBold font-20 mb-0 text-white text-start">{{$topic->title}}</h2>                            
                                    </div>
                                    <h3 class="montserrat-regular font-14 mt-2 mb-0 text-white text-start">{{$topic->description}}</h3>                            
                                </div>                        
                            </div>                                      
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </section>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: false, // Loop infinito
            autoplay: {
                delay: 5000, // Troca de slide a cada 5s
                disableOnInteraction: false, // Continua autoplay após interação
            },
            speed: 800, // Velocidade da transição
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 0,
            effect: 'slide',
            breakpoints: {
                0: { slidesPerView: 1 },
                885: { slidesPerView: 1 }
            }
        });
    });
</script>

@if (isset($blogSuperHighlights) && $blogSuperHighlights <> null)
    <section class="blog mb-0">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 p-0">
                <!-- Swiper Main Carousel -->
                <div class="swiper main-swiper">
                    <div class="swiper-wrapper">
                    @foreach($blogSuperHighlights as $blogSuperHighlight)
                        @php
                            \Carbon\Carbon::setLocale('pt_BR');
                            $dataFormatada = \Carbon\Carbon::parse($blogSuperHighlight->date)->translatedFormat('d \d\e F \d\e Y');
                        @endphp
                        <div class="swiper-slide">
                            <article>
                            <div class="position-relative overflow-hidden" style="height: 500px;">
                                <img class="img-fluid h-100 w-100"
                                src="{{ $blogSuperHighlight->path_image_thumbnail ? asset('storage/'.$blogSuperHighlight->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                alt="{{ $blogSuperHighlight->path_image_thumbnail ? 'Notícia super destaque' : 'Sem imagem'}}"
                                style="object-fit: cover; aspect-ratio: 1.91/1;">

                                <div class="overlay">
                                    <div class="mb-2 d-flex justify-content-center align-items-center gap-1 flex-wrap">
                                        <span class="badge background-red montserrat-semiBold font-12 text-uppercase py-2 px-2 me-2">{{$blogSuperHighlight->category->title}}</span>
                                        <p class="text-white mb-0 montserrat-regular font-15">{{$dataFormatada}}</p>
                                    </div>
                                    <a href="{{route('blog-inner', ['slug' => $blogSuperHighlight->slug])}}">
                                        <h1 class="h2 m-0 text-white text-uppercase montserrat-bold font-32 d-block">{{$blogSuperHighlight->title}}</h1>
                                    </a>
                                </div>
                            </div>
                            </article>
                        </div>
                    @endforeach                    
                    </div>
                    <!-- Swiper pagination & navigation (optional) -->
                    <div class="swiper-pagination news"></div>
                </div>
            </div>
            @if ($blogHighlights->count())            
                <div class="col-lg-5 p-0">
                <div class="row g-0">
                    <!-- Static small boxes as before -->
                    @foreach($blogHighlights as $blogHighlight)
                        @php
                            \Carbon\Carbon::setLocale('pt_BR');
                            $dataFormatada = \Carbon\Carbon::parse($blogHighlight->date)->translatedFormat('d \d\e F \d\e Y');
                        @endphp
                        <div class="col-md-6 box-small">
                            <article>
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid h-100 w-100"
                                src="{{ $blogHighlight->path_image_thumbnail ? asset('storage/'.$blogHighlight->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                alt="{{ $blogHighlight->title ? $blogHighlight->title : 'Sem imagem'}}"
                                style="object-fit: cover; aspect-ratio: 1 / 1;">
                                <div class="overlay">
                                    <div class="mb-2 d-flex justify-content-start align-items-center gap-1 flex-wrap">
                                        <span class="badge background-red text-uppercase montserrat-semiBold font-12 py-2 px-2 me-2">{{$blogHighlight->category->title}}</span>
                                        <p class="text-white mb-0 montserrat-regular font-12">{{$dataFormatada}}</p>
                                    </div>
                                    <a href="{{route('blog-inner', ['slug' => $blogHighlight->slug])}}">                              
                                        <h2 class="h6 m-0 text-white text-uppercase montserrat-bold font-16 d-block">{{$blogHighlight->title}}</h2>
                                    </a>
                                </div>
                            </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                </div>
            @endif
            </div>
        </div>
    </section>
@endif

@if (isset($about) && $about <> null || isset($partners) && $partners->count() > 0)
    <section class="aboutt">
        <div class="container">
            @if ($about <> null)                
                <div id="about-1" class="d-flex justify-content-between align-items-start about flex-wrap w-100 pt-3 pb-3 pt-lg-5">
                    <div class="col-12 col-lg-7 animate-on-scroll full" data-animation="animate__fadeInLeft">
                        <div class="border-bottom mb-0">
                            <h2 class="section-title rounded-top-left d-table px-4 w-auto m-0 montserrat-bold font-18 title-blue">{{$about->title}}</h2>
                        </div>
                
                        <div class="description mt-4 text-blog-inner montserrat-medium font-16">
                            {!! $about->text !!}
                        </div>

                        <div class="btn-about my-4">
                            <a href="{{route('about')}}#{{$about->slug}}" class="background-red montserrat-semiBold font-15 py-2 px-4 rounded-4">Saiba mais</a>
                        </div>
                    </div>
                    @if ($about->path_image <> null)                        
                        <div class="col-11 col-lg-4 animate-on-scroll mb-3" data-animation="animate__fadeInRight">
                            <div class="image d-flex justify-content-end">
                                <img src="{{asset('storage/' . $about->path_image)}}" loading="lazy" alt="About" class="w-100 h-100 about-image d-sm-block" loading="lazy">
                            </div>
                        </div>
                        @else
                        <style>
                            .full{
                                width: 100%
                            }
                        </style>
                    @endif
                </div>     
            @endif
            
            @include('client.includes.partner')
        </div>
    </section>
@endif

@include('client.includes.benefit')

@if ($announcements->count())                        
    <div class="mb-3">
        @include('client.includes.announcement')
    </div>
@endif

@if (!empty($videos) && $videos->count() > 0)
    <section class="video">
        <div class="container-fluid p-0">
            <div class="content-video d-flex justify-content-center align-items-center bg-black">
                <!-- Lista -->
                <div class="left col-5 dark-background h-100 d-flex justify-content-center align-items-end flex-column position-relative">
                    <div class="swiper mySwiper position-relative">
                        <div class="swiper-wrapper py-4 flex-column align-items-start justify-content-start m-auto position-relative">
                            @foreach($videos as $video)
                                <div class="swiper-slide align-items-center mb-3 justify-content-start"
                                    data-video="{{ $video->link }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="external-icon" viewBox="0 0 28.57 20" focusable="false" style="pointer-events: none; display: block; width: 35px; height: auto;">
                                        <svg viewBox="0 0 28.57 20" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M27.9727 3.12324C27.6435 1.89323 26.6768 0.926623 25.4468 0.597366C23.2197 2.24288e-07 14.285 0 14.285 0C14.285 0 5.35042 2.24288e-07 3.12323 0.597366C1.89323 0.926623 0.926623 1.89323 0.597366 3.12324C2.24288e-07 5.35042 0 10 0 10C0 10 2.24288e-07 14.6496 0.597366 16.8768C0.926623 18.1068 1.89323 19.0734 3.12323 19.4026C5.35042 20 14.285 20 14.285 20C14.285 20 23.2197 20 25.4468 19.4026C26.6768 19.0734 27.6435 18.1068 27.9727 16.8768C28.5701 14.6496 28.5701 10 28.5701 10C28.5701 10 28.5677 5.35042 27.9727 3.12324Z" fill="#FF0000"></path>
                                                <path d="M11.4253 14.2854L18.8477 10.0004L11.4253 5.71533V14.2854Z" fill="white"></path>
                                            </g>
                                        </svg>
                                    </svg>
                                    <h3 class="title montserrat-medium font-16 mb-0 col-10">
                                        {{ $video->title ?? 'Vídeo' }}
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="nav-video position-absolute d-flex flex-column align-items-end me-5">
                        <div class="swiper-button-up">▲</div>
                        <div class="swiper-button-down">▼</div>
                    </div>
                </div>

                <!-- Player -->
                <div class="right col-7 bg-black d-flex justify-content-center align-items-center">
                    <iframe id="videoPlayer" class="w-100 h-100"
                            src=""
                            title="Vídeo"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@endif

@if (isset($recentCategories) || isset($events))
    <section class="news-home py-5">
        <div class="container">
            <div class="row">
                @if ($recentCategories->count() > 0 || $announcementVerticals->count())                    
                    <div class="col-12 col-lg-9 animate-on-scroll mb-3" data-animation="animate__fadeInLeft">                        
                        <div class="news mb-4">{{-- border-bottom --}}
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end">
                                <div class="d-flex flex-column">
                                    <h2 class="section-title d-table px-0 p-0 w-auto m-0 montserrat-regular font-14 title-blue text-uppercase rounded-top-left">
                                        <svg class="me-2" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.04004 0C3.60676 0 0 3.60676 0 8.04001C0 12.4733 3.60676 16.0801 8.04004 16.0801C12.4733 16.0801 16.08 12.4733 16.08 8.04001C16.08 3.60676 12.4733 0 8.04004 0ZM3.65456 8.77091C3.25091 8.77091 2.92365 8.44371 2.92365 8.04001C2.92365 7.63638 3.25091 7.30913 3.65456 7.30913C4.05822 7.30913 4.38548 7.63638 4.38548 8.04001C4.38548 8.44371 4.05822 8.77091 3.65456 8.77091ZM4.59954 5.63319C4.31409 5.34775 4.31409 4.88498 4.59954 4.59954C4.88498 4.31409 5.34775 4.31409 5.63319 4.59954C5.91864 4.88493 5.91864 5.34775 5.63319 5.63319C5.3478 5.91864 4.88498 5.91864 4.59954 5.63319ZM7.09507 10.0187C6.80962 10.3041 6.34686 10.3041 6.06141 10.0187C5.77596 9.73321 5.77596 9.27041 6.06141 8.98501C6.34686 8.69961 6.80962 8.69961 7.09507 8.98501C7.38046 9.27041 7.38046 9.73331 7.09507 10.0187ZM8.55694 7.09502C8.27144 7.38047 7.80868 7.38047 7.52324 7.09502C7.23779 6.80957 7.23779 6.34681 7.52324 6.06136C7.80868 5.77592 8.27144 5.77592 8.55694 6.06136C8.84224 6.34681 8.84224 6.80962 8.55694 7.09502Z" fill="#3BBA36"/>
                                        </svg>
                                        Confira na íntegra
                                    </h2>
                                    <h3 class="section-title d-table px-0 py-2 w-auto m-0 montserrat-semiBold font-24 title-blue text-uppercase rounded-top-left">
                                        ÚLTIMAS ATUALIZAÇÕES
                                    </h3>
                                </div>

                                <nav class="mt-3 mt-md-0 d-none">
                                    <ul class="list-unstyled d-flex flex-row flex-wrap gap-2 gap-md-3 justify-content-start justify-content-md-center mb-0">
                                        <li class="py-1 py-sm-2 px-2 px-sm-3 text-uppercase montserrat-semiBold font-14 text-white background-red active">
                                            <a href="javascript:void(0)" class="text-decoration-none text-white category-filter" data-category="todas">
                                                Todas
                                            </a>
                                        </li>
                                        
                                        @foreach($recentCategories as $index => $category)
                                            <li class="py-2 px-1 px-sm-3 text-uppercase montserrat-semiBold font-14 text-black">
                                                <a href="javascript:void(0)" class="text-decoration-none text-black category-filter" data-category="{{ $category->slug }}">
                                                    {{ $category->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div id="news-container">
                            @include('client.ajax.filter-blog-homePage', [
                                'latestNews' => $latestNews
                            ])
                        </div>
                    </div>
                @endif
                @if ($events->count() > 0)      
                    <div class="col-lg-3 h-100">
                        <div class="border col-11 m-auto p-2" data-aos="fade-left" data-aos-delay="100">
                            <div class="section-title mb-0">
                                <h3 class="m-0 text-uppercase montserrat-medium font-18 title-blue">
                                    <svg class="me-2" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.66667 0C3.11848 0 2.66667 0.462085 2.66667 1.02273V1.70455H1.33333C0.600267 1.70455 0 2.31845 0 3.06818V13.6364C0 14.3861 0.600267 15 1.33333 15H12.6667C13.3997 15 14 14.3861 14 13.6364V3.06818C14 2.31845 13.3997 1.70455 12.6667 1.70455H11.3333V1.02339C11.3333 0.46275 10.8815 0.000664781 10.3333 0.000664781C9.78515 0.000664781 9.33333 0.46275 9.33333 1.02339V1.70521H4.66667V1.02339C4.66667 0.46275 4.21485 0.000664781 3.66667 0.000664781V0ZM3.66667 0.681818C3.85742 0.681818 4 0.827637 4 1.02273V3.06818C4 3.26327 3.85742 3.40909 3.66667 3.40909C3.47591 3.40909 3.33333 3.26327 3.33333 3.06818V1.02273C3.33333 0.827642 3.47591 0.681818 3.66667 0.681818ZM10.3333 0.681818C10.5241 0.681818 10.6667 0.827637 10.6667 1.02273V3.06818C10.6667 3.26327 10.5241 3.40909 10.3333 3.40909C10.1426 3.40909 10 3.26327 10 3.06818V1.02273C10 0.827642 10.1426 0.681818 10.3333 0.681818ZM1.33333 2.38636H2.66667V3.06818C2.66667 3.62882 3.11848 4.09091 3.66667 4.09091C4.21485 4.09091 4.66667 3.62882 4.66667 3.06818V2.38636H9.33333V3.06818C9.33333 3.62882 9.78515 4.09091 10.3333 4.09091C10.8815 4.09091 11.3333 3.62882 11.3333 3.06818V2.38636H12.6667C13.0417 2.38636 13.3333 2.68466 13.3333 3.06818V5.45523H0.666667V3.06818C0.666667 2.68466 0.958333 2.38636 1.33333 2.38636ZM0.666667 6.13636H13.3333V13.6364C13.3333 14.0199 13.0417 14.3182 12.6667 14.3182H1.33333C0.958333 14.3182 0.666667 14.0199 0.666667 13.6364V6.13636Z" fill="#31404B"/>
                                    </svg>
                                    PRÓXIMOS <span class="montserrat-semiBold">EVENTOS</span>
                                </h3>
                            </div>

                            <div class="bg-white p-3 px-0">      
                                @foreach($events as $event)                        
                                    <article>
                                        <div class="d-flex flex-column align-items-center mb-3 overflow-hidden">
                                            <div class="date col-6 h-100 d-flex justify-content-center align-items-center border border-right-1 background-red">
                                                <span class="montserrat-medium w-100 h-50 d-flex justify-content-center align-items-center font-16 title-blue text-white" style="border-right: 1px solid #FFF;">
                                                    {{ \Carbon\Carbon::parse($event->date)->format('d') }}
                                                </span>
                                                <span class="montserrat-medium w-100 h-50 d-flex justify-content-center align-items-center font-16 title-blue text-white">
                                                    {{ ucfirst(\Carbon\Carbon::parse($event->date)->translatedFormat('F')) }}
                                                </span>
                                            </div>
                                            <div class="col-12 h-100 px-3 text-center py-3 bg-white d-flex flex-column justify-content-center border">
                                                @if($event->link)
                                                    <a href="{{ $event->link }}" class="underline">
                                                @else
                                                    <a href="{{ route('client.event') }}?event_id={{ $event->id }}&scroll=true" class="underline">
                                                @endif
                                                    <h3 class="h6 m-0 montserrat-semiBold font-14 title-blue" title="{{$event->title}}">
                                                        {{ substr(strip_tags($event->title), 0, 50) }}...
                                                    </h3>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach              
                                <div class="btn-about d-table m-auto mt-4">
                                    <a href="{{route('client.event')}}" class="background-red montserrat-semiBold font-15 py-2 px-4 rounded-5 text-black">
                                        Todos os eventos
                                        <svg class="ms-3" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 5.66003C14.562 5.66003 12.34 3.439 12.34 1V0H10.34V1C10.34 2.774 11.118 4.43803 12.339 5.66003H0V7.66003H12.339C11.118 8.88203 10.34 10.546 10.34 12.32V13.32H12.34V12.32C12.34 9.88103 14.562 7.66003 17 7.66003H18V5.66003H17Z" fill="black"/>
                                        </svg>
                                    </a>
                                </div>                      
                            </div>
                        </div>
                        <div class="mt-3">
                            @include('client.includes.announcementVertical')
                        </div>
                    </div>              
                @endif
            </div>
        </div>
    </section>
@endif

@include('client.includes.complaint')

@include('client.includes.social')

<script>
    const section = document.querySelector('section.video');
    if (section) {
        const wrapper = section.querySelector('.mySwiper .swiper-wrapper');
        const slides  = Array.from(section.querySelectorAll(".mySwiper .swiper-slide"));
        const player  = section.querySelector("#videoPlayer");

        let currentIndex = 0;
        let firstLoad = true;

        // Normaliza URL (adiciona protocolo se vier //)
        function norm(url) {
            if (!url) return "";
            return url.startsWith("//") ? window.location.protocol + url : url;
        }

        // Converte para URL de embed (YouTube / Vimeo)
        function toEmbed(rawUrl) {
            const urlStr = norm(rawUrl);
            if (!urlStr) return "";

            let u;
            try { u = new URL(urlStr); } catch { return urlStr; }

            const host = u.hostname.replace(/^www\./, "");

            // YouTube
            if (host.includes("youtube.com") || host.includes("youtu.be")) {
                // Se já for /embed/ mantém
                if (u.pathname.startsWith("/embed/")) return u.toString();

                // youtu.be/<id>
                if (host === "youtu.be" && u.pathname.length > 1) {
                    const id = u.pathname.split("/")[1];
                    return `https://www.youtube.com/embed/${id}`;
                }

                // shorts -> converte para embed
                if (u.pathname.startsWith("/shorts/")) {
                    const id = u.pathname.split("/")[2] || u.pathname.split("/")[1];
                    return `https://www.youtube.com/embed/${id}`;
                }

                // watch?v=<id>
                const v = u.searchParams.get("v");
                if (v) return `https://www.youtube.com/embed/${v}`;

                // /live/<id> ou /v/<id> etc.
                const parts = u.pathname.split("/").filter(Boolean);
                if (parts.length >= 2) {
                    const id = parts.pop();
                    return `https://www.youtube.com/embed/${id}`;
                }
            }

            // Vimeo
            if (host.includes("vimeo.com")) {
                // Se já for player.vimeo.com
                if (host === "player.vimeo.com") return u.toString();

                // Extrai o último segmento numérico como ID
                const parts = u.pathname.split("/").filter(Boolean);
                const last = parts[parts.length - 1];
                if (/^\d+$/.test(last)) {
                    return `https://player.vimeo.com/video/${last}`;
                }
            }

            // Desconhecido: retorna original
            return urlStr;
        }

        function setActiveByIndex(index, userTriggered = false) {
            if (index < 0 || index >= slides.length) return;

            slides.forEach(s => s.classList.remove("active"));
            const slide = slides[index];
            slide.classList.add("active");

            const raw = slide.getAttribute("data-video");
            const embedUrl = toEmbed(raw);
            if (embedUrl) player.src = embedUrl;

            currentIndex = index;

            if (!firstLoad || userTriggered) {
                slide.scrollIntoView({ behavior: "smooth", block: "nearest" });
            }
        }

        // Clique em um item
        slides.forEach((slide, idx) => {
            slide.addEventListener("click", () => setActiveByIndex(idx, true));
        });

        // Inicia no primeiro (sem rolagem)
        if (slides.length > 0) setActiveByIndex(0);

        // Libera rolagem depois do load
        window.addEventListener("load", () => {
            setTimeout(() => { firstLoad = false; }, 500);
        });

        // Navegação ↑ ↓
        const btnUp = section.querySelector(".swiper-button-up");
        const btnDown = section.querySelector(".swiper-button-down");

        btnUp && btnUp.addEventListener("click", () => {
            if (currentIndex > 0) setActiveByIndex(currentIndex - 1, true);
        });
        btnDown && btnDown.addEventListener("click", () => {
            if (currentIndex < slides.length - 1) setActiveByIndex(currentIndex + 1, true);
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryLinks = document.querySelectorAll('.category-filter');
        const newsContainer = document.getElementById('news-container');

        categoryLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Ativar/desativar classes visuais
                categoryLinks.forEach(l => {
                    l.parentElement.classList.remove('active', 'text-white', 'background-red');
                    l.parentElement.classList.add('text-black');
                    l.classList.remove('text-white');
                    l.classList.add('text-black');
                });

                this.parentElement.classList.add('active', 'text-white', 'background-red');
                this.parentElement.classList.remove('text-black');
                this.classList.add('text-white');
                this.classList.remove('text-black');

                const categorySlug = this.getAttribute('data-category');
                
                // Loading indicator
                newsContainer.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <div class="spinner-border text-blue" role="status">
                            <span class="visually-hidden montserrat-semiBold font-15">Carregando...</span>
                        </div>
                        <p class="mt-2 montserrat-semiBold font-15">Carregando notícias...</p>
                    </div>
                `;

                // Fazer requisição AJAX
                fetch(`blog/filter/${categorySlug}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erro na rede');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            newsContainer.innerHTML = data.html;
                        } else {
                            throw new Error(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        newsContainer.innerHTML = `
                            <div class="col-12 text-center py-5">
                                <p class="text-danger montserrat-semiBold font-15">Erro ao carregar notícias: ${error.message}</p>
                            </div>
                        `;
                    });
            });
        });
    });
</script>
@endsection
