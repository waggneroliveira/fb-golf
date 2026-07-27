<div class="row g-3 mt-3">
    @forelse($juridicos as $juridico)
        <div class="col-12 col-sm-6 col-md-3 box-notices">                        
            <div class="d-flex flex-column justify-content-center align-items-start h-100 border rounded-3 py-4 px-3">
                <div class="text-center">
                    <h6 class="mb-2 montserrat-bold font-18 title-blue text-uppercase">{{$juridico->title}}</h6>
                    <span class="montserrat-medium font-15 title-blue text-danger">
                        {{ $juridico->date ? \Carbon\Carbon::parse($juridico->date)->format('d/m/Y') : '' }}
                    </span>
                    <p class="mt-3 text-muted text-color montserrat-regular font-15 title-blue">{{substr(strip_tags($juridico->description), 0, 205)}}</p>
                </div>

                <div class="d-flex justify-content-{{ ($juridico->link && $juridico->path_file) ? 'between' : 'center' }} align-items-center w-100">
                    @if ($juridico->link)                                  
                        <a href="{{$juridico->link}}" target="_blank" 
                        class="text-decoration-none montserrat-medium font-15 text-center d-inline-block w-auto" style="color:#05473B;">
                            Saiba mais
                        </a>
                    @endif
                    
                    @if ($juridico->path_file)                                    
                        <a href="{{asset('storage/' . $juridico->path_file)}}" target="_blank"
                        class="text-decoration-none montserrat-medium font-15 text-center d-inline-block w-auto" style="color:#05473B;">
                            Baixar
                            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.33496 15.0098L12.666 15.0107C12.9036 15.0107 13.1008 15.0924 13.2822 15.2568C13.5129 15.466 13.5531 15.7579 13.4385 16.0205C13.3239 16.2828 13.0562 16.5 12.666 16.5H1.33496C0.972452 16.4999 0.68621 16.2928 0.564453 16.0361C0.455403 15.8063 0.461 15.5029 0.768555 15.2109C0.92046 15.0838 1.12048 15.0098 1.33496 15.0098ZM6.16699 1.24609C6.16699 0.671196 6.9911 0.184683 7.61328 0.746094C7.75439 0.879295 7.83398 1.06094 7.83398 1.24609V10.0439L8.6748 9.25781L10.8652 7.21387L10.8643 7.21289C11.0165 7.07087 11.231 6.9873 11.4668 6.9873C11.8652 6.98731 12.1294 7.20303 12.2402 7.45801C12.3507 7.71248 12.3149 8.01276 12.0684 8.24316L7.60156 12.4131C7.27527 12.7173 6.72457 12.7175 6.39844 12.4131L1.93164 8.24316C1.79355 8.11414 1.71811 7.94997 1.70508 7.7793C1.71059 7.38086 1.92958 7.1433 2.21582 7.04102C2.52882 6.92924 2.89528 6.99036 3.13477 7.21387V7.21484L5.3252 9.25879L6.16699 10.0439V1.24609Z" stroke="#05473B"/>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>                        
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="montserrat-bold font-18 text-muted">Nenhum resultado encontrado.</p>
        </div>
    @endforelse
</div>
