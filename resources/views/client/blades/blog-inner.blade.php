@extends('client.core.client')
@section('content')
    @include('client.includes.announcement') 
    <!-- News With Sidebar Start -->
    <div class="container-fluid mb-5 blog-inn news-home" style="margin-top: 80px;">
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
                                <a href="" class="nav-link montserrat-medium text-center font-15 text-black">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link montserrat-medium text-center font-15 text-black">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link montserrat-medium text-center font-15 text-primary">{{substr(strip_tags($blogInner->title), 0, 40)}}...</a>
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
                          <div class="py-3">
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