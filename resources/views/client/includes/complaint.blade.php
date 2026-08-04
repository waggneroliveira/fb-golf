@if (!empty($report))
    <section id="complaint" class="complaint my-5">
        <div class="container">
            <div class="bg-blue m-auto col-lg-11 text-white rounded-4 py-4 px-3 px-lg-5 d-flex flex-column flex-md-row align-items-center align-items-md-start gap-5 shadow-sm">

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center col-12 text-center text-lg-start">
                    <h4 class="montserrat-semiBold font-20">{{$report->title}}</h4>
                    
                    @if ($report->description <> null)                        
                        <a href="{{$report->description}}" 
                            target="_blank"
                            rel="noopener noreferrer"
                            class="background-red montserrat-bold font-15 rounded-5 py-1 px-3 px-lg-4 px-md-5 text-center d-inline-block text-black">
                            Baixar agora
                            <i class="bi bi-download"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif