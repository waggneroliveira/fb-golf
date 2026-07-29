<div class="partner-about">
    <div class="container pt-3 pb-5">
        <div class="d-flex flex-column">
            <h2 class="d-table px-0 p-0 w-auto m-0 montserrat-regular font-14 title-blue text-uppercase rounded-top-left">
                <svg class="me-2" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.04004 0C3.60676 0 0 3.60676 0 8.04001C0 12.4733 3.60676 16.0801 8.04004 16.0801C12.4733 16.0801 16.08 12.4733 16.08 8.04001C16.08 3.60676 12.4733 0 8.04004 0ZM3.65456 8.77091C3.25091 8.77091 2.92365 8.44371 2.92365 8.04001C2.92365 7.63638 3.25091 7.30913 3.65456 7.30913C4.05822 7.30913 4.38548 7.63638 4.38548 8.04001C4.38548 8.44371 4.05822 8.77091 3.65456 8.77091ZM4.59954 5.63319C4.31409 5.34775 4.31409 4.88498 4.59954 4.59954C4.88498 4.31409 5.34775 4.31409 5.63319 4.59954C5.91864 4.88493 5.91864 5.34775 5.63319 5.63319C5.3478 5.91864 4.88498 5.91864 4.59954 5.63319ZM7.09507 10.0187C6.80962 10.3041 6.34686 10.3041 6.06141 10.0187C5.77596 9.73321 5.77596 9.27041 6.06141 8.98501C6.34686 8.69961 6.80962 8.69961 7.09507 8.98501C7.38046 9.27041 7.38046 9.73331 7.09507 10.0187ZM8.55694 7.09502C8.27144 7.38047 7.80868 7.38047 7.52324 7.09502C7.23779 6.80957 7.23779 6.34681 7.52324 6.06136C7.80868 5.77592 8.27144 5.77592 8.55694 6.06136C8.84224 6.34681 8.84224 6.80962 8.55694 7.09502Z" fill="#3BBA36"></path>
                </svg>
                Saiba quais são os
            </h2>
            <h3 class="section-title d-table px-0 py-2 w-auto m-0 montserrat-semiBold font-24 title-blue text-uppercase rounded-top-left">
               PARCEIROS E CLUBES AFILIADOS
            </h3>
        </div>
        <div class="row g-3 mt-5 justify-content-center row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5">
            @foreach ($partners as $partner)                            
                <div class="col d-flex justify-content-center">
                    <div class="partner-card border rounded-2 d-flex justify-content-center align-items-center py-2 px-4 w-100 {{ $partner->link ? 'cursor-pointer' : 'cursor-default' }}">
                        @if ($partner->link <> null)                                        
                            <a href="{{$partner->link}}" target="_blank" rel="noopener noreferrer" class="d-flex flex-column justify-content-center align-items-center w-100">
                                <img src="{{ asset('storage/' . $partner->path_image) }}" 
                                    alt="Logo do parceiro" 
                                    class="img-fluid" 
                                    loading="lazy" style="max-height: 90px;">
                                    
                                    <p class="background-red rounded-5 px-3 py-1 mt-1 mb-0 montserrat-semiBold font-12 title-blue text-black">Ver benefícios</p>
                            </a>
                            @else
                            <img src="{{ asset('storage/' . $partner->path_image) }}" 
                            alt="Logo do parceiro" 
                            class="img-fluid" 
                            loading="lazy" style="max-height: 90px;">  
                        @endif
                    </div>
                </div>
            @endforeach               
        </div>
    </div>
</div>