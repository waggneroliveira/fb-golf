@extends('client.core.client')
@section('content')
<!-- Pop-up -->
@if (isset($popUp))
   <div id="popup" class="popup" style="display: flex;">
      <div class="popup-content">
         <span class="close-btn font-24 montserrat-bold">x</span>
         @if ($popUp->link != null)            
            <a href="{{ $popUp->link }}" target="_blank" rel="noopener noreferrer">
               <img 
                  src="{{ asset('storage/' . $popUp->path_image) }}" 
                  alt="Pop-up"
                  fetchpriority="high" 
                  width="500" 
                  height="auto"
                  decoding="async"
                  loading="eager"
               />
            </a>
            @else
            <img 
               src="{{ asset('storage/' . $popUp->path_image) }}" 
               alt="Pop-up"
               fetchpriority="high" 
               width="500" 
               height="auto"
               decoding="async"
               loading="eager"
            />
         @endif

      </div>
   </div>
   <script defer>
      document.addEventListener("DOMContentLoaded", function () {
         let popup = document.getElementById("popup");
         let closeBtn = document.querySelector(".close-btn");
         popup.style.display = "flex";
         closeBtn.addEventListener("click", () => popup.style.display = "none");
         window.addEventListener("click", (e) => { if (e.target === popup) popup.style.display = "none"; });
      });
   </script>
@endif

<section class="blog mb-0">
    <div class="container mb-5 blog-inn news-home">
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
                              <div class="position-relative overflow-hidden" style="height: 504px;">
                                 <img class="img-fluid h-100 w-100"
                                 src="{{ $blogSuperHighlight->path_image_thumbnail ? asset('storage/'.$blogSuperHighlight->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                 alt="{{ $blogSuperHighlight->path_image_thumbnail ? 'Notícia super destaque' : 'Sem imagem'}}"
                                 style="object-fit: cover; aspect-ratio: 1.91/1;">

                                 <div class="overlay">
                                    <span class="badge bg-danger montserrat-semiBold font-12 text-uppercase py-2 px-3 rounded-0 mb-2">{{$blogSuperHighlight->category->title}}</span>

                                    <a href="{{route('blog-inner', ['slug' => $blogSuperHighlight->slug])}}">
                                       <h1 class="h2 m-0 text-white  montserrat-bold font-28 d-block">{{$blogSuperHighlight->title}}</h1>
                                    </a>
                                    <p class="text-white mb-0 montserrat-regular font-15 mt-2">{{ substr(strip_tags($blogSuperHighlight->text), 0, 300)}}</p>
                                    <p class="text-white mb-0 montserrat-regular font-15 mt-3">{{$dataFormatada}}</p>
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
                        <div class="col-md-12 box-small px-1 pb-1">
                           <article>
                              <div class="position-relative overflow-hidden" style="height: 250px;">
                                 <img class="img-fluid h-100 w-100"
                                 src="{{ $blogHighlight->path_image_thumbnail ? asset('storage/'.$blogHighlight->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                 alt="{{ $blogHighlight->title ? $blogHighlight->title : 'Sem imagem'}}"
                                 style="object-fit: cover; aspect-ratio: 1 / 1;">
                                 <div class="overlay">
                                    <span class="badge bg-danger text-uppercase montserrat-semiBold font-12 py-2 px-3 mb-2 rounded-0">{{$blogHighlight->category->title}}</span>

                                    <a href="{{route('blog-inner', ['slug' => $blogHighlight->slug])}}">                              
                                       <h2 class="h6 m-0 text-white montserrat-bold font-16 d-block">{{$blogHighlight->title}}</h2>
                                    </a>
                                    <p class="text-white mb-0 montserrat-regular font-12 mt-2">{{substr(strip_tags($blogHighlight->text), 0, 120)}}</p>
                                    <p class="text-white mb-0 montserrat-regular font-12 mt-3">{{$dataFormatada}}</p>
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

<section id="news" class="blog-content pt-3 my-5">
   <!-- News With Sidebar Start -->
   <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="col-lg-9 mb-4" data-aos="fade-right" data-aos-delay="100">
                  @if ($blogAll->count())                     
                     <div class="d-flex justify-content-between align-items-start mb-5">
                        <div class="d-flex flex-column">
                           <h2 class="section-title d-table px-0 p-0 w-auto m-0 montserrat-regular font-14 title-blue text-uppercase rounded-top-left">
                                 <svg class="me-2" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.04004 0C3.60676 0 0 3.60676 0 8.04001C0 12.4733 3.60676 16.0801 8.04004 16.0801C12.4733 16.0801 16.08 12.4733 16.08 8.04001C16.08 3.60676 12.4733 0 8.04004 0ZM3.65456 8.77091C3.25091 8.77091 2.92365 8.44371 2.92365 8.04001C2.92365 7.63638 3.25091 7.30913 3.65456 7.30913C4.05822 7.30913 4.38548 7.63638 4.38548 8.04001C4.38548 8.44371 4.05822 8.77091 3.65456 8.77091ZM4.59954 5.63319C4.31409 5.34775 4.31409 4.88498 4.59954 4.59954C4.88498 4.31409 5.34775 4.31409 5.63319 4.59954C5.91864 4.88493 5.91864 5.34775 5.63319 5.63319C5.3478 5.91864 4.88498 5.91864 4.59954 5.63319ZM7.09507 10.0187C6.80962 10.3041 6.34686 10.3041 6.06141 10.0187C5.77596 9.73321 5.77596 9.27041 6.06141 8.98501C6.34686 8.69961 6.80962 8.69961 7.09507 8.98501C7.38046 9.27041 7.38046 9.73331 7.09507 10.0187ZM8.55694 7.09502C8.27144 7.38047 7.80868 7.38047 7.52324 7.09502C7.23779 6.80957 7.23779 6.34681 7.52324 6.06136C7.80868 5.77592 8.27144 5.77592 8.55694 6.06136C8.84224 6.34681 8.84224 6.80962 8.55694 7.09502Z" fill="#3BBA36"></path>
                                 </svg>
                                 Confira na íntegra
                           </h2>
                           <h3 class="section-title d-table px-0 py-2 w-auto m-0 montserrat-semiBold font-24 title-blue text-uppercase rounded-top-left">
                                 ÚLTIMAS ATUALIZAÇÕES
                           </h3>
                        </div>
                        @if (Route::currentRouteName() == 'blog-search')
                           <a href="{{ route('blog') }}#news" class="d-flex justify-content-center align-items-center btn background-red text-black montserrat-medium py-0 font-15" style="height:47.6px;">Limpar buscas</a>
                        @endif
                     </div>
                     <div class="row">
                        @foreach($blogAll as $blog)   
                              @php
                                 \Carbon\Carbon::setLocale('pt_BR');
                                 $dataFormatada = \Carbon\Carbon::parse($blog->date)->translatedFormat('d \d\e F \d\e Y');
                              @endphp                     
                              <article class="col-12 col-sm-12 col-md-4">                                 
                                 <div class="d-flex flex-column align-items-center bg-white mb-3 overflow-hidden position-relative">
                                    <img loading="lazy" class="img-fluid col-12"
                                    src="{{ $blog->path_image_thumbnail ? asset('storage/'.$blog->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                    alt="{{ $blog->title ? $blog->title : 'Sem imagem'}}"
                                    style="height: 190px;aspect-ratio:1/1;object-fit: cover;">
                                    <span class="montserrat-medium font-10 text-uppercase py-1 px-3 mr-2 bg-danger position-absolute start-0" style="top:15px">
                                       {{$blog->category->title}}
                                    </span>
                                    <div class="col-12 h-100 p-3 d-flex flex-column justify-content-center border border-left-0">
                                          <a href="{{ route('blog-inner', $blog->slug) }}" class="underline">
                                             <h3 class="h6 m-0 montserrat-semiBold font-14 title-blue">
                                                {{ Str::limit($blog->title, 60) }}
                                             </h3>
                                          </a>
                                          <div class="blog-text mt-3">{!! Str::limit($blog->text, 160) !!}</div>
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
                     <div class="mt-3 float-end">
                        {{$blogAll->links()}}
                     </div>
                     @else
                     <div class="alert alert-warning d-flex align-items-center flex-column text-center py-4" role="alert">
                        <i class="bi bi-emoji-frown fs-1 mb-2"></i>
                        <h3 class="alert-heading text-uppercase montserrat-bold font-20">Nenhuma notícia encontrada</h3>
                     </div>
                  @endif
               </div>
               
               <div class="col-lg-3" data-aos="fade-left" data-aos-delay="100">
                  <aside>   
                     <div class="col-12 mb-3 d-flex justify-content-between gap-3 flex-wrap align-items-center">
                        <form action="{{route('blog-search')}}#news" class="search col-12" method="post">
                           @csrf
                           <div class="input-group input-group-lg">
                              <input type="search" name="search" class="form-control border-end-0 text-color montserrat-regular bg-white py-0" placeholder="Pesquise aqui">
                              <button type="submit" title="search" class="btn-reset input-group-text bg-white border">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99989 0C3.13331 0 0 3.13427 0 6.99979C0 10.8663 3.13351 14.0004 6.99989 14.0004C8.49916 14.0004 9.88877 13.5285 11.0281 12.7252L15.9512 17.6491C16.4199 18.117 17.1798 18.117 17.6485 17.6491C18.1172 17.1804 18.1172 16.4205 17.6485 15.9518L12.7254 11.0288C13.5279 9.88936 13.9998 8.4997 13.9998 6.99983C13.9998 3.13411 10.8655 0 6.99989 0ZM2.39962 6.99979C2.39962 4.45981 4.45907 2.40019 6.99989 2.40019C9.54072 2.40019 11.6002 4.45961 11.6002 6.99979C11.6002 9.54058 9.54072 11.6 6.99989 11.6C4.45907 11.6 2.39962 9.54058 2.39962 6.99979Z" fill="#31404B"/>
                                 </svg>                                    
                              </button>
                           </div>
                        </form>
                        
                     </div>
                      @if ($blogSeeAlso->count())  
                      
                        <div class="mb-3 bg-white border-top-0 rounded-top-3">
                            <div class="mb-0 py-3">
                                <h4 class="m-0 text-uppercase montserrat-bold text-center font-20 title-blue">VEJA TAMBÉM</h4>
                            </div>
                            <div class="p-3 border">
                                @foreach($blogSeeAlso as $seeAlso)    
                                    @php
                                        \Carbon\Carbon::setLocale('pt_BR');
                                        $dataFormatada = \Carbon\Carbon::parse($seeAlso->date)->translatedFormat('d \d\e F \d\e Y');
                                    @endphp                               
                                    <article>
                                        <div class="d-flex align-items-center bg-white mb-3 overflow-hidden position-relative rounded-0" style="height: 100px;">
                                            <div class="w-100 h-100 pe-1 d-flex flex-column justify-content-center">
                                                <a href="{{route('blog-inner', ['slug' => $seeAlso->slug])}}" class="underline">
                                                    <h3 class="h6 m-0 montserrat-semiBold font-12 title-blue">{{substr(strip_tags($seeAlso->title), 0, 70)}}...</h3>
                                                </a>
                                            </div>

                                            <img loading="lazy" class="img-fluid"
                                            src="{{ $seeAlso->path_image_thumbnail ? asset('storage/'.$seeAlso->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                            alt="{{ $seeAlso->title ? $seeAlso->title : 'Sem imagem'}}">
                                            <div class="mt-2 position-absolute end-0 top-0">
                                                <span class="badge bg-danger montserrat-semiBold font-10 text-uppercase py-1 px-2 mr-2 rounded-0">{{$seeAlso->category->title}}</span>
                                            </div>                                            
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                      @endif
   
                     @if ($blogCategories->count())                        
                        <!-- Tags Start -->
                        <div class="mb-3">
                           <div class="bg-white border border-top-0 p-3">
                                 <div class="d-flex flex-wrap m-n1">
                                    @foreach ($blogCategories as $category)
                                       <li class="nav-link">
                                          <a href="{{ route('blog', ['category' => $category->slug]) }}#news"
                                          class="btn btn-sm btn-outline-secondary montserrat-semiBold font-14 m-1
                                          {{ (request()->routeIs('blog-inner') && isset($blogInner) && $blogInner->category->id === $category->id) ? 'active bg-danger' : '' }}">
                                             {{ $category->title }}
                                          </a>
                                       </li>
                                 @endforeach
                                 </div>
                           </div>
                        </div>
                        <!-- Tags End -->
                     @endif

                      <!-- Newsletter Start -->
                        <div class="mb-3 bg-white border">
                          <div class="pt-3">
                              <h4 class="m-0  montserrat-bold text-center font-20 title-blue">Newsletter</h4>
                          </div>
                          @include('client.includes.newsletter')
                      </div>
                      <!-- Newsletter End -->
   
                      <!-- Ads Start -->
                      @if ($announcementVerticals->count())                        
                        <div class="mb-3">
                           @include('client.includes.announcementVertical')
                        </div>
                      @endif
                      <!-- Ads End -->
                  </aside>
               </div>
           </div>
       </div>
   </div>
   <!-- News With Sidebar End -->
</section>
@endsection