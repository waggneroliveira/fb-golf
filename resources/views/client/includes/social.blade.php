@if (
    isset($contact) &&
    (
        $contact->mention ||
        $contact->link_insta
    )
)

<section class="social-instagram py-4 px-0" style="background-image:url('{{ asset('build/client/images/paralax.png') }}');">

    <div class="container">

        <div class="social-card mx-auto text-center rounded-3 col-5 py-4">

            <div class="social-icon mb-3">
                <img src="{{ asset('build/client/images/insta.svg') }}" alt="Instagram">
            </div>

            <span class="badge-social montserrat-bold font-14 text-white">
                Siga-nos no Instagram
            </span>

            @if($contact->mention)
                <h2 class="my-2 montserrat-bold font-24 text-white">
                    {{ '@'.$contact->mention }}
                </h2>
            @endif

            <p class="text-white mb-4 montserrat-semiBold font-15">
                Acompanhe novidades e fique por dentro de tudo que acontece.
            </p>

            <a href="{{ $contact->link_insta }}"
               target="_blank"
               rel="nofollow noopener noreferrer"
               class="btn-instagram mb-0 montserrat-semiBold font-15">

                <img src="{{ asset('build/client/images/insta.svg') }}" alt="Instagram">

                Seguir agora

            </a>

        </div>

    </div>

</section>

@endif

<style>
    .social-instagram{
        /* background:#f8f9fa; */
        position: relative;

        min-height:240px;

        background-size:cover;
        background-position:bottom center;
        background-repeat:no-repeat;

        /* Parallax */
        background-attachment:fixed;

        overflow:hidden;
        
    }
.social-card{
    background: rgba(22, 56, 50, 0.5)
}
.social-icon{

    width:70px;
    height:70px;
    margin:auto;
    border-radius:50%;
    background:#163832;
    display:flex;
    align-items:center;
    justify-content:center;
}

.social-icon img{
    width:35px;
}

.badge-social{
    display:inline-block;
    padding:8px 20px;
    background:#16383280;
    border-radius:50px;
}

.btn-instagram{

    display:inline-flex;
    align-items:center;
    gap:12px;
    padding:16px 34px;
    border-radius:50px;
    background:#163832;
    color:#fff;
    font-weight:700;
    text-decoration:none;
    transition:.3s;
}

.btn-instagram:hover{

    transform:translateY(-3px);

    background:#1d4a41;

    color:#fff;
}

.btn-instagram img{

    width:22px;
}

</style>