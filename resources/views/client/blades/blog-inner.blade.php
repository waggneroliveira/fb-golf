@extends('client.core.client')
@section('content')
    <!-- News With Sidebar Start -->
    <div class="container-fluid pb-5 blog-inn news-home position-relative" style="margin-top: 80px;">
        <div class="position-absolute end-0 top-0">
            <svg width="85" height="125" viewBox="0 0 85 125" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g filter="url(#filter0_d_3080_1465)">
            <rect x="6.80005" width="115" height="108" fill="url(#pattern0_3080_1465)" shape-rendering="crispEdges"></rect>
            </g>
            <defs>
            <filter id="filter0_d_3080_1465" x="4.86374e-05" y="0" width="128.6" height="124.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset dy="10"></feOffset>
            <feGaussianBlur stdDeviation="3.4"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3080_1465"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3080_1465" result="shape"></feBlend>
            </filter>
            <pattern id="pattern0_3080_1465" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_3080_1465" transform="scale(0.00694444 0.00714286)"></use>
            </pattern>
            <image id="image0_3080_1465" width="144" height="140" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"></image>
            </defs>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @php
                        \Carbon\Carbon::setLocale('pt_BR');
                        $dataFormatada = \Carbon\Carbon::parse($blogInner->date)->translatedFormat('d \d\e F \d\e Y');
                    @endphp
                    <div class="navigation-detals d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('blog')}}" class="montserrat-medium font-15 d-flex justify-content-between align-items-center gap-2 text-black">
                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.354085 4.44182L4.43946 8.53515L5.34529 7.62946L2.35398 4.61981L2.1783 4.44294L2.35517 4.26629L5.36287 1.2613L4.44546 0.352537L0.354085 4.44182Z" fill="black" stroke="black" stroke-width="0.5"/>
                                </svg>

                                Voltar
                            </a>
                        </div>
                        <ul class="d-flex flex-row justify-content-start align-items-center gap-4 mb-0 list-unstyled">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link montserrat-medium text-center font-15 text-black">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog')}}" class="nav-link montserrat-medium text-center font-15 text-black">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link montserrat-medium text-center font-15 text-primary">{{substr(strip_tags($blogInner->title), 0, 40)}}...</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <article>                            
                            <img class="img-fluid w-100 rounded-3 image-inner d-flex justify-content-center align-items-center"
                            src="{{ $blogInner->path_image_thumbnail ? asset('storage/'.$blogInner->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                            alt="{{ $blogInner->title ? $blogInner->title : 'Sem imagem'}}"
                            style="aspect-ratio:1.91/1;object-fit: cover;">
                            
                            <h1 class="mt-3 title-blue montserrat-bold font-32 text-uppercase">{{$blogInner->title}}</h1>
                            <div class="mb-3 d-flex justify-content-between align-items-center gap-1 flex-wrap">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-danger rounded-0 montserrat-semiBold font-12 text-uppercase py-2 px-3 me-2">{{$blogInner->category->title}}</span>
                                    <p class="text-color mb-0 montserrat-regular font-15">
                                        <svg class="me-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3080_1648)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8129 2.18705C9.87875 -0.747082 5.12179 -0.747082 2.18766 2.18705C-0.746472 5.12118 -0.746472 9.87813 2.18766 12.8123C5.12179 15.7464 9.87875 15.7464 12.8129 12.8123C15.7464 9.87879 15.7464 5.12118 12.8129 2.18705ZM10.3087 8.60428C10.8399 8.91572 10.3666 9.72266 9.83549 9.41121L7.26315 7.90369C7.11476 7.81644 7.03196 7.6604 7.03196 7.4999H7.03068V2.62197C7.03068 2.00354 7.97009 2.00354 7.97009 2.62197V7.233L10.3087 8.60428Z" fill="black"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_3080_1648">
                                        <rect width="15" height="15" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
    
                                        {{$dataFormatada}}
                                    </p>
                                </div>
                                <div class="position-relative d-flex justify-content-center align-items-end flex-column">
                                    <button id="shareBtn" class="montserrat-semiBold font-14 bg-light px-3 d-flex justify-content-around align-items-center btn text-muted">
                                        Compartilhar
                                        <svg class="ms-2" width="18" height="20" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.28845 8.58841C1.92459 8.58841 0 10.5692 0 13.002C0 15.4348 1.92459 17.4155 4.28845 17.4155C5.68567 17.4155 6.92779 16.7195 7.70969 15.6506L15.6837 20.0897C15.5186 20.5571 15.4231 21.0603 15.4231 21.5864C15.4231 24.0193 17.3477 26 19.7115 26C22.0754 26 24 24.0193 24 21.5864C24 19.1536 22.0754 17.1729 19.7115 17.1729C18.3143 17.1729 17.0722 17.8689 16.2903 18.9378L8.31633 14.4987C8.48136 14.0313 8.57691 13.5281 8.57691 12.9982C8.57691 12.4682 8.47516 11.9356 8.3002 11.4554L16.2033 6.94346C16.9789 8.08134 18.262 8.82714 19.71 8.82714C22.0739 8.82714 23.9985 6.84639 23.9985 4.41357C23.9985 1.98074 22.0739 0 19.71 0C17.3462 0 15.4216 1.98074 15.4216 4.41357C15.4216 4.88736 15.4973 5.34584 15.6313 5.77367L7.67731 10.3151C6.89306 9.26915 5.66339 8.58848 4.28466 8.58848L4.28845 8.58841ZM19.7148 18.4846C21.3788 18.4846 22.7326 19.8779 22.7326 21.5905C22.7326 23.303 21.3788 24.6963 19.7148 24.6963C18.0508 24.6963 16.697 23.303 16.697 21.5905C16.697 21.0605 16.8273 20.5611 17.0556 20.1231C17.0556 20.1231 17.0594 20.1167 17.0618 20.1167C17.0618 20.1129 17.0618 20.1065 17.068 20.1039C17.583 19.1397 18.5732 18.4859 19.7136 18.4859L19.7148 18.4846ZM19.7148 1.30799C21.3788 1.30799 22.7326 2.70127 22.7326 4.41383C22.7326 6.12639 21.3788 7.51967 19.7148 7.51967C18.0508 7.51967 16.697 6.12639 16.697 4.41383C16.697 2.70127 18.0508 1.30799 19.7148 1.30799ZM4.28845 16.1081C2.62444 16.1081 1.27065 14.7149 1.27065 13.0023C1.27065 11.2897 2.62444 9.89646 4.28845 9.89646C5.95247 9.89646 7.30626 11.2897 7.30626 13.0023C7.30626 13.5348 7.17596 14.0355 6.94393 14.4735C6.94393 14.4735 6.94393 14.4773 6.94021 14.4799C6.94021 14.4799 6.94021 14.4863 6.93648 14.4863C6.42524 15.4504 5.42758 16.1081 4.28724 16.1081L4.28845 16.1081Z" fill="#6c757d"/>
                                        </svg>
                                    </button>
                                    <div id="socialLinks" class="socialLinks mt-2 opacity-0">
                                        <div class="d-flex gap-2">
                                            <a href="https://api.whatsapp.com/send?text={{ urlencode($blogInner->title . ' ' . url()->current()) }}" target="_blank" class="p-0 d-flex justify-content-center align-items-center rounded-circle btn btn-sm bg-whatsapp" style="width: 25px; height: 25px;"><i class="fab font-12 fa-whatsapp text-white"></i></a>    
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blogInner->title) }}" target="_blank" class="p-0 d-flex justify-content-center align-items-center rounded-circle btn btn-sm btn-twiter" style="width: 25px; height: 25px;"><i class="fab font-12 fa-x-twitter text-white"></i></a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="p-0 d-flex justify-content-center align-items-center rounded-circle btn btn-facebook btn-sm" style="width: 25px; height: 25px;"><i class="fab font-12 fa-facebook-f text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4">
                                <div class="barra-de-progresso mt-2 d-flex align-items-center gap-2">
                                    <i id="audioIcon" class="fa fa-play d-flex justify-content-center align-items-center rounded-5 font-12" onclick="togglePlayPause()"></i>
                                    <span id="audioStatus" class="text-muted montserrat-semiBold font-12"></span>

                                    <div id="progressContainer" class="progressContainer flex-grow-1">
                                        <div id="progressBar" class="background-red" style="width:0%;"></div>
                                    </div>

                                    <!-- Controlador de velocidade -->
                                    <div class="d-flex gap-1 align-items-center">
                                        <button id="decreaseSpeed" class="btn-voz d-flex justify-content-center align-items-center btn btn-sm text-white border">-</button>
                                        <span id="speedLabel" class="text-white montserrat-semiBold font-12 ms-1 me-1">1x</span>
                                        <button id="increaseSpeed" class="btn-voz d-flex justify-content-center align-items-center btn btn-sm text-white border">+</button>
                                    </div>

                                    <!-- Controlador de volume simplificado -->
                                    <div class="d-flex align-items-center ms-3 justify-content-center">
                                        <i class="fa fa-volume-up text-white me-2"></i>
                                        <input id="volumeSlider" type="range" min="0" max="1" step="0.1" value="1" class="form-range w-50">
                                    </div>
                                </div>

                                <div class="text-blog-inner montserrat-medium font-16 mt-4 text-audio">
                                    {!! $blogInner->text !!}
                                </div>                                
                            </div>                        
                        </article>                        
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment Form Start -->
                    <div class="mb-0 mt-5 d-none">
                        <div class="section-title mb-0 rounded-top-left">
                            <h4 class="m-0 text-uppercase montserrat-bold font-25 title-blue">Deixe um comentário</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form id="commentForm">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blogInner->id }}">

                                <div class="mb-3">
                                    <label for="message">Mensagem *</label>
                                    <textarea id="message" name="comment" required cols="30" rows="5" class="form-control montserrat-regular font-15"></textarea>
                                </div>
                                                                
                                <div class="mb-0">
                                    <button type="submit" class="btn background-red rounded-3 montserrat-medium text-white font-15">Comentar</button>
                                </div>
                            </form>
                            <div id="commentMessage" class="mt-3 montserrat-regular font-15"></div>
                        </div>
                    </div>
                    <!-- Comment Form End -->

                    <!-- Comment List Start -->
                    @if (isset($blogInner->comments) && $blogInner->comments->count() > 0)                        
                        <div class="mb-3 mt-3 comments d-none">
                            <div class="section-title mb-0 title-blue rounded-top-left">
                                <h4 class="m-0 text-uppercase montserrat-bold font-25 title-blue">{{$blogInner->comments->count()}} Comentários</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-4 comment-scroll">
                                @foreach ($blogInner->comments as $comment)
                                    @php
                                        \Carbon\Carbon::setLocale('pt_BR');
                                        $dataFormatada = \Carbon\Carbon::parse($comment->date)->translatedFormat('d \d\e F \d\e Y');
                                        $client = $comment->client;
                                    @endphp

                                    @if ($client)
                                        <div class="d-flex gap-2 flex-column mb-4">
                                            <div class="d-flex mb-0 gap-3">
                                                <img src="{{ $client->path_image_thumbnail ? url($client->path_image_thumbnail) : asset('build/client/images/user.jpg') }}"
                                                    alt="Imagem do cliente"
                                                    class="img-fluid mr-3 mt-1 rounded-circle"
                                                    style="width: 50px; height: 50px; object-fit: cover;">
                                                <div class="d-flex flex-column col-10 comment">
                                                    <h6 class="title-blue montserrat-bold font-15 mb-0">{{ $client->name }}</h6>
                                                    <small class="title-blue mb-0 montserrat-regular font-12">
                                                        {{ $dataFormatada }}
                                                    </small>
                                                    <div class="w-100 mt-3">
                                                        <div class="comment-text">
                                                            {!! $comment->comment !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <!-- Comment List End -->
                </div>                

                <div class="col-lg-3" data-aos=fade-left data-aos-delay=150>
                  <aside>
                    <style>
                        @media (max-width: 576px) {
                            .cat-mt {
                                margin-top: 15px;
                            }
                            .text-blog-inner.montserrat-regular.font-16 p img{
                                max-width: 350px;
                                max-height: inherit;
                                margin: 0;
                            }
                        }
                    </style>
                    @if ($blogRelacionados)                        
                        <!-- Popular News Start -->
                        <div class="mb-3 bg-white border-top-0 rounded-top-3">
                            <div class="mb-0 py-3">
                                <h4 class="m-0 text-uppercase montserrat-bold text-center font-20 title-blue">Relacionados</h4>
                            </div>
                            <div class="p-3 border">
                                @foreach($blogRelacionados as $relacionado)    
                                    @php
                                        \Carbon\Carbon::setLocale('pt_BR');
                                        $dataFormatada = \Carbon\Carbon::parse($relacionado->date)->translatedFormat('d \d\e F \d\e Y');
                                    @endphp                               
                                    <article>
                                        <div class="d-flex align-items-center bg-white mb-3 overflow-hidden position-relative rounded-0" style="height: 100px;">
                                            <div class="w-100 h-100 pe-1 d-flex flex-column justify-content-center">
                                                <a href="{{route('blog-inner', ['slug' => $relacionado->slug])}}" class="underline">
                                                    <h3 class="h6 m-0 montserrat-semiBold font-12 title-blue">{{substr(strip_tags($relacionado->title), 0, 70)}}...</h3>
                                                </a>
                                            </div>

                                            <img loading="lazy" class="img-fluid"
                                            src="{{ $relacionado->path_image_thumbnail ? asset('storage/'.$relacionado->path_image_thumbnail) : 'https://placehold.co/600x400?text=Sem+imagem&font=montserrat' }}"
                                            alt="{{ $relacionado->title ? $blogInner->title : 'Sem imagem'}}">
                                            <div class="mt-2 position-absolute end-0 top-0">
                                                <span class="badge bg-danger montserrat-semiBold font-10 text-uppercase py-1 px-2 mr-2 rounded-0">{{$relacionado->category->title}}</span>
                                            </div>                                            
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                        <!-- Popular News End -->
                      @endif

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
        <div class="position-absolute bottom-0 start-0">
            <svg class="svg-color" width="357" height="592" viewBox="0 0 357 592" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="357" height="592" fill="url(#pattern0_3542_1935)"></rect>
            <defs>
            <pattern id="pattern0_3542_1935" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_3542_1935" transform="scale(0.00280112 0.00168919)"></use>
            </pattern>
            <image id="image0_3542_1935" width="357" height="592" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWUAAAJQCAYAAABW2nU4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAFCgSURBVHgB7Z2Jcts806whb0mcvHXu/zLPl9iWZVn61fSMPIa5gCQIAmA/VYodWbvI5rAxy84RQkgkzufz7vLj/nK5vVyOl8v7brc7ORLMzhFCyEwuYgwR/nm53Hl/giA/UZjDoSgTQiZzEeMb9yHG9z03O15E+cmRIG4cIYTM427o7xfxHroNESjKhJBOJBL2r9uJd+zElngNeKgfjgRBUSaE9HF/EWBfUOEf/1HBvggzRPl94HFuVchJPxRlQjaERLk/2iLgDg7OE+aLCCOrApdf3u36oCAHQlEmZENcBPV8+fF2ufy+CO2vIXGW2z9fLj88X3jvvnrFQ5Eysy8CoSgTUjgQ1ssFIvtfoNCeLpe/uKv7EOf7odu7D9/4l7kO98X1et9zz0Pgds9yHzIARZmQ8nl0HxkQ2J8fLpf/RKSHxBbRLqLmxxbf2L8tRHnnRcs795l50aYlEGHc79/l/kORNBGYpkJIwUhUfNvyJ+zbsBcQpUJ8WyvrIMxyG9gTEPT95bo38/i47iQ+Mnxj/P8oxSK7j5s0C3g/zcM2lXyXyyuj4/HQfCekEESAcWnEUC4Qx1+BDwFRfW0TZ3lsRMv38ri4bRNFy/Md5ab4+7/L5bdrj44Pl8d/cWQyFGVCMkeiUohjLLtRo9i3jueD8N65T0tkDK9ii5CJUJRJlYiQ2Yvd1jXKhDghanzP1fOUCLYrKp0L3jsi4Neu3hTyOWp03nxesCTEslDhfrB3cR8eMrMtJkJRJtUgAgKBQKQ3dtvWVLE38U+zQDzdUHtiDnjvhynvvaX/BZsQzYCiTIpGIjYIF/zQWNvzYASZCqS4ua+R6OJP6T7eO0R6sO2mHAjV7rALjs0CY5dFQrqhKJMiWUiM2+hcHIuFvBddZFMaW0WuWzN1Fa/jxY+gJYJXMVbe3WcRCcRd+2Nw4W8EFGVSFAnF2Af5toukeF3e0x/XntaWA1+sCK9vskbVOHC9M/0tDhRlUgwLZCGMJbpXKu/pj8uTL4t2nr8NId6HCLGZRqJR/1num413nxMUZZI95vQ+dftH9UP9yri9VLjNJuFC3hSu79N42xDSl5ADU880EsDFwA5Y0UeyZuGUsD4gyBAVNOPBfqIBDKI8VL/tIuXj5hoYHVoEOagwZECMleZ7vdz2hRHzVxgpk2yRIgYIQqrtFCILQYGY/HOfESxEAyKDRawneT2wHLTRzuRob4XsihCuUezl9eF94wwlqCjE3H4Miy+mlgQbEpEskQY5WuKbioeLMCAyPspzI1I8SsR4XegT8YBAQ8B/j+hN/AWxZXIMjPYiyLqgehgSZOnTjDMa3GdsGpw2Ufo19bOsCUbKJDtEkH+6dDQLT+5DgJrcWon43r3mPLq/QDgQ4WrGhEbMvVWBJnNEc3pz3P+atp4ijjgb0MW+zgU9YzFdey+7edE/Dor7rXaWo6dMsmKl03lEv4fLc+N3RGtHjQwDU/AaARN/9MsEDk+IS9jfNCLGQQmv/SUgwwJnFbgNrB1YTnO/P3xOf7TD3dYKUCjKJAtEvLQvcGrQJP5OhBnieyuCMHaB8Ze8D0R4eB9rF36M5SRnCVqlB3oX4eTzwntWrz1mhgw+u0f5LrKosEwBRZmsguz4jV/pPkQMAhi7gMJOWtbIz0f/jteCHf/J/H+KoKa0XWKjAqyR7inAttAezCc5y1niIKTP8yACrX06qhRoijJJjvGMsVM1I4ncMhVtzbQMeR6I/w/vbwcRE9zmt1l4e3DpLJRTy+/60/ZMvnfLox6uPteQ593oh0TXqT4z7fv8o1aBpiiTpMjOq9Ekdii7YBYbTWnD4pON4E42m0CiwX8RFhi1Heib+xRUvTjzfJ0CIgcGvFZdDLQ50ktz9jJCdmLrdFkYEO+D+T01vkA3Jd+lLxBSlElqbDTldxZbAo3GIRpa+PATp95WHCfm117v7j5zbSf1f5jZdjQWO+mVbK9TW+cLYl3g+9ub39fEWhyjOt3lBkWZpAY7iwrxkoIMkWyyB9xn9AvReRUBhmXyV8RwTrSOHX8/dccXQcPz57Av6mdw7fDmPub8/WgpK8frxRnHu5z95ITttYHPWAX6WIJAU5RJarCDLN3D4uA+C0CaCNZ97KA4zdX/30rF4KObRmtLyzEYKyeXfOX7y2tqhqy6r9rwU2wNeyZw67570LlyTUc0PvRbrjYHi0dIMhL2sUAGBaJP7IAaLWtEvJdoec5rwU4dkr/bSabl1QCijPfV1iRJJ2Pj57Xi8XL5z5VJ76TvtaAok2Qk6husjdYheFjg09NYrdpTwZm67c/qELdyPnYIWpX3O+C2OPip/VI6OIPKYpGQ9gVJghZluOU5meeBACKS08Wznbl+yuPG6GjW5x/jsd/d52teI5Ju0gMDb6ul1TVg86BXrSKkKJPFMYM1kzyd+xRlpHM9i3er102xK6L0/pUFxjb/9dvQUsmAyNHe8KntbNtWEa4izrQvyOJcNnB4jqnKjY/yXPp8moUBMcTpNiL2McFI065zN3PUUUcOdG/D+JlpeiQOycWZkTJZFIlSU/Z/QESswgz8aHPMNj97QQ9IlocvyCH9ibUicWzErAUrOKCc3Geu9lleR67zAHMkeeRMUSZLkzrS6zr7a9LgXDhv0lt5FiYPejRyMHi5PAaEAPsqBMK+PxVbjbQhwueBikGcLfxxyx8ote+ItY5KxorzomOsaF+QxVhx/pxW2OkCX1M44MJzkmMJcl/aXdO32K2A6ZW85P5/HR2FUm33sR3U1MB+sWkpnDxClmStogL1kGEPIDLUvNoQYgmyZjF07WM3IlbJESGJMvi1hzvzfEc5AGlKYg0g4Pgt1lRUKMpkETLoh9CcbrqPiDA08wOn/4ODQQN5dMP712qfj+RaLymQN2ZSi31OzD6spaObWhqTR4J1PSghS1DaeoV6hbOFSrImQt7/gy9ciTm4Zfn2GSBKl6h56Ug9JTopJUoKI0WZLEVJizsxBblpJRl4c7VZ1mLpiLVzG5DMk5qiZnyXv2IMf6Uok6UoRZSjraZP7Mdccx5y79mClDRDmJeO2FOiXvPkM0WKMlmKEkR5bUEGN0ssFgWytHVyO2TP4OxEsjRwqWURsMm6kW1i0p0JiUrMRY8FyUGQlbXm+qU4cAY9h0wBr8nOAGh5+jh2f6AokyXIPf89Vi8LRLlIe5srqmtFyyn2/+DnqHQREN/rqOwMijLZGrMFGafkEh0j3S5Wlska0XI2kbJFFgFhZ9SUOvcn9MBLUSZLkKs32CwszRjdpGKMBkuxJ4YkjZal/DsFk55H7Awt/KmBpo92SNoce1+QrTCpuZAsVGE/0R4OS1ozeI5U3chSWUyTxV8Onn8r65aHlLld36AEijLZAtc+DBaTGWBbferv+NutS3s2iSGldxEa6Qc9l0uEiNDksyfYGdIIKKd5hnPAAuBZzga+QVEmS5CbLaYLclZ4cwURYQpRTpmyqO1UJwMBk6nUKWY8pgAR86ntAExPmUQDPqWIX+g4oVToNGMbEefKXaJGRSlFOcpnLnZGTcUmrelyjJTJLMQC0OGk3J7isGi0LIt8KW2AaAdC02MaP0v3mZvSbPexoHmFOxGZhIgxFqawY7Avd1yW9pZTV1tG3z7EZ8bnU3qfZnzXD9Zfpn1BRiEFE1hwGUoLW31Ue+EsGQWmFuVFnk8OWjWkzf205eiMlEkQcso71JISp5RI6UKj+GPigam1cTc3a6GH4iPl6wNffObL5wSfeUx3vtzQs84mTY6iTHoZIcY6HseKyMGt19ehBuDTR13UkoisGlFuHvxjm9t/2MzFCjNeN0WZtGMW77Ch9EW6OH089Ez4pSjPI7oou3XOXJKsOYjPDNvslytvnWOn6wgUZXJlxOIdRPgwtBCFCEYWY7idTeN2AQtjle9iQSvmCwgQRJhLzGdu8rm5sxBttamRcZcYd1kUQ+CUjNvZNPBd4LuJuWha/XchPjMWAEsT5sZW4s6yYQL9YggCxPhtSqQjC36MlqeD7yimKJc0pmsyRpjRya8UK6N5ndxRNkigGENIXyPlyjJank60SG+FohHL7FLrULwmUsXl0HNH2RDSNrCv8u5LSpuLBKPlWcQ8/a66yEcOOti+ixRjhTtJ5QQu3k31i8eALm0lnUrmQkxRrm5/r6yytLGpKMqVErixohIK1sLb0ivj4vHhueakyOH+B3msKqKiAGK+t2r290ALrjSas1OKcmUEZlLE9IuDQWNv6YA2Zbv7JyPp9bHw+/vl8RDh19LOcTFWKhr58hLcTCrvt3Jt40lRrgSJHB7k0sUqYuwxxcZ4VUEWX9wWteB6u8Of5P+byDIYwdoHrTkzEWuMin32+gtFuXACNtgUfnEwYj1gA/w14m5NxaDMx/PtD1983+VCUf5KUZ9H5VGxz8lWxVKUC6U0MbbIFAlEbkF9CoxtMTh00n1mkLC8+yur7usTtsHUo7jWhP2USyYgra3pR4GfuYmxRfoUYMcL2gYlcgrZSfHZ6Ij6Wma6xWDNfb21+MVEw7jY77ZZgMZcRbM4nGzSd2L2/nR1inIBBDYIysEvHsuz+/CXe8VW+ybItIkhkcXff8oOXdNMt8msXDTSvIRvV3y8pkfX/t3gOjv1+VnGjNWmV4e2qdYU5YwJ9NVKFOMGEdqQHgVaDYaIK2SbfZAsD0TMePySI60YYrq2n7wTEdYZiX4GDuymtu8Hzd/fZdvGmc9/rh7e2iasA4pyhgSIsfrFB//UpzQCm8fozDrsvKHbLB7r0ZVPDaKM7bVv/QPvEQLVtviLiPmfbCfY5kPWFXIHwcVL1x+Z25kREGPJMOgatYSNG6c7f+HJli7ICt7H5fLXfWyobe9JZ9Y1jZHcxrCjgiaSUpQ1JdGCbRUH3ifvdgrEujnja3k8uyBcw3cPQX7qW+9hpJwBJhMBp3B9kXF2mRQxkawM7Ky/W/6sEdOzzAgsfZJxEhYoGsE6AKJVqx2wid5skOB9R037UemBgttoZGy/Zx2H1Fah+QPrAxX0UBkUZMBIeUXgs10uOGVDZNy2MWIDfL58if+TyLhaQTZ0Rf/YVn/jAIbPwn1EXcX56BOZI6pj9nGI4tDZ11GiXptRcd9y1obH0u3Vvn67WGu/vwfZvtui5eY55Gep0TJe91PIPsxIeQUCcoyLXbybi3iHXVkW+NwgzC/y2RxNJKgpc/7PGgKPIPvCtKy0i2r++9dI1X/Mg6QpQvwgIBDHX+77AUEXXXFg1EgXwQWyaBrBgWjLIq6ms9nXYIXarhHsZHG2a5u/l6KjEvcJnEU8h96YopwQinEwsGq67AmNmHXhr6ngExFQodH851pylFXAvmHSJTV3Xa0ufD727Ati/KQRrWcvNHnBJkMCIvIuIuhbSba83X+N19ckEeG7dx8LnvvJfwzpj9J2UG7ep1hcIamRuTBKkAFFOQEBYqyZFDEnTJQMBGXIM/6SVvWxn1bLN/uiJ0PnWQ/qsmisPHkWgxXKvZyhaPbD2fv57bXIQdB1oANf9fnaBLStGOjWPG/bfe7kcUNTI9fm0JX21gdFeUEGxHgTi3dTkAUdnPpyMe+DO1NAA7H64do/m1dPkFX0DiZCbopr3KdH20wjl8VmTTfrCw5C7CAVz6Ht2hdeFeVTx/PoflSCKL/K2sdoKMoLQDGOAkQZwsHF6A9+SGjalbt+UBEQgdXeH9ozW0E0fN/yN9srRCPczoIb2ca70O+sa13Adfx9sFpTDiq5p4JOFmRAUY4IxTgeI6r9tkLfWYMvvNYHfvN8ZCu0L2JbPJjrT8bm6KuC3AX87cttRFDtdbcjHlPBtpCzKM8SZEBRjkBLj18LNqC9bc1Hwgis9quVs1xC3vfeCK/dDnHdwVxvhf1gFpTt9Wp/dHVpU2ujTzt8L1n/7z9eX4VfF03Os8uTFylwmgVFeQYDYsxMiggYYUbJ9FZ6JGPHRrTlC2mbz37QA745U1OO8vndu+/2hFod/varwUNXObMKbJ926Jng/cB9usR36ECU25kmXs9TrIV6ivIEKMZpMcJs/dAawc69l7SvtsW8N++6q20h1oDf6+PV85eVZ7GH/L+dZJHVLvr5nOTvfQdIP5rW/w99d6cWi8PnZiDzIzVfUg1jQFEeAcV4PcSHr6XEuq2A4xpttUS2+nd/x7elzf52eTBpbvb6V3kOPLefg7w3j9X6ukW0h5oCvXv2x3uAkDeP78JtqjG3XQocbJ5jCjKgKAdAMc4HqTrDTqDCoNV7uXMdPuA+Xq9vxzyLWDa9hFvu/+6+vs+Tl23hC+mrbLcPbfdx3yvtTi2pcW3vwbnhTm3v7vOgcpb3FTL+q6QxXjhreVli0Z6i3MOAGLPgYyVkMcUuYOU8+ul60O4p+Ngb2+C3az/I+NuZXVDyBU99YV+omwo6+cx8YR2KkpvHlQi4TziPYi+oVaFCHqI1WoXYRw4H4ElFIaFQlFvoEeNq+hhXhJZk5xYtN811dLKEiBTEs63nhKazdU3iACfvvrq453dsax7Tfc/xfu1Y9GseW6LkoWno7274AKiPs/P+H2I1hETKa3/P+13LtJCYUJQNAWLMHOPM8Brf5MIXr1F8cGxbmlFxTVnTiEui1z5BskHAoSeX+CQX6xcfzUzENhshKEp2H4I4xrrQ/4dYF3j8nBtINWsaKWxKirKjGFcAvqMcRLnZXmzxgBHkJ/d9QKjaCbh+6PXb7U+j77bBs37aHAT6RawRROJ+pKlRct/8R+BnfrThp76pDx6iM3j8XP3k6BkWfWxalHsq8CjGBSHR8lrNz7GjXjvW2e3FpLVBpHG9jTK1CVBbylrX8zRtM404PHTczkameoDoKsDZB74GPO7Q56tN6pXQ8U16YPjj8mOxBb0uNinKFOMqGTO/bw5n99ky9NgVPZnot/GML/+3Qz+Pcl3fwt4XTF6xLnC2ZUngNVk7QzuqdQlyqBjqZztkLfgHBP//XRwDU+YsKWyO2SXTU9iUKFOMqwbCESIAY8H2cNSLL8JeP+N3sxMjQm4q57yFrsZOMLcJEZfmOb0S3i4r4cHcB58JBLdL9PW1DYkh3vvPgNvYA4J/gOgDEXaoFmmnvCVJ5h+3sQlRphjXT2QLA4+jkfC3HdN4uV96OjsRW+PPorm5ttpU1LZoS0sbQ9v79McutXnICkQb73EoSj67z8kuffjC7ds1nfczn0cIof1ApoL38bJmdlXVokwx3hxzLAz1hd/8bcJEwyrCKlA6Uw4icfY8Yu1TbCvq9Dq/R8Uozt3NgixD0S8i+j7RVkIyLlzLbUK/h0Pg+0nBovnHoVQpyhTjzTI2urmOTrIRsYgwREJtia7uf0/mNn/leo34Xj3f92Sue3TzmBNhA0TIYz3cIaaI6skcuMYQO0ujsZR2mVTlViXKpkTVf19sn7kNQkX528H5/Dl0VD3WvgiyGRUvt9Wo+GREWAs17OLevqMXxRTm7rc6fWRt1H8f+35iRtVNR76cgrQqRNnU/vsRBMV4WwydireJsZ5VhfimQCNkm1usFV6/5e8Hb3HvEFgx18X1dUU61c/BKmhSCc/h1X6KTi+P8fzZRMeWokX53D2vjGK8Tfp21mtEhO3GLLSNEQQVZOw3KsgHM70Dj6UC7U+K7mo0FII9WNTSutTvkRFKDFHOLjq2FCnKPY1dKMbbpm1nvUZERoyn9MpQQQa/zHWv569d2rQXh4r9vsXKGM1ZBqe6ehr96+c2VoMg4lNT4hAV73NvIlaUKFOMSRcdxRQ6wcPNEGNgBdkWe/g+sd/aUm0Lv03mJIzvXTq21/NYpnx/X5pD5U4RXzDFmATwrd+D+1iQa9tuxqCFBCepfFNxfWvpPwxR/m1ew970VYlBrs16xqJRcgorJmuroo2sRblHjIs68pFl8RbQmuR/97G9WBGdyos0adfFQHCdcee+dmOzHvWT+144ModccnnnYj34xdtw5pB3PJZsRbmjcxvzjMkXvEKMZtuQ/8eIwl5NB7W2qjx/ofDG3A9/jzmFuxbrwl8IXZIiNSK7L9k04aYYk168xvHaia2v18MYmmY05+9N4Q/GtmgTFu1djL/F3L+0oKVkDh0Hs6UochBFNqLcUYVHMSbf8FIhG8/XfVbWxeBNhNVPY7tOj3btzYRs7+LYxRmxK/DWQD+7VGl9jJSnQDEmYzAtMSHM6u1GyW4QrLD6bTWtbdFWBNLmM8cixen+kmiU3NaYfykYKY+BYkzG0FFCj0W9uX0kLDph4tziBw/ZFq8tDYjIJxolz+3bMQaKch+a/N6xc1GMSSdyAG9rBh97B3+RaM5mWgCbbdEWlZ+Mj5xSdErB7w2SCtoXbdgsisvv2Li5gEfGYttlLsWrVP21le1reTa2Zd8PxXb7tJCPXAspMy4sjJQtHVkUX04HnaQOOUJ6kNFJMXN+fQ4dmRb6t7ce0bXNiMh31oqSiyW6KJ+7exkrSSfDkjoQ0cSvsYW5r2GQzbbQ1DuLzt+LmY9cG2tFyWDb9kWAGCsvFGQyhYWEGWdsXfnNdnRTW4/u1wXykWti7Sh5m/bFubuxvA9Wyl9z7F9KyiGyMJ8k0m3LmBiyLfwWnuQ7a0bJrtR1qsmifO7uZezDpkEkKhGFGY+j00Z8+rxi/A3b/xLTs2uBUfJERotyT5Ogbzd1zKwgCyHCPLcQAV3kWkXX2BZ+BI0zvYPjwt4Qq0bJbiui7FVTdd7MUYxJGlBePbUTnE6+7so5brMtdOGPC3v95JBxkXUj+z6CRHnEIl5xvUtJuUjuMFozTolasdO2bc99pdLagY6C3M/aUTIoNlIe3LjkFA7RiL8BY6P2+xlTkElSZOF4yuIxdlp/mz6YVp3+voHtWiddk25yyUuuT5Rlnhmiha7VZVgY/s7A5HCyBlOGHbTZcK/nr/2ZLbGmKNeOzetei3PJWV6tomw6ZN0N3Nc/GjFfkyRnYrTsb/sQE0TDMRscbY01OsG1UXSm1zdRluwKbJghUYEfLd9JihEhqZkzGgzBhT+FmoxHv4M1D2yHEkdAWdo2QGyYoadpuL+/yklRJsmRaHmqj6iLe6X3LF6T1FNFfPD9P5UuyODLh3ceP3nXjlVX6CuTtTi48ZyksImFIPNYI+OiGaDsPsT4qZZq4WtU29O8uw/cx98RsEB4x3JqsgIQ17Flz3sJRniGN53UUTK0Bd/1W43ZXnZDRNvCsR/oreSK+n2S8eVQlElSRBj8bbGPk6TA/efIVPy5hUtRtRBbrChPsR104393X3eEO5004ghJC3bcUHHYr+iB1sJbT0n6HCD2+C6hLcctaUkjyjM2zJ1ka+AoZicy7OT/Uzw+QuaAbTFElBklz8eWpM+NkhvxdSLGWw7oNFKeM/K7LV9ZH5OiTFIT2vNgv0B0tzVs1srccV2IhveOXDfIOYscXaJ8J1E0IcmQCCtkPUPLpsk0TqbfdIzP8YF68cGNVN/M4VYmibSdbsyJwAmZylC0DNHGds8oeToa1cYqFFHLc/Ngo5wrynaxz4cfMlmDY8DfGSVP5yhRcuwGTfxO3Iegzo0W9EtpE+VbnpKQFRiKlLFNMkqezkukxT3QTCaS32/ZpiFOpKyie+r4GztrkaSIr9xVcg3B5hncdA5iV8ZKJUTuLPKc9fvafKk7PtS5kaymxXXtBKyUImvQFS3TS55OU9YcIUq2WqFn01qAsvmmZjFEGWBDP/X8jZDUFNvkPGM0Sp4zn7CtcRR0yLbb3PSZTKyI4Ua+rDaYGkfWgGX+cdFCkbm53TiDgR7YnORbL5XxQaLxTRJNlOXnaeDvhKSCkXJcnjqGyY4FouyfWevZtD2QbtZbpiiTKunJnSfjQWUuPss5toVyNj/1d/WQ7TrAZqPlrmq8seiRjr4yyYktRsuxD0SashajJP294/830sAMkbJ9/ZuMlmOJ8s1ABgY9ZbIGoX0wSkfbZy4xdQOPiYW3WDnJKuy+XmjgZhf8HraYidE2zmnOY3UdpRkpkzWoXZSbEUhywT6G6SkxAyDYFhDOWBErXq+Ntu3301WEtrloOVakPPRYjJTJGtRqX6gYP7sPMUP70dgRpUbf8JFjebt4TNUC/zH19ftZM5vLW04VKVOUyRrUFinj/TTz6NzH/gYxnpsN0QV85NgDAM6uJ1IWX7ltgXap95glNyNaHQ4+lqMok4yQbbsGYYZQPV/ezz/XzKQ4I3qNbVVY4OvG6G2hAtucsVxev/0udu6rXtiWDL4e3Urzo02gR603Nx98oExBIrlRchFJU9Z8EbO/l5/HizAhYvzjlm9dgOeNEZ1CVyDI7+5TG64LfS0FZ10WBvi5lSI0/RBijFi/kSGqjpCMKNFXxk6ERbZX2acQJUIkU4lSjKj0JBcILHTmmv7Wcju9ri+1diev69VVTvNhRLIwtDERVZnkRIyzwJRAjP/KaKSbBFbFUuD1I5VOK/h8XVAhttdrS4Yuy+nHFgpK7BuMcQTqsjAo1GQVIq6ZLA1e47/L621yjRNaFUuBzx2vXaPed09Qu1r+3vesBeA+c8/os+f6IUk1zdyNt+soRlEma5LzKS9EqcmowEKYWBXIqig5PxfRPrRArQsADbDR/s5cb9EOcV1aVH2KnP/mXt28I3NXpMzmMGRNdKEpJwtAF/GaA4bMykR0HFNwNOJMLWJ4T4horSh3aYCvF7cD1cHgh6u4C+CXyFai5TlRRVflHkWZrIacDucULatvjIbxu8hWhRZ9oLBk79KjYqmLe6oJZ/dVH7oi5Z37ujDYBqLlansut20E+ELxhqcY6l2ivJUeBCRfIIRrFyFAsPaarxsxqwKP+yY/dSr0WouDeratXeCa1yDWjNWbLlF2cv+hA8qvy+Md5YBbFd9EWVJwcJT94+LBSJmsimzXEOY1ihCaTmuYAI3/RLAq1JZ4c5/ZJSrEa/qtaIR/lIwRGyVrUBZ6kMBiH4az2nQ5n2pT5Fq/QDmq4UgVI7I4iS1CyNpAwFKLMg4EezkoQEh+TnwNEGK8/kaM5fG0CRH24xz88r1kWOD1vLjvfnLo2fdOomroRt9nhRS5Q23RcudRVf0uN38VeA1fi5BvSBSXKlqOYVVoRIxo8N0I+4OMZcpt4dIuKuL3n+Z30PZ6+wbcDp1h60FuiZalq9F7qiMzufDrVGE+6SkbIZmgayZLCVpbVgWi2THta9UjfjNCfCtCnGs6GF7rSQ4+Kqb6GbdW8w2UTeN9hmjHg0TL1axbDX7BIsxTauFxnydHSEaIcEAwl1j0gzA8y3OMtSq+CDGugKBLlgEeI/eKvoMcgHA5uPaD0JjkAWhTqF+Mz7karQk66oqVgQ0mtLdqI8g9E64JWQ3ZniF2MYcvHEw1XqhVoT0uDrqvSIoc7o/XV0qRxLusQ2m1HbTCnl2/95RH9/nBoWlvTUFJLWtXwV+6bDR/5RSqq8+qLkbsa0xVIVWhGUZzI1Bs58/iV4dYFSrERysiJiPj1uUfFftoRGsX9q6ZF2LBTEmxHeP9V1NQMvpILF7Zq6yO4oPWJkRNjwGKMSkBsRggzHMmNDd2hfvocQxB7Vt7abMnNK0r9qIdnuvk0mWavMtBRUurd+57b4ulR8JVEy1PPj1imhspHYluYTlMaXIDgdWhol1WxVBUvMQIJ7wmffwUHOQAp5+hn93S1bJzCaqIljc1+4oQn4ugHCTDaIww42wR4vPo2vehd/l7iqi4eXh5PlyWKCDRvshtkbctXgE2FU7/D1IMT64iWqYok80zUpghyF2L3k3vmERRsdKs4bgPoY855FTRfjhtNo9W8Gl2SFtUrHZmqon2xUfLFGVC3FWYISB9PSMgToga/RYEfhn1klGxfc4XI4pL9BnG++kSZHCQn/fm9jZj4ixZGdZjvmJysGOCaPm25LxlijIhAkT1skNjZ26LOCFOKtpKYxvIlJAUUfGX50RGg/SZWOL57BlBl3C+mbJqgAi1zbpIPS0EB6liq/woyoQYZNEKhQi+MGNfsafgTU8L/JIwrxii9yKvEa/l0S0jeBA0iH9fU7KjqeADOrnafgYp/WTLPXr3lJoJRlEmxMPk5Ns0NzvUE6IFwVnaolCupdum//ISk0m0ChdC/zhw2zbrwtcT21s5JUV3kKMoE9KBaTGgwtt4x+5DiObkN4+hSb0zXeGWio6bsVTuM8Wv97Zi9fjWhZ+doZHqGsNOi+0gR1EmpIeWFgNDEWQsICYvIn5LRscAgooiGC0PD7k9sBV8uHQt8rXZF37Tothos/+DK4zqx3UTMhexM1IuHEH0/oogQ9Dg7S4lyIgmESGHCjJQW0BfU5t1sdYin6XIkVGMlAkJI8VpsO8dI9NjyVLpV7FoxkThR7PQqIILUfYFXUV5TY0pspiEokxIGEuLsm37ufSMPWuNjBV+tQP6si7A0CJfqg6SxRWTUJQJCUDEEjv3EvtM0/ZTomN41kueduuC3nlCjrMdWqGvUQel+oSmw6VoVLQracGPnjIh4WAxLObCUSOQIsiIPP9zywoyhFKbwU8pOmkiTlNWrdf5r/ndZIvk0IZ0jWG5k6EoExIIhEYa2f9188VZBfIkEeuSdgVANP5PfsfzTYlQdYFPRbjLogiJkpfOvrAUteBH+4KQkWg2hoyVwj4E33JMgKN2xdLesaILenPynHWBz+Ym48DUJnhrFY10cVvSgh8jZUImApFCIyMnEW/g3SDkmvEAgYwx+aSZdt3xt2cjyHO6yOmZgWZpqL/cZg3oZ9EnynqbVBpUTABKUSZkJhI5h5T0ah9miGOMvGM8ljba960CvKZ/kmEB4Zwz+kor+HD/awWflxanaNFIqJ+cynN+WKAj3SJQlAmJw1vA37UycG7GAU7D4Q8jEm6zI5q/i90A8Z/b1lNP++/Nc+EA89Bz26H3mNJT1ucpwlump0xIBCTbABZCmxhBPLUl6BwR0t4beKzHjueyU7UhyDHGQvkVfEeTT+0T6idrilrK6LWIsmuKMiHxgCC1CSWEZ644aqtQ7LNdVsReqwHl+WKkgrVV8B28tDhLiJ9sSSnKReQsU5QJiccSVWq2VegP1+5F4zbPpgFQDItEaV3gkzQ+n7NMQgnxk9fqIJd9tExPmZB4wDOOGYVBPNQ77mpK1OQ7iyDfyO1iCbJt0alWxd5Li/Nfi3Nhwd5ppYW37H1lijIhkZDT4hhR2LXSz332bm7bVw9yO80fjj04Vf1hPRioN96VOaKLnYOiLJ/VGvpzl3sWBu0LQuKiWQlTd3w7ZqqvWdCrNxtw7iJi63OI2OtreJMDQJduvHtpc12s7elmPZWEkTIhEZEIcMoOj/vtJTpWG+Kh43YvRpA1ko4tyAfJv7ZR8ass8LXpxlkmSIdYJ+q9p57dp2QdjDJSJiQykgHRJV5tqF2hg0iROdGV2fAs4hcz5a2Ng19S3ZMGB2wu8xBrpMNZss7CYKRMyDKETiqBD9ss5old0dULQ4U7hSAf5XlssYhOQekK5EKLRkDqEus2sl3woygTsgDS/GbIxkD0iXagEOEuuwJohkUjZiLeSwky0Netr+co76cv71mzPyjKM6EoE7IcELeuU2TbKQ6C3LUvXgVZmuDDP16yP/BRco1t57uDt+Dnc5LIOtQOXdu+ANlmYVCUCVmInkW/kwjyUKc4ZDv8kxJuTXlbeh3oxRNg7QbX97xj5/GtvdCnZBktU5QJWRAs+rnvM+IgfEMTqt/E2nBGkJcWMc24sF7yXn72vlb5GXzAkPe0NhRlQjYKFv30lF07u/UJrBXkuX2QQ2miehFL9atPpvVn3/OPadXZ3N6ta10otzlaGBRlQhbG67e8c/2CZAW5r5ovNm15yRol90WUR7lfcJQsts7a1gUIKXRJDkWZkASIjfE+cDMryIhOY0wmCeEk00m+eckDaXDN7eRnqLjpZ5BLhEpRJmTD7Hv+9m4EOUZj+jE8y0+bZqevdSjT4y2wtFpRGyeHSBnc52ZhUJQJSURP7nJTqYdfJCNjyRxkn4N0mIP4qk1hu8P1ifJJ3tMYgc0tUsbryOUA0UBRJiQtEGXbdxmRIwavniUHOcbsvlBsyl6blzz0WvR9jMliyCUdzpKVhUFRJiQhsshlS7BVFFPkIANEtiq6BzPHT7UgNEpu7i8/x7xu7aOck2WwZDHOaCjKhCTG2BgQtVjDVEM4yAX2iF3cG5txobx3TLTuY60+yn3setqRJoeiTMg6QJRVkFPshxBbHAwezf8BBFmjVq3eA0PR42lsKhwY0d4zNRRlQraM2BjIsFh6H4Rw/pOfKsiHDotCezSHtB1V8R7jJ+siX466k42FQVEmZD1SCPKTPM+juc762Nfbmig5ZLHxOKIrnH09zuUZKWdjYVCUCVmPJaZfK7AqECFDAB/N9XvTTN/u/2OiZPXFx4qYRso5ijLI4nVRlAlZjze3DKgMRIQM0bSCbG0LGw2PjZKnWBdgbI+M1GRhYVCUCVmPo4sPBqo+S98MK8jWtrApcGBUlOw++itP6RuB15DzJOmbHKr7KMqErIRYADGF+VXS3HxBBmpb+It7Y6Nkfd1jo+TzlGyNFVg9WqYoE7Iutq3nrMcRQYaw+oJ8MML72PL8Y6JkPYjU5icrqx80KMqErIjX1nMKTYXg5XEOHcNUr48vwmtF8SBRLwgt71brYrSfLD+zF+W1LQyKMiEr0zGdJISmb0aPIANrW/jCa8U6VAt0yvVYjpkv8llWnUhCUSYkD8ZGyyrI7z2CfPD84hvvbyfztxBOM3xh3C/3KFmhKBOydSYs+r0MCLK1LSCG/gLWlCj5daJ1cSpkkU9Z1cKgKBOSD6HR8ovkG3cJMtibSNhf3HudECWDKVkXoBQ/2bJatExRJiQTJFoeysR4HfCQwdW28NpyAojxQf42Jko+mUnXYzlO6Ca3NhRlQkhDX5Xf0aS9dQmytS1uWm53mBglayXgFAsi185wfaxmYVCUCcmLvuGqLwOCDKxt8dv720kyPcZGyQAHiymCfJZ2naX4yZZVXjNFmZC86BJliClEok+Qjz22BbCDW8dEyScR1imjqqYWm+TAKtV9FGVC8qKrcxxEcWjCtVbntdkWpwHB7mOOJ1xSfrLP7RoWBkWZkIyQ5ve+MGtD/D5ee2wLoE2HQmbv+RxG3Md/7VOLTXJgStOl2VCUCckPP195aNCoX0rt79dvPUUkQ5xGesIH83vJfrJCUSaE9C72tYHFvXOHbdH8Hf9MjJJfRywK+q97ynSS3Ege5VOUCcmPMc3vbetNCLIfUU9Ngbs+vgsXJkT4t97/S46SwU488WRQlAnJDPGVQ0uubYP6NvFUWwPiODZKPsklVFjxmq2mlOwnWyjKhJCgaPnUMd5JsVHy0EJhG69uRLMi97VIBP/HwaX0SBkk1UmKMiF5AlEeKrnWvOO2xbuhxb8QxtgPfpRcg3WhUJQJ2TpiYRx6bmKj5DZb4q2nj3IIKqqhGoGDyL13/xqsC0BRJoQ09ImyRsmPLX+DYPdF0aHPPabPsh8Z12JdgKQFJBRlQjKlZ1QUrj+2jHdS5qTAXZ/ehevD3kt9e3fUlsnwgyMkbyDKvrd8FHujLZI99QxJHUPowqAu8Nmo+OimWSbEUZQJyRoRXz9aPvQs3tkUuRSpXEeJ6H0RprZMhB8cIZkj7TY1Wn6X0uU2W0IX/2A9pIhUG3vFa1aE11nLAp9ycgmhKBNSBmpJHEQEO71k9yHYKfbtN4mS7QFijBddCkOpiVGhKBNSFvBr+6Lkrv4XsTnJFJQ5i4mlwEiZEPINRKCwLRC1tYmgRskpBNk+3xYW9MZMGZ8NRZmQMoAodxVkaJTc1f8iNoeBwpXaoH1BCPlGnyinjFpt7vRvVz/aEzoZFGVCykCryvwqOY2Sp1bujeVZyrdTPd/aJLUuAEWZkLLZJ1zcw8ip94TPlwNjeltHgaJMSDn41oVW76WwLV5NtsUWbAvQVCte3vPj5fIr1RDVWhqGELIF/EU1XdxberHNF+StBHMQ4f/M/7Hgt3cLw0iZkHIZ08ltChChZxFkFKtsSZDP7jPrQifB/JAJLovCSJmQMvDTsiDIsDOWEslXudzg1N1tJ/UNnyv6eaALH3xzHPQQMT+7jwZP+P+ii38UZULKwBdleMlLebt4bAjRH7edDAu85zdpAKXYSj4cAF8ul//gLXu3iwpFmZAysAIBQZiS/dBVLuwLb20NhbqAGL9Kg/4GWcy7kws+B3xm+HzuL7dD3xHNFT+4haAoE1IGNjKDcNx6f8MFRQ46gdqZ38+hkZ2Iks0y8AW7LXLetfy/K1Oh729z0cceiu7xOT2bobJOPHMc6G7d19eH6Bi2xa18NoiooZsUZUI2jh8pQxQgLu9WXOYi4t11Cl8MkimiF416Ad7Pkx6kJHulrxBGD3bamQ/3XzQ1jqJMSBmoOEIgnuZ6mhIZIgLsi1y7BNkX7rbrTiMer4+21xdy3U3H741vbN5/iGeuoryobaFQlAkpAxU0iAMWm6xVod3jTqFiLZV5mlHQJco5LfL9cx+iODcFUD+fKT2n7+X+i1b5UZQJKQ9djPrGRWjx4+oly8X/vz6GNjkqId1tZ/Kl5+iWHoBCmwzh9vYzw0Hhr1sQijIh9aFeak1YMY0hymOsFHv2EdXDb4MVfYSUQZK+CxmjWjVXEKc8jhXlxbvGUZQJKQOK8gexRHnqQilFmRDScOsImFtJ1xzcZEE0VODVfz7bQpOloCgTUgZbX//ZeT8nP45pwRmy2GcXR5NMIKEoE5I5UghBUf4gpmadAv5+Mgt7SUSZ2ReE5I/up5ojq+Lgi4otoLAVbTVZHzG8dXwesCG6RBnX43N+lUITPRBQlAnZOiIIyI2FIGjRAoTJlvtqf4tTz+NovwzbH8L+tJeciaFZflqcllLjcvQaFOHzeTS3WxyKMiF5Y/sy9Ea8UjiiAvPt55hFKhMdgpCy5l3H39p+nyP+MaJ+XezD5/H/224gBzHti5H0QEVRJiRTpHptbLWdrfa79x4PP2x1n63ys5frXVx7n4suQvxeK8hanRcitNqvIoZAYoLIUc8sTGe824HXxBl9hGwVEYpHF59Sq/1wYIjljeP9o3+ILZ8Ovd/iMPuCkDzpaye5RdRbj8lYGyVJEMsvnZDMMD1+yScQxLX16tbkOC8GRZmQjDDZFiQ/OrvzxYSeMiF5gcnREGZkBmjPZM2iUGxa2625kOXBWQz7KROyBS5RMiJk7JMQYUy4UPG1xSNaZfbu3Ver/vSSe75xqdzhs16yfSe/OEIyQET1PzeOa8GD8/r8SvqYjaQ15YvMZ3/5rF/dQlCUCcmAi4j+cfNF01amWdvjbAaFakqcLeK4dxTsMeCz/Dt3TmIXFGVCVkayLX655ekqBCmhvDo3FouW6SkTsj6psi0ovvFAVeBhiWiZKXGErIhEydwPy0N7Y0SHkTIh69IWJcMP1pQ4/b+lrxmQFfgcCi5qZpFomaJMyEp4UTJ2bKTBHcamW0mVmS7gnd3XhTyyHBotR/WWKcqErAf2PwjwS1tbTdO9zPY+1t9tb2SyHshcoSgTUgnYoREdo6cCfvcFmOQPvru7mANVKcqErIAUd4C2xSLNN27rd+zcp8dsbY5zl7cpz4WUO+YiL4OOl4oCRZmQdVCBtHP3GiEOWTgy3cqu/rEUhljLg95yGqCj0SwMijIh66CivHefEXDTv0J6r/tDUIdGKWkFn/5E5IYonPv48kQ9A+EXRsg6qGccWslnx9zbcU5fomuJluFP/3SMkFOBs5RdrNQ4ijIh64KFPhVZ57zZeaE7upnnt0hBAxkkmq9MUSZkHRDRPl9Ed1JvXpObjKgYQsyoeF2iff4UZULW41amKvdGw2ZRT6cs23acpDIoyoSsB0qsf8jCXlcVH7MnyiBaXjlFmZB18KNjFouQBm4IhKzDYuOESNlQlAlZh0WmVpDyoSgTsg7vjpAWKMqErAPtC9IKRZmQdaAok1YoyoSsgDSyp69MvkFRJmQ9JlXzkbqhKBOyHlzsI9+gKBOyHoiUaWGQL1CUCVkJ6XnBaJl8gaJMyLpEHbpJViOallKUCVkRGbhJC4NcoSgTsj6MlskVijIh64PpI4yWy4b2BSG1IAt+jJbLJlrPa4oyIXlwcKRkKMqE1ASj5eKhKBNSIRBlestlsjOzFGdBUSYkExgtE0BRJiQvmIlRLrcuAhRlQjKC0XLRRNFTijIhmXERZogym+CXB0WZkIp5caQ0uNBHSK1IT4yjIyVBT5mQykG0zEW/cmCkTEjNyBw/LvqVAz1lQjYAUuS46FcIMQpIKMqEZIykyHHRrxxm+8oUZUIyh4t+RcFImZCNQG95I1CUCSkAiZbZ3jN/ZmsqRZmQcnhzpHooyoQUAr3lbUBRJqQsGC1XDkWZkLKAKLPKr2IoyoQUhOQtc8GvYijKhJQH0uNoY+TJ7OpLijIhhYFo+XJ5dsxdzpHZ1hJFmZBCuQjz3lGYq4OiTEiBnM/nX2h+Q2HODkbKhGyUu8vlz0WYbyjM+XD5Lt7dTCjKhJQJikiw//6mMGfDbEEGFGVCykQFAPswIuY7EWZmZaxHlPxxijIhZWJTr9AuEhHzvfvovRwlYiOjYaRMyIZpy4d9vFweLheky7HqLz1R+pJQlAkpEJnf1ya8Py8XRMz0l9ND+4KQjdNVPfZTfrKjXDpOMTIvwJ0jhJQKRKBrJtxPR1ISzcdnpExIuXDKdT5Ey3qhKBNSLlzMywdGyoQQpr5lwrssvEaBokxIuTBSzoOoC6oUZULKhaKcB1GrKCnKhBSKTCGhMK9LtFQ4haJMSNlQlNclei44RZmQsuFi37pEbwBFUSakbJirvB6wLhgpE0K+wFLq9Vjks6coE1IwEqkxWl6HRXpXU5QJKZ8XR1KziHUBKMqEFI6IA22MtCz2eVOUCakDRMtMj0vHYmO3KMqEVID0XmBj+zQsZl0AijIhhXM+nx8vF8zpOzgu+qVg0eG0FGVCygdC/CBl14yWl+fgFoSiTEj5QJR/XqLlm4swQzC46Lccx5htOtugKBNSPirCP+Qno+XlWDRKBhRlQgpHIrfGwpBoGSK9uHhslMV7jVCUCamDtmiZKXJxOSxtXQCKMiF1oBGcRstMkYvPolkXCkWZkDqwp9W/5CcsDEbLcVg0N9lCUSakAmT6hQrw3SVavmOKXFT2LhEUZULqwUZyjbd8EWaIMgtK5pNsmABFmZB6sKLcRMvyO7vIzSPJAp9CUSakHnzh0GiZXeTmkWSBT6EoE1IJIr52YQ/R8r38Tm95GskW+BSKMiF14XufKL/eMVqeTLIFPoWiTEhd+Kfa2Mcf5HdGy+NAlJzUugAUZULqom1B6gej5Ums8llRlAmpiBZfubnaMVqewiqfFUWZkPpoq+L7aZoVJT8lL5CkaXAWijIh9dElJlp+nXzxqkBWO6OgKBOyHbT8GqJNb7mbt7WiZEBRJqQ+sF9DVNpsDDbCH2bVXtQUZUIqQgao6n7dJryIlh+YidHJMXWxiA9FmZC6uJWfGi238VPEm9Hyd1b/TCjKhNTFvfkdAt0W9UGQfzBa/sbqUTKgKBNSCbAl3Gc+spPfuyI/FJRAtJke90kWZw4UZUIqADnIlx8/vat38rOrFzBuD1HmdJJMomRAUSakcESQf7tPEbagp3JXNHwnF3rLGfWcpigTUj4oCunal2Fh9KV4IVpONlUjUw5r5iX7UJQJKRiZLnLXcxNEz10LfuBG7r/lBb+szhQoyoSUzUPAbfosDICCkp3bJq85RcmAokxI2YTsw0iTG1rQu3XbA2KcnZ9OUSakbELE9EZux/S3r+wvUXJ2mScUZUIKRaryQqEof+WwxlSRECjKhJTLGFGGr4wsC+Ykf5BtGiBFmZBtoBkajJYzXNyzUJQJ2Q664LdlMAw16yb/FGVCtgNEeesWRvZTVyjKhBTKhFNwzdTYarT8nuvinoWiTEjZjBFmre7ball1Nv0t+qAoE1I2Y6Nlre7bmoWBFLgiDkZ3jhBSMuhZgf0Y4vzuvs7mQ1R8793+Hgtd5/P53W1r/y/GsqEoE1IwF4F9vQisdoHD/qxCjLPgtjzmGyk6eXPb2f9PufRKDoGiTEihiLjey2XMvqypcb/cNiiqXzRFmZDCkKb2ENap3d1gYRzEwthCI6KiFjYpyoQUgkTGP+Qyh1tjYdQuyudSFvgUijIhBSBDUTElJEbf4y2lxhX3HpkSR0jmXAQZ3i8uQ4KMxSzk4j67Ye5k8av21LjiRJmRMiEZcxFkWBVt00Ugpu9ygbiiWu0sEXXIAp6t7guZXlIq2TYe6oKiTEimGA/Z5iA3v/s+KRb/LpdHF75P38nj125hUJQJIXGQqRj/67vNRVgR8T64adGuNr7fSmpcEVCUCSkIiW4hpth3tUhkKo2vfHnMk+P6UjZQlAnJDCO8N+aC/+9c3KnTtvH93DQ7EgmKMiEZIEIMC2JqQcgUNF/56CjK2UBRJiQP4Ove9/z97MLS18baELXnK6c6wEWDokzIykjamxVkeLxvzmRdyKLf2MdVgdbmRNonw6K+snabqw2KMiEkHBFOVOpBdNHt7djW0UxsBqDeshVc5/1uvechH1rzlWtt5VncAiZFmZB1QeSKLmavGg2LAGvToVv3KcRLoKJcq6/MSJkQEg76IevvEjVrznEqMdlVXkRSXMMlijIhKyNijIW+tfbH24rzlYt7P0wYJ2RFLkIIi+KPWzdAUh2oMVreGT++CBgpE7ICEXsjx0BFq7g+EYHAwuA4KEJIO9KvAs2DcjlTrV2UoXMUZULIV0SMkf6W235XXIbCSIqyaekpE5KOO7eOICPVDlkeIc3va6SoDAxGyoQsiFbV7XY7VOW9SoYDouWlA6JrMYr8jufcan8LLvQRsnW8NLfT5f9PIsxvMkX6t4svzF+qAkfYJbWPhGoyMKaUqq8BRZmQyEgvC9vtDeL72wgzouW/l//HiF6bUVDuU4ibbnMy1y9U9GsXZYDPooiUP4oyIZEYKAJRYX7R3haXn/vL/9F4aMzi33Umn/sQYi3NvhWRn1INqGJV84JfMe+NokxIBALT3FSYseh2kKgZgvgkgn7nPpvaNw8rFzub72yf83LBfeb2YNbHLK4keQQUZUK2glTlIUIO3fGbVp0SJR+MpXEYeJ6diDAusfpjnM0Q1ppFuRgoyoTMQAT50Y0H0XDjPcvCn/ZOts3ste2mjaJj01gpEunXnCLLSJmQ2pkhyD7anvPepWcrUXIxosziEUImYDzk0lFRZoCWCRRlQkYii3K/Q27q8kdfI7UgE/hFEDICI8ghp8N791HenDPahIhakAn8IggJxAhy6H6DjIymUMR9ZFbkHDnX3pSoGOgjERLABEFWIMwQZETMiJx1onRu+x4OGBTmDKAoEzKAlC7P6X+MnGLsa/vdbgeBPsjj2mIRzX5omz695BmtNoCnKGcCRZmQHkSQESHPTRmDsD5KlziI4EHLrXueG8+phSJLCbMdBUU7MwMoyoR0EFGQLdeJ1ZfHx/+1cMQWjGj0nCJyhQZoi8818qSJB0WZkBYWEuQ2tHBkLVQDahyaWiQ8XSHEI6Eg5wD6adxK/4sttPDMHooyIYaNCbKi77WY4aI1Q1EmRNioIAP1kmsW5WLOAijKhLhNCzK4lfd/cvVCUSakFDYuyADv/1ZS9OgrrwxFmZCPcUxbb/DOLIxMoCiTTWPm2m0d9ZUpyitDUSabxUydJhctEBuHGRgrQ1Emm0QE+acjFlg4tUbKXOgjJFdkjBMF+Ts3Mi275iyM7KEok00hLTh/OdJGzYt9xbwnijLZDCOnhmwRFeXqfGU5AygCijLZElOa1G+JXaVFJEXlXnMDJZtAUt+4vQ+DxT6K8opwIyXVw9S3UdxdTvVtf+caKOogQ1EmVSPTO5hpEY5qAjMwVoKiTKpFFvYeHRmDlpvXlIHBSJmQTKCPPB6t7KtJlOkpE7I24iNz5tw0alvsoygTsiZiW9BHng4+v5pEmfYFISvz25E5IFKuKfuCkTIhayG2BbfredyyB8Z6cOMl1cD0t2ioLnAKyQpQlEkVSMYA09/isKssA6Oo90FRJrVA2yIu+CwZKa8AN2JSPJJtwTLquFQjyiV1iAMUZVIDzLaID+wLRsorQFEmRcNsi8WosYVnEXBjJsXCIpFFoae8EhRlUjL0kZejmukskklSDBRlUiSXHe3h8uPBkVggKt6b/9NTXgmKMikVRsnxgHf8tNvtXt2nj1yTNhT1XijKpDgkSua2GwcVZC2w0KGpNUXKtC8IWQrmJEcFQvwk45/sdWBXWn5vD0WJ8p0jpCyYAheHt8vlpUV4rwJd2gJZD0VtLxRlUgwSJXNxbz6vFzHed/zN9omo5eBHT5mQhaBtMZ99jyA7r2VnLZHyrSsIijIpAkbJs4HYaobFEHaxrwYYKROyAIySp4PI999FkI+Bt1cLo6gIs4ddSf44RZlkD6PkWbRlWITcB9S05lTMAYaiTEqAUfI0EBmPFWSgt68lUgbFHGAoyiRrGCVP5nAR46cpucZyn1qmjiiMlAmJBKPk8SDl7cXNozpRLsVXpiiTbGGUPInelLcR1CbKEOQiomWKMskZRsnhjEl5C6E2UQZF+Mqs6CNZwih5FFiYezZNhWI9Zm0UoXeMlEmucKJIGH6XtyhUuthXhN5RlEl2SGvOe0eGUEFeKqqtzlcuYbGPokxyhF7yMEsLMqjRV85+sY+eMskKNrAPQqv0lu53XKMoZ79tceMn2cAG9kGkEmRQ42Jf9pEyRZnkBBvY95NSkFnZtxLcAUgWMAVuEPWQU49oYgZGYijKJBd+O9LFWoIMmIGRGIoyWR0u7vWSIsti6PlJQrgjkFXh4t4gzysKMmBaXGIoymRtuLjXzT52pd5YvJl9JAHcGchqXKJkRCxc3GvnELG50FxCx0iVAj1lQjp4dKQNRKYx2m/GosY2ntlCUSarcImSaVt0s1amRRe12RcUZUIsXNzr5bDywl4bzFVOCEWZrAEEuZiR7wmBGOfiI1/hYl9aKMokKZcoGU2wuLjXzj7DKFmpabGPkTLZJpJd4fPLkTZOF0F+c/lSk4VBUSbbQxbyHluu4zbXzpPLm5rsCy70kW0h4otxTjfmOi7udZPj4p5PTZFy1v0vKMokKpeNHWOcfpr/68YPH5mLe9/JcnHPRxb7ckrTqxaKMomGRMO+Z6zRMafctJPz4p5PTYt92fa/4I5CYoL2m340/OMi1viZfXPxFThkvrjnQ185AYyUySiQUSERsX/9Fw/Zg17yd4qwLTxqEmVGyqRspOcx/GJsM+jL8Gr+hg2cwjuOkmwLhbnKCaAok15EjBEF29M9m1WB69lYaByl2RYNOIicP7yoGhZsGSmTspDoF2LbFlHYnZJTQ8ZRom1hQWpcDbpxg4Ais8ZPDRRl8gWJfJFBcd9zs1u5LcT4pyNjeCnQtrDUIsoA23F2lgxFeWOI6EJMESUcvb9hI23LoPC5kcehjzyOV/8zL5CaFvuyPMOjKG8I3x++/P9/evom2RNjRBbizTS3cNDbIqfG9VOpqbIP+ndwmUEvsGJsQyARZNgSGgUfjSDj+rFRLwV5HLn3tgiFaXELQ1GuEFgLEvn+MWXOvui+yW1xO7bSXJYS099aqay38k2OPTAoypUhi2+wFn6Y6xAR+N/1iU2CkpDTANRYsNx6QegpV4Q0A7IWBcBG15b2g+sYIS9L6elvXbC38oIwUq4EsSGQV+yfjvUdeNm1bVmqsS08anpP2QWmjJQLRywIiHHXaRiub6seoyAvy2uJVXuB1BQpZ2dfMFIuGLEr/rj+DQsH3l3H9WQZakl/a6Wy3srZLfZRlMumza5oo63qDn4ym5bHB59pLelvfXCxbyEoytugbaNjRd4yvFbqI/uwsm8hKMpls4WdvyRqTH/rgkUkC0FRLpuaTiFLByJVrY/cQk3bXlbrKxTlsqlpFbx0nnJsA7kUYtFwsW8BKMplw0g5D7biI/vQwlgAinLBiBDQV16XQ83pbwOwsm8BKMrlU2uBQgnUWkYdytKijG07lUXCSJlEgxbGejxt1LZQln7vePxU0ThFmcRBJlmwCCQ9W/WRLUsLJvQp1ZkgRZlEJbvpCZWzZR/5SoJyawhlMt/aDoVYE4pyHdDCSMfW8pGHWHrbS3k2koUeUpQrQCwMCnMaNpWPHMCSonlO/FkzUiZRYRbG8tTaH3kOS34eqT9rijKJx0Us4CszgluOLfW1GMOSnm/qPGiKMokORWMZ6CN3s2Q0e0y8+LbLodyaolwXjJbj0/RHpo/czoLTrTEoAJFyapFcPVqmKFeE7CCMluPyQh95kCVsBj0zuXdpWV0TKcqVIb4no7o41DxnLyaxD1on87mnbqvJSJksAiO7+RxZIBJMzO3tOk7r4u9iZFlqjaIok7jIQkV2E3oLAyLz4kgosURZ/Xt9vDXGlVGUSVyMr4xFP0bM09h6o6GxxPis4Ev/k8U9BBcQ5FX0ae1ya46ZrxA97Zao+T+XfgW7ZLiwNxJ8XpdtDcFA6HZmp5ZAhI/WuxdB/unWAweD1XpFU5TrZucoyKFAJPZShEPGM0aUwV7aA3w+wEeECjFeW5fwOlZb4KUo103qdKJSgTgwQp4HIstQuwG3+30RYdsvGVqUSwCxqq1LUa4bHO0f5PctRc0QWfjq2L5v5WLfO6K6d/d56sxmTvOZckC7cXmua9FTJssgkd9f/f8lMnl0aaJniNya29ZNW+e8y/u/YTS8GDV9rs1067WqOJl9sS1SpXk1Eahbj9YzAgryotT22a6mjRTlDbFgnwKflGN82siisczGqE2UV9t+KMrbQ7MLjm65MVK6es1y741Q4VnIaqJMT3ljoDfGJYo8qF8mEWVsn1kP9lhsWyvfdNVc040CYWagNxN+gBvELmBcfn92y3SWg9Cv2UqU9kV6ajoIrnaWR1EmWgH4z8W1HO5XbiVKUU5PTRbGau+F9gVpkJ4DiJqb1DG5GqKKNLop28mdVGghWkbZbGqRZMCRnlpE+X1Nj5wbLvkGNki5zI10H+Qx1ui4xm07PbWI8qrFRNxwSS9ShDE1S+NBCjZgi3AiSv3UIsqrZg1RlEkIc6aZ/MI/4lunzF3mtp0YOeWvIQ1y1fUIbrhkENnZpka6dzJBYslMjza4ba9DimgZ6x84wOMMbi8XWGSxti02JCJFMGfB7hc6gsEKQcT80Xp38akSFOV1gN21REMfbTL13taTQhanf7s4rNqQiBsuCSLCot+jTnQQKwONkha1M1hqvQqxI2Vsd8+XbeZJDuptgozt6o+Lp2c3a247FGUyhjnFINjI/xgr4yR2xpNbrsiEswrTEzNzAQL/r2+iuGxPEOSddz9sU2ppTNm2VnMRGEmQUUQa1YMd5tXPBb08tt//WC96O/vzzg3vOC+cJJKey/cIG2GuqEFI//XlC3vbIg4GEO+jjKe6kb9NbSGAVgSrDM+lp0zGEqMYBNEN0uWwE+mOdG7rgazI6SR2tPsRz89IeR1i9NN+HRBkHR2F7fHNDioQsZ67jd5fHme/Rk9lijIZBTbSC7EaDd3LBTsSVtRP7utQTYgwdqxbN81q4/a9DnMP3FjMG1q/wHf75IkxthOkYMY4GOt2l7yQhBstmcISpdNqW8QECza3OraepEEO3LqNTGE/dANftBeagI3HTC7KXOgjo1m50dBYGHisw1QxGzUzEd7x5YKFviVaxN7JOkdSKMpkKmu25RzDD6bGpadvfWCA4IXZy/cK6wuCbM+wNJ/5RS5zz5KWzqf/BkWZTKKgaBmC/ODIGkzJQw8S8osgIzJGB0N8v7ot/g/5zPI7rsdt5lpi14rUVPDUjsxhrbacY/lhp62QZECUIYyh28fb0HckqW5YzFPtakqtxce+EQHV6NZfPL530zTv5+Vxj6naeVKUyWQiZ2IsiUbL7FSXENk+IMyhkWZvZG1KqfETIrv38tDxPFpw4ufA429To2ZsP4jK/7kEUJTJXLBT5C7KANHy266+AZ+5M8bTHcpLhiBrMdGT/11K+b5/Pz+ynsotLJO254gNPWUyCzndLKFqDjvzL0dSE7rYd+5KXTQLep2C3HKfnaTJ4X5DgqwWxxA/5DEXhZEyicGYU9Q1uUsV7ZAPpOQ55KatNxLbQQ+mQYIs4OztwXt8XI7yU4VYi0RCC5TgL7uA4pbJUJTJbJD+hIUQV8b29EPaiLInRjoggrrYh88d24kvgF8WAyWNUcullacR9lPT5lMuZ72fPC6eXz3mKYvUP8UWeV3CDqMok1hgJyhle0J/53Nf9zESFU1bg0DiLEX94S+3kahYz7r8rJ79GAGU214PvOJJ4zHvXJxsIbzGO8nqiRo1M6meRGGhMteleaYwL89l2/h/7mNSOoQRB8NXyTMO9WfRC2NS5oMI/dRUuFBwAGiKVmJEzhRlMhvP9ysNtvdcEO3mhqKOy+9IK4M4/pU/hzam/ztW7OR5H136ZAacDWB7mpzXTPuCxKDkLJ5fMnGbi3/LAHHUg54urD1ItIzo+c/A/Q9jxC1iCtxUtFMdXgtedzNLcJT14giZiewIOBXFaWKp29SYlX0SyGXb+KXN4qW5D7zkawP7ANvrS3vOgefC9gdBHNoGbfbF2Vz60DayehlbiIII+jXELqMok6h4Sf4lgkWbA8U5DrAsZOyX/l+nklx9YrE12iaEIEvmrwugx6OG2EIINRPjFKvcfmJUPnjwp31BYmPTn0qkifhl6gQXAWcgB2i/IASfaTP2y+SMI5KGwPnR56ClJClubTnJ6utG7Ycs7+nOhY0jawPv8z/ZvlqzNhgpk6gUvujng2jmmU3yp/ORefg1Mj1/neF3FSevP8Vx6KAogvzb3sd9WATRhNjkNeMS257DdvX8rVzcERIR8Qix8R7lZw2l/K2DXsk05LTfTqB+nbLQKs3tIcj4Xl5iiLE3C1IH+S7JNzuDokyiYiOjyqLmpmfvkuW1NSIH6ZMf9ZpFP2XUQisWEN2HZfEu95vkE4sIqyWhP1Ojne2a90BRJotRmSgrzNIYgbEq9i1z9bB9+P2WNYWsa6q5v7gGIWsmjIQ0KXKfPS5UgHM5k3vTBVGKMlkMsyJe+uJfG3tGzcN4mRXfbIqBIg8Is984qC+Sbev2pilsJdhoTYUpRZkshuxw2lweO4WO76kFRHUvO0406aQlRfLbmUYGBR+50KQAUpRJMmhnbJOO4qIuOwO323Kf9yeKMkmKWaCpCQpzAOLpQpjVR/6WNSECrk2EtijOB4oySUqh3eRCmJUFUCPmu9a2nZrv7VfeQZT3fj54og5vuXGiKJNkSBT0n6uXSfm2teIViYSAyBmf37vnOWsBx625VKtdLLMmKan9dBRTTV4ZLV8ZK5y6GOxkko32rNA852uus5feNmdSdXZQlEkyZGwUFncWHz65Itin2DPjgzlC+aW3xPlj0J92dQMlpbqN4Z2iTJKC03uM0HEf0Y2Ws9YELUF3tapiMqVdZolQlEl6xC9svNeRY4FKIGpXMrI5XinKZFUkctahq6Uv5LBpEZlDs/1QlMnqyMJY10KOeofO5S3U77F795JN8aaZOxRlkiUi1BQ5UjvNHD+bSvl/PV+6cGDfTk4AAAAASUVORK5CYII="></image>
            </defs>
            </svg>

            <style>
                .svg-color {
                    filter: brightness(0) saturate(100%) invert(20%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(95%) contrast(90%);
                    width: 180px;
                    height: 300px;
                }
            </style>
        </div>
    </div>
    <!-- News With Sidebar End -->
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer>
        function showMessage(message, type) {
             $('#commentMessage').html(
                 `<div class="alert alert-${type}">${message}</div>`
             );
 
             setTimeout(() => {
                 $('#commentMessage').fadeOut('slow', function () {
                     $(this).html('').show();
                 });
             }, 3000);
         }
        //Envio do comentario via ajax
        $('#commentForm').on('submit', function (e) {
            e.preventDefault();

            // Atualiza textarea com conteúdo do CKEditor
            for (let instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            const comment = $('#message').val();

            // Remove tags HTML e espaços para verificar se tem conteúdo real
            const commentText = $('<div>').html(comment).text().trim();

            if (!commentText) {
                showMessage('O campo mensagem é obrigatório e não pode conter apenas espaços.', 'danger');
                return;
            }

            const $btn = $(this).find('button[type="submit"]');
            $btn.prop('disabled', true);

            const formData = $(this).serialize();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('blog.comment') }}",
                method: "POST",
                data: formData,
                success: function (response) {
                    showMessage(response.message, 'success');
                    $('#commentForm')[0].reset();

                    for (let instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].setData('');
                    }
                    $btn.prop('disabled', false);
                },
                error: function (xhr) {
                    $btn.prop('disabled', false);

                    console.log('Erro status:', xhr.status);
                    console.log('Erro response:', xhr.responseText);

                    if (xhr.status === 401) {
                        showMessage(xhr.responseJSON?.message || 'É necessário estar logado para enviar um comentário.', 'warning');

                        const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                        loginModal.show();
                    } else if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessages = '';
                        for (let field in errors) {
                            errorMessages += `<div>${errors[field][0]}</div>`;
                        }
                        showMessage(errorMessages, 'danger');
                    } else {
                        showMessage('Erro inesperado. Por favor, tente novamente.', 'danger');
                    }
                }
            });
        });
    </script>

    <style>
        #cke_notifications_area_message {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            z-index: -1 !important;
            height: 0 !important;
            overflow: hidden !important;
        }
        .cke_notifications_area {
            display: none !important;
        }

    </style>
@endsection