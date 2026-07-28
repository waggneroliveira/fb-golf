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

<section id="news" class="blog-content pt-3 my-5 position-relative">
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
      <image id="image0_3080_1465" width="144" height="140" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACMCAYAAACTUiBYAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAD8mSURBVHgB7Z17rGVXfd/POfeOMfb4OX7jxDi2iSGmAZdC3TwsKwiIBfyBAUNdICpJRUgRKm3VRm3BFg1t01QFtUgQGtNSCxo7tKJSVbCTGkqQcMEYgz24mBg8fuAnfoExnnvPzu+7vT8nn7vmzJ17Z+6MZ8z8pKNzzt5rr732Wt/1e6+1R6ODdJAO0kE6SAfpgKTx6CDNqOu6xXvvvfdZi4uLR9fvw5eXl5c2bdr05I9//OPRUUcd9WTRE8cee+zj4/F4aXSQevqpAlCB4rAHH3zwvKWlpTMKHBcvLCz87CGHHHJ0AeJZRYfW96bt27eP8vnJT36S8qMqM6oyoyOOOKL/n3MFpKU6/1j9fqyu+f6zn/3sP6zrrz/88MNvNriqfP0dd6NnMC2OnkHkAbvzzju3FEjOq4G/eDKZ/K3DDjvs2CeeeOLo4igp19W5gGSc34ceeui4PtNQXd8DJXUVUMZVrqvrRz/60Y8Cor7uKjap88fU8aMLRD9b17ws9eW6AufjdZ8H6v8XH3nkkQ/WsRvr/Pa2fc8UOuA5kAfl0UcfPa8G972PP/54BvSY+t0VcEbFHbrNmzdP6tg0oAkwcq4GO+dmfVCcJnjqQRMwVJlRAJUP9yrxlnv1ZYZjowF0PRirjmkdXsjv3Cdl6prb6u9H6tynqj13tu0+kOmABFA6P98ZgBJJv1Dc40MFhF+tQV0sfaUrrtAPcJ2fRPxkMMNFShwFOP3/fOdYAAD3yLEa7F5s5f9wTbhKfy7iK1T3AjSj4mg9CHLPfHIsgM33yib3ABtXnd+rOj9ZZT9a+tS2NC3nD1QwHVAAAjgPPPDA5hIT76+Bf3uJlc11aLlm9ngY5EkNeD8YACEAySeUwQ8FKPkEFAEIuk9+D1yr13vy3+dTT3GWUXG0/nxAlvtGZxr0o/5TelGvO9V3OF7H9flEjNYnHChK+u9VmUs9KUYHEB0QAILdl4V0Yg3KFTUgLx8spMkgXiYRSXCQUHGlfrBzLAMKOHI+g1tW1WjgRrPBz/lcMwzwqJTivnyOpwxgyif1hygz6FQzsAHE3Is6ijuOY9FFlAZ4AVeVCbjS/j8oUP7jAw1I+zWAwt6rI6f33Xffi2tAr6xOPzMWUA3AwqAM96IqAzfoLeNwhYAjBLfIB3CEs4QzASQDDJ0HzoUVlk+O5zygcxmLPUAbgITyO5wo7W1BVsfHdXwaIBVHndZnocp85Pjjj//tA0W07ZcAAjglqs6uwb26BuFnaoB6jlOdn1k7000yoxmQHAtHyICFQ+R4wIEICwgysOgv8wilOdeGAoDUOwB2Vkc+iDQAk3vmdwj9CtChT3Ge+8fwy7ko8AOYl+uZFuvYPz/hhBN+j74Y7ae0XwEI9l0m+DHFKb5UHXp2DeRSzcxJdeykWHxvVR1zzDEzX425B2KFgQYo6CkBQb4RQ4i8AC5AyPX5D+gAIAAId6MM56075X7RjVI2nC5lrBeFAnA4WIhrB4W8tw6HZwhLXah7vb7u+9/zu+pfHu1nNBntJ3TllVemg7rbb7/9PQWSB2sAzorJXB2anu7N5wx0BrMANbOcQhnQDNjgh+kHJWWwmnJNBi4AMrByPv6dMv/7Qc956spvuAYARCTm+pRLGbgTYi510q4cS12IsNBjjz3Wl8sxzqWu1F/uhw43QX0HPMs1Sf6kLM2/yLFBrO1X9LQ7EuE6t91223O2bt36jerQI0uHqXHYvhA/Sg1Cx6CiV2QQEBHoIBkIRAocKRwKSwkuM9xzpmwPvqD+WECX8ikHoBBniK3UG9CFE1Jm4B4zBTz/A7TcM9dzDO6WYylLuwF02lvPNi4Om8kSP9JCRFx9/8w999yzvdr55mryf9ufuNHTCqBrr712MabsDTfc8M7qqA+XXyQsIw6+TYMp3jFbM5ttCmfQI05yLtwFbpOBsR8H0KEDheAsIRRgBvWhhx6aKdnoP9Qhh+Lohz/84awOzgPKEJyS+l2fFW7OodwHRPlUnePhuaP/pOKl4lCfLL3wPdWOl+4vIHradCCsjBJZt1ZH/1w6o4CwgLVjURO9AuBkULCoogvlHPoG5jiciNkNMcBSYFdwMu6bcpQBHHAR9Cf0rHAiXwfHQnnOMepwfVzvYyjutA0xGT9SPOh5vvRTPddifX6+JtC3n26P9j7nQIisYtVnVcfcUj+XB8V0Mf6RAkjvEESUHHfccTPT2aIEkRZOoLr7b2a1gZFjcKG2nAccAKZNMfNzDT4jLC64FaANkEMBbAhdKOdjJeZ+1AHIELWIMrsCrPgPXGxMDC+cp44/Wd//v9r9H6uudz2d3GifAgiT9Dvf+c7fr8H5DwWg7VGSBy9yApxjnHbpwHQ6uk0++Ghg+egq0Unc6egdIfQhfEG5Nlwr10b0YVYDTsz0tIF7AVq7AAzODDLg6Tt1uAZQ5l4BeiYFXAfxx/WhtItnRGHHWEh9AdIAok11blrnfrsA+ht16TFPF4j2GYDQdwo819TfX4tDsB56MbO3OqfLTIXTpLMyuPh5mLEhdBJzgFyTAUQU5Fq4QOv3waRmxvedMHArTH3ux7UpT/wLgCEeUZxDADTUlgkBOoMI3xDPEq7Hudwzz5/jiLPoRgP3Gg8c7NAC4PYq/6tV95/n2n0p0vaJWRjwXHDBBUvfLipuccH9998//cEPfrCYGZcPnc6M37JlS/8/Hf3II4+MHn744ZkHN+cjXqy75HjKON5FHg8gwETnO9cBTu5lRyMhiPwu5bU39Q1iOEXKUYfziCjHMxlMdmKmrbgNQpxjItk3FeIYQB+cjk9Wvf+3+vZtw7X7TLfd6xwoXCac56677nq0BuKwmKX1sJPq+A6lESdcOi1Kqf05BC4Z+IiBHEOkMKgMvAHh0ATcBWU4nwAjIAIQEOIILgRnTHnqtoVn6yzEYNMuuwCsRHMt4LH3mnJwIpRzuGZAFKDUsWkB55Dqo6U69/ESlc+qPvrovlKu9yoHGpyDSzV7H61OePZwvz6AGKBE9pd/o+cycAO4BiDKd7hLyL4XAMPMjtjiuuJuPSdg4EPoJYAn5Eg9uhKEiEO8pK2AzdfjYqCugCz6jsVZG8qAm0L2S7VtpC155iE1ZcbFBu41xmdURZfr/0fKQHlnwLMvONFe40CIrRJXS+mAmiV9khVRbhTbIdOv75DoQ1g6IXw/cA0HKENwnHQkfhYGAG4Rcigjvx1VBzhpA0S4AQDDyfK/vMK9cp92hjM6vgUnzf9MCiLygBzOhdMwbQwnIcUE7pJyOR8ivsbzUT/hEMI3w7MkN3c5PrW6f/JFPrS3OdFe4UCA56abbnosDsHqjMSyOgabASaMkEHMoEWfQH8JIX6IrocTxQuNRRVCx0C/CJcIB4ALAB4GCnHFQKKUpx3cr9WXGHyuSxuoB2ATroDT5Lo8I4NurmLfUO5rvYn68GznPBzOTk1beCk7uDXG9dwJgyxX2Q+WU/TvjvYybTgHGszJpRtvvPGBiK2aCQs18Mk1TlhidOSRR87MbvtVkPOwZ2Y24Aml8zB5EWEhgqQMFDM0IApXs5VGhzOrCZZ6kAELA2fHpn1JAUi4UKcovcUr4DUXNUBCcBu40NCHK/SmiOTy0v/VoFW7c036IpPO3DlVVrvS3dNq/x/VtXfU+T8b76WI/oZyoIFdLn/961+/rjrkqDxIzaDEspIwNTr55JNXzKIQVhiciJmFZzfEIAQQ6TTrJhE99tWEGGzqCsFJuL85BfrF8Aw9MKxUU56ymNopm8kwbkIklEW0dkPgtvWKm2tRnwlri8xJCN0vx9Mn9FXKA/LhuZeq7qtrEp+WiT3aC7ThHOhrX/vaZSWO/kY9cKyD8RB97k488cS+M4hWY12EIzHI991334oQBh0Cl0ABTacdf/zxs2xAx7vgGhFfmLroWw6oMrsRReYIEYMpj35h897KOO3MM9oPZTFpyrMzKTiPu4FjLfkZTFybTwCffkw5dKaEPqpMnV54so7fdu+9926utj6x0c7GDQNQLK7rrrvu10466aT3VsP77LruKZa0IizATEoH4BFmgFOGgY3yiaVGeUIO4yYc0YodxJPznxlkUkKokzogO/qwDAG8zXV+A0LyjKwrmewktZnukEvrDuB53EbrSuiTDokQ5hlcILF2N1W//qSOJ+Yz2WiP9YaIsIQoTjnllMOOPvrozxVnWEqqZo6nAyJiMmixXqIEZ7bgz6AT87AZrJj0ACS6D8oprn2uQYSEE1nscU/K2K/iDEbMaPQZ6zuEECKaXF+n1BGLndSD6U55gICYgYMghs1p7PG2O8FgMsAhzpNTRF0hxGzGoerrjd+axNtrEt0Z8Gykeb/HALr00kv7+FZ1zIPlQV6u35NhJvYmO4FGrBeSwUg9tcMv/zPAgMYmMiw7deJsDAWYGWxAQYc7fQPgZKDJx7FYwttrzpH7YiFRjhQSp4Bwj9wvE8QuCM5TnmNRim2RmcuF0kcBmrkSZB2xzQKgHSH0uixlGsTZYh07ue79gdEG0kYAaPrpT3/6T4rzJCA6GdZk9eciokIZvAx0BhDlEeXZfo1cF3AgqmyloZiSPhGy59eOQNi7xQ73ycCkPXAV8qs9wPZqB5z5YCqjeAMK2oX4gMO04s5tSbn0B+ctlqgzv+NLMnlycB/XH6Lf4JaDbtbFvE8Cf5X73QLoaRulVO8RgMJ9rrnmml8u6+qiYpmTchr2ijBOPGQ0/pl0Wh4wCh+dHnKYAlZeSt8sYb61yjB9M7DpSMRACO6GUkx5vnEF0PHc2xZUqzRbd+uaVBD7idqEMt/bqa/ck5DHuPEzWcdLH3Bf6uK+4ZBcb9fHsHTIVul4CFhHq85mETdulCjbbQAFPOE+NehfLEAsJcaF5ziDHpAgm1Ea8YUEKOgEdFzABndhBmK22/Paem3xkzDAOAzNGVqTnutCHjgGz0FQ2p3jLUegHeZItA8uYNPcbbLboC1HzG4sv1jrVjCHNMdzAJj/3GuwgOOhPqLE7b8cbQDtNoDe9773dTfccMMfFudZqgYtRL/Ztm1bzxkChDi+PHh5aPQhR7YZMKwj8mPSAXQeFkY4C+Q4Vq5PKqr1AYsY7uH0UmYtVl7fGQp82huNOY/H2uV5BsBhkxwOYwei2+EJ1lqW3NvPa+J8Cz44XOrOs8H1mAxpU9Jk637/rCbeEXsqynbLjA/r++pXv/q8auRvlS4zJZcng5kZcdppp61w7KEs4zUNxzAHyYfOJC2VOuM/Sr1l4c0GFpOZ+FDqdAJZgAZAQ7akaA+gDJdzHpAtLutFrisgMnezyW5xmTqGAVshGq0w0yZH2kM2GmxIWCRaZJrIssSoCIUzskwpVnNNiqyz+3rV93OjPaB1c6DB29zVA3ytBmoJkxqFF9c+egOdFpHW+joAT65hlodyjNCGg4rmHuYqqR/xB/eyKezBw7SGUkfAioXoZTmUA1AWg/iuUN4NIgBO/e4PyrbWlS1GLEg7Sd2O2eBJvJo4nmd11J+8owFYC/X/udVX5+0JF1o3B7rsssvGV1111T+tjnlWcYes9R7DngOSNPKBBx7oRRgzwMlUGVxWK6RMgBGdCHN5NHTUMFNWrOVCHNJJfLzuKv+jqwTYKJWOLeHI4z5tnAuCg3DN8l/t/zO7hqh9yHoe3NiLEnE9UJ567QhMWbh0CxSclLTfCjdkByQOypDzrkkJGcYmQderoxN1uxm1XxcHyk2iONdNP1ANmSQXJWY7D5lMQvSSWFERZ3ATGk7jUf6GlNYVi/Ng3TjsUgd1AQg6jnI+nuszeAEqg+hBgYuRax0OlPqdeoo3mxCFuVgozxCg2pS2jwidKN+5RyxQOw2tP/Hc+J4MCvcJ/ix8WZ0CxwaRRTDlMDJsCdZkTqjj8LrnPxrtJq1bhH3mM5/5d6WPRAnrhlnTtx4TfKrkKR6cXBunINilbxPcMR5WMuRYlOR0ruNiDBQcBTGBs9J6Bh1KOqwtF67F+xzCojJ4LH4ZvFzjMlzbxsPCrbDiWoXYOhI64jyxRBme0fdkYhKl574WgYhQib1xtT8M4d/W72xqtG48rFn24TO44447PhvFNpyHxsLqQ+nQ+IJg7xUbmw1yypL7ElbNwkB8InAvxB4AYPCcAAbluK0ZlEfWjyESQuhnlAUIiA/ATZvQwzwI5lLUY/0MQjxRnria3QQm2mB/UxtkRcySIWnrkHaiKHMfgIe+5tjhUGfSYpfr/LlV3ydH66R1Ie4rX/nKvy+9pRtQ3AUs6DnRf3jwfO6+++7ZEhpbK4gcosd4qM2KncaBspoy5gTch1TWlkOEEGMhxIvDCqa2XgbGDkZzFn4DFCurs86V34fUDo63XAjRgrcbXautz2ABKH4G+thcyO6N9CMuhHwPqb9Jt3l1WaQndut0Lq4ZQOOnYlvv1iYBYx4yqRXWDUKECELMbB7QO3vlWFg2Ky8AEh3P4JBOSn0hcoEMUK6nDFbcwpw8IPuFLEYQE3Zqtuazc5BsQUFWwFvgzdNd7Lty+RZEbrfr8OTr5jgn7cVHvBOeGQyhOrz8++tVpNcEoKDyuuuu+824w2smd0SVE7pIw/A620yOcpwZglsdcpIVHWnrC8vLntoQ4ivikQ5Bn8GpZs4AeA3sVq+YdcJQh8VhCB+Ry4XG8lzb/TBsdLUDMMwZDCBbg+hoAM6O1VYxbsWlXRYOlQBoJgCgt4thuFdvTdeh14/WSWsCUFBZN//XBYoprJOVmzaXaaS3Uvn+97/fK49tKmoeKuw0nCdmv60ZVmja1MUiQ6/weddrADFoOY5F1jzXCh3HKx9C6ej4hzwBGOCQV2RQl+/juu15hsyZ3ZY2xsaAt0q6XQahrvFk436wxdqCaHCB9BuS1vWH1aT5a+sRY7sEUGJe5XV+Yd10S1lfCcqNaSCrKVDseGCsJzqXHCBEE4NE56bTA6Tx4K3mQa2n4BeyUtjGtjxYDAT3St0k5NuPwjVtWfuGiODbs9s6+Rjg1mBwklkrcuAwxA8py4R0vWlH62Rk0hGhh1ou7OXRHDdHGybOtP4vlYT4z+sRY2sB0PSuu+66vLjK9rA6Oj03Dafwqk0sEgaU/BvrKAGXB4dBQf8hgu9rEI3MYjqO5HwGpH8ggcipH5QJiHLdnHXnKwBhEHEtA2jRwz0NBHxIDBLtNfeiPCEbk8UZrgnqsejj3rTLk7lV1M2daAMW8cDxMraTGrMX17HD18qFdgmgqmihQPGS4jYLMd2ZJcSm0pjoJQERMxv5nQaS3kEah2WxZ7P9JvbtcIxv3AMAiOU77tCUJSrO4PGb2Y33t1VoKc8aenPWdpBt6nMeE9sOQSd5LSyszFFKPTxDa/0ZcHlWW6Lcn34EjC1wcGQCMu4bSt34zFh3H2W6VI5L18qFVgVQUPi5z33ukvIwd1XpbHd22D15PuYKARaNRNuPeMqDhCPYgrGsZ8dUgNhaEVzfDiRxLDy0tpwYaFwB6Sz8Q63Jn//oWR4kwNCmouKUtO5iKy73MIja+Ju5Hc9t7unnZtKxoMC61Vj+HtJrfY6y6KAcs5Jt/bPaksTAvzdaI60KoKCwBvafpKMyAFGIWd7LTGYRX4j8Z2/7RofAlj1oiEJ2VQ2lA6J025qx6dy6BNwB1ivM6bgnTjbicQYEzsBWKQcYLSBs9dlE9vPhGfZxBqrVv0KksXZzfFFW0q3vwIkgdLUW7Kkj9bu+XIeuhpoQMVb/jyzJsXktYmxXImxcHOUF06f27pk13CAJJe6V3zHdzVXgQAQSnWRlQGF1oSeEXcc3lAfGjxOyopwHh/O0TjzMaw8sHYq3mkw/Otg+IQ+YB8I6m73kvq5VrOdZfhY/TET0HZdz+8xpvEasfYacd5/RH6gFBrTrU+wvlnZX/fuOtYixVQH0zW9+84311b97Ik489IYETekoK2+W8Qxi/gOQ6EMMANfjeXVU3B0N50CvaQc0QEqczAPF1izuPABNshuWktm8rTfaN88aai0qD65NcYsi+2raAWxB2yrV1G/T3edCTqSz6G+vb10SzqAc6omVnVjnu0ZroFUBVIPytrziCFYW0ZIb8h4ITHWCjk6G58EIpOZ/ABifD6soWtbOagRWQxhQGXgvp/F1DoTagmsdbmln6g13Cxm03McgaDmLOYy3pGlNf3MM7m+nnsnOQ9e9YpCkUNO21sEIeCjTWmAGdGvyAzpxoUiyn7311lufNdoFrQqg4jS/PnRsRzCO9VbMnAwqIYUMjK0n+1YAFSY7A9haMlhAdg2gI8G5XJaOandp9ayzqLCybLHGIND2dvBaAHlDBF/TcjOnpXrSUDeDCDdgUrZiyiCiTsfCrFe1XMV9YR9QyKER6kMfqqD5EbvSg3YKoK1bt54VsxtdJxXDBexryI3JNoxOEg4TJRXU09h0nk19CPHGg3Iv9JSJnF9+2Nb6YVY6hOF6PUM9GJjAOCrbQWsHxkq2126ZC0GEd9Bx0EHmmeu0jckWMojcBnPLefXZWJnHbRDFLbgoP/RRdlV55670oJ0CqCr4zbzFL74BZlI4TUxyI9iJ7ogxJ5P79QM5Fz0IWczyHh4A+Q8Xc1oCHWBdw3nM1sm4vzkL5eBi3uoudQYMbjflW53G7oFQRGfrpQas5pJ2BGL5GLSuG0p5v2moFfmUx9noPCtzVP57UjEe5GJznMUM1T/LVf5No13QTlNaq0G/Up3Qv3srNyC+lYYmVcODxkzAqxpfUBoRr7N3P4VzRZcK5yFXxzOg5SzMXj849zS4PNsDBus+5hK0uY1LwVE8w+eZ3D5OnQR6rTS35fwc1lFaDoY15snTAgd3BgDAeAEsgNdpwW3bVmvvMIlz8vTRLminHKga9sISSVMrwyAc8eJOwcTleAYIxyGNQ7a2KRat0ouOAvdir+WucSwyqKQl0L7lYZmxPckh7mHHJ23jWRBnfgkKZdrO9uCjY7m8LUA4T54F66/Vu1rdjHd5WJQBBivLpPv6Gbk3AWGe0eKflcKMV8prHV62zju0vg8brRdAXf+GyMnmO++8c5ayCfdIY7wsp11tgUwm5we9BSLBu01n4OHtjyEuxnZwHjR3OkpjO8gEQVkqxDXubDoW4PSdMtmxWzwwXEMuNe3yuZR3VqWBMbwTY4WIAdTc21yn3YPI4KQ8r15w2wEKE7vVCUOp24DL8WHMp+nbqnfzaBWaC6Drr7/+UBpLeIAYFCDKcRyHdJJ3XbVyCDDQO+As7nw/dKjd+StizznRtiLcaY5w09nmCgardRSuYTa37SLPyR2NyMSh6fYDHost6znErkLtMuxWZBOK4T/nrBu2zlHGj3vPAxDHIY3lWBtiHb+aJTYXQHXhmYMvpn+lJDtlMUB0AlmHttRgr5isaPsT+VWYbbkHLNMP7H0S3bF5KMIQVhgtptirmfVhLYDgDIfoPRoGKoDw7Hb8zso47erkw6I+64fts3AdotmWm3UY348JscMATlYuOWrFPGOCS6SdePlmjGTtdt1TLwiOKPqHq1licwFUnftLVVF3zz339BtERRwhn1HwWhkPhyHjkEQsK5LjwRVAB+ZDyMKBUGZqm7rgzqezMW3teWYQUydLbyjvbEcPki2bfPwODjrXYHAbud4J/67TOkv7aQFu0NCv3KdddkSd5Jlzjm/qYeL6eo4j0m0N8qx53VZ9v3y0Cs0FUFXw3IQviDfh/+GG+EO8ggCks4VvZkNCDPY3tKYwnYDS6liZM+fIOUJv8Czz3j6eybaQ8CeFLFo8qLQHasHA8/EcfedNdnyHBv3h66w/tW4LgEf52cBMVi4TchutK1lMmRtZXPGsiDqX59simPLZ4azoiNF6AVSDcuIgarp29mTAiHGxWM4P7V1Do0/EGsIyYzYhjsi5aVmzd6fwIOWacCyb94C5BYPbhSizTkadLWewEuuZ6QHzoBpUiLYW5JDvC+egPrfX/WlLE1E5r047CR1MtVqALuVMBy/KJE1ZQA4TWb8SXZVsGZTd/jVDJMZTMZYXOc0ozVhNsFuLIWaH/TUBRDhLxIw7ts2JDvGQ5CAxaC0YPCNbU3vezGuvbWc2IijU6ittGynXKqcuT91MTIj1dfOugWsBMm+iTp30Bf1E3lPX+KJSD45M2gKRfiKfUtJcF2+55ZadcqG5ACrQJAd6GT9OvMdWQGHhuRH7A6Kk0dB0IPpHPizyYyZZlKUOUlrhbq1PxGQnm9Mi7E9qAQGQncYKtfrcQuPxhoMCqJYbcS3ckD5ouQVl6ROS8twP80Snc7XhcnjArSK4jeiApMPaux+yugB3py6AxiSvmOjmdQGo6ISqYMIuqvkkmcwbIKCbwA0UyZ09OGvCAQFWm52LDCy+DjzBlGt9FBYTdFw7+OYoBhkz0yKmVWqtmHKPlMUZZ67m+/secGs7AttcH3xh1E978Hk5zAFXoa/821F+7o3D0mTR1O4+S9/h83OfDdvTbBqtB0AlVhbrorEtGm6YRluesvNqzkW0mWvgM0JJhHtZf2Dwp9OV+UAeFJmXK6w0J5ub/dtExfNMnW3nWkQBAMfJoDwLm6G3gUgr1q1zNP8BhPOSKQcQ2riduYY5Kam51EkdcG3alXN+ObHdFmmDFzF4MhAGsu5bY/zs0XoAVJX3joCY8rkJy4/TEOflwOLYroVELh4WDzFpsAyqnY+tLsCGTDxQa0XkN7nI3NugM6diYNl8mzIkqM8TSx4Icyn+k1fNIkKLbddnYDCI1uNmAzD0I6m29l21pnULLj+7OT+Ufuc1C+ayIe+05jHwnk66Zu2OxEuf2ra3v6BE2JjK2EUen4t1iNyUByDdlQGmLJ3LgLRgck70PHMY8Njnk2PpCHMUP7y3p4OY5cxinJIMtAfb7W0V3K7xG9GelCU6DrdDHNmv1YZ47M1v92I0Z4FsUbVuCZOVYsrxm+duz+O0ZIxWox0A9PrXv35xyOzvUGgx8UAzooiZi7/F/hhEB/4jOtUzwSKJhLE8UPxHZueu03EvBp21Xl5b74dvPd38bjkFx+nMEI5TwOAdzAwgZnErhnI9uiLERDNArdugx/AcnkAGCGLcItj+JdfLeZypVk88eci4sL+p+nFptFYAbd26dTk7xjN70R/yn/dNcDOAxIaObQIUegscKaLQs5sPL5LjobHg7GDj4XhwjnEvAOodxNwJWIIsy25XjULMaItVn0OEGUAEfluyYkvYwpFvD/g8zsFztuBogdf6kJicfAAvQAnxjG1mAJNuSBHuJVA5h58c7YR2ANAb3/jG7Daft7xMsmaazoGTeGYAELgH+0DzEPmwhyKdkoxFz3ZEmJVP2GgewrEyOoFvr5JoZyazzkq76yCY6Yw+Fga0wc0WYPhYICvprZ7iRQfeH4BB9ERw27tufvjJHMmWksX9ZLIyBXceyLACiR36WtSPOt4NY7PTd2vMVaLz1jvfEJCkY7Mjh2eAOzxcI+KEB223nwsRn3JAlLpsjViRduce0rxiMvXFcrDFYcXSCqTZdoiNqKwAe6/FeboPbWo3jHJfmTPOE1N+LoPIH4OwbYPLwDGYCO3ksdLshYQOxyCa6RsmZtjPoCftuEE2bZl3sIKn95fczhLXCayO9IpUnHVg3NzbkKDUknZBp4XwJ9micYegUwEIVk5AmJztnoXUhVfbs3ln29mF6EznAdlZ54Fq20p77BOCI5t8ncHIYLkOytgAoD+oy3oSk4wBZ72/2+21e6kTRyVtQbd1n/EMA1eLBHryhBNOWBlZFu0sFnZj3XyS1FViVXASxFi4iM1fWHQrKmyZBBisL7MiasuODkx5nJDUg660s5CFXfRWDO1HCQWE7GyWcqSe2CiYd20LCL5tvpvb2fUQYpLYg9xyJIsnwOGN2Q0QJi/Xpn9xXFp84oOaZ2HSHnNBnqH6JRmpd41WobkAqkoeGgata9MaEFEQjjcABHeiMxkoGoZfiUFmjVmo9XWQjmmF3conyrM5TOsXsgVD/bxXtU1Cd7v5bS4D2zeXIi/Z1Cq6dldQF5tXtaCkPOBB+WetHBwdvbHlYOZQBj9uC8i75iLCWLIVqntnI42FassDo1VoZ/lAd9TFY5Ys5+PKY6WRXxLR5oaac8zb5RRxx5IY7wXUdjxs15zMinfITj8AhX+jHRgGr42TASJmrUWvyU5BwJD/bBFs4HlGh2ylobx6j0kDtdX7qMtWpoGHLoc4srXnetr33pvr4i/iucI8hrbvVP/ZKYCqgj9mYEppniWVwQEACeLH5jXgsHu9Nb+nQ7DVg3lI89bjpj0rOA0P3yqd1M+3B6bVY1wH4pl2OdC4orMkilrjgJBN66KwYg7RRmdYtruQ0ZdEyOel2tqXRMiENOE2pRYdEpAtLCzs4Mj0Zub5TjpPte3R0Sq0s2Dqtwbu0WUzTUx5K6VYYzgM7URkhoFuQESDYdGIKTrOoqll+96IqWX7lKdTmYFe7twOoK0g7sF94HoMDPfgebwNngHK24WcHOd7+ZqWY/nTcnR8VwScAYP1OogXBrfjEfKk5b78TnlEpECU17VfMxqtE0DnnHPOk6WwLtHZOBC9HzIeSxrkHdARCXbUGWw+Zp3FHb7QRNXRh2zNmCPRCfg3GNB5oRGTUyo4T0wK/wrHd6ZQu+2IQfvDAAX6DI5MuIq5DgC12Ae83jmWfnaoiI85STsp27YbbCjbBlY9y5+N1gugUFXwF1GA2RuIuBYeahruJSecB0xej2T9g8ArlplfAEcn0gG5F95hQhauz0BCz2hFi9+t6oFyxL0FJbEsNs205WjuhBLNeQ8Ovy0uPFlyHbogx7yJlnW3YTBXxL5aPcaGQivCXZ7VpxDZFSGd64Z+2jGpaS0Aqkq+kHdhpHJeoEJnsKohv9GF/ACOV7Etr2UrdYD0lHGivu9jayPnkj6CU8z6htdgARDO8RLd9g2IgIBOxivb5tgYrLTN4gOuwmSgXupA9FsPNIhaS3Oe95y+QvRZ7+N5rT86RCGdZvY83nAUgOICwbgZxuoHo1Vop6HWuvjWAKG4UPaL6RLgtGeXZLP8TrKZc4HIix4PJnM6iaU6jjPBjlMuQPQuHVb+LMdzrVeNui5zEecKwaKte1AeZxsfYmq8N966CFzOoRfqQWwRIad/2AbZk8yWHPoiS5R9ro2e48sJONghF/BYF8xxXjaHBGDi0ietX4lcJV6hkLEubvTISSed9KPRKrRTDlQI/d91s3F1QIdJGMWZrfKtwefm8Rx7R1aLi3QQ7+OCGDDkNmaqweFZjDJJUJLjHkA6iWNE0RFhvnfI+yb7HKIpbW4Vd2cqmgxKK/zW6VqnYqv/wPla14fbh76D2G+5JM+f335LdsiORW8143DPMEbJhc+roL492gXtFEA333zzre4Eezg92y0SmIUAgiSpdpUoJn6I0EXEUguaEAqlQRQvOB5yjqPAtxYPMzydSVu5h5VVcy8D23ocA9h6wuFycCxboS7bcmArt0wg39ttynlzdrIjzYVw6AIWOEvLbckOyDnypVDwh7oSRF2sY+/vdnd/oIrKZ1HQw/Vws+T66EGgmLgU77CI0xEQea1WHjLij91F8zDkFFkvCPLtocZL7YAg38vD5gl2wvk13wyixVY+JPl7dYg/Bh4iB/3GYmKe0gr3BBgGXQtqygAgVrOE2tW0BhC+Jyggaic2fjp2S6G9Vg/QN8nhcsLa0N/ZEzNb/n5hvLv7AwV51bDL68Z5NeIY64r9fWKhofCRD5QBwsJyB6VhEXEMJMn1ViqZAaRa2uT3AAMguAPXehVHq2QyIHhsW6ukBVErFr1Eye31AMNF2vpIfW0V3vZaAEO6bbvfEOCxqwBwAB77fri389GZUN7tzROHscyi0qrviS1btqzqRFwVQOOn3ov6qSAxCiEAcuKYzfmAwgoYprwbGE7ErF1QPotAO9M7dlYORTb/YcN0psWEzVhbI7DpVoncWaiEe1JPK2K7bsfVHQYzKa2AMGQgZrK14PI2MA66Wjy2iwMYfMpyD/ROJjvc0rqqvfzV9jTmyZrIXxutgSarnTz33HO/mg2mslNZNttkcMg94V3voN3biLBOfp6nE92gTbCnU3FoeTY7Qo25mf8WYx7EedzAosH5L3xTh68FlFgoPEMbVgAE6GJOXyFvG7Bbb3IbRgIRBBj8DAy8k+1YaOAJi45kK5Sxod/tVxv6N4sJn1XHPjDaUwCFqpH/K+1JekfEFlvaYSbi7OMBsHyY0cwMu8/JW7G32Q9lc5jBYTCpz7OWGBb1m9yp/u236tgxaX3L3IRj4ZBeOmxOh54CGZReiuMtiZlM9Mu8lRmEklqwA4CQN55yvTluq5ZrEWO8ukvOw2w0njdNfna0BloVQNGD6qF+/6677sp7xmeB03zTkTQS52Ie1s5DiyEAwpt5VrNsQu07Rlvu4muwSmDJ1EtdiCayCOZZMu19cIoaYOheOOLMAc3lusavRL0h+5EcMee+To5jsC1mQ4gycxaewfodAMK1ACAp63VqeZlO/VyqY1+ta5dHa6BV12wMGvgXr7/++vRAXroyLpE1hqUXsEbHHXfcChOajotVlj0SGbg8LIORawMyXthiUDhlld2z7GoHDHhuPbix4nj1pvUernEQFLEQkMI96VSus0+Fa6ibEIbFZOuwo0x+hwORG0V7ua8nEu0jXmaRyH0cu+P6FrjUz3Oygxn/Q1iOtnhrUixWm98zWiPt8qW74UK33XbbMXWTl1XlE1sqsHQPLI23s4pO8UZUrJCgPrysbX4PqQ7t7GagWnKOs5XJ1pKzCNyut9lYr/HMBviAwvWZC7R7NNuNkPvgd8GStWecclhuTCbUBhycBoxfaYWRwL3pH48BagDHGINM5kQccu/nPve5bx+tkXapA4WKnf6rMsOTnZbe7JhhVg49sF6JQLabnVoQZjs5LMxiO/tCxJn8IhH7WvxNeb8zHjK7JgC61Gyf6/IeBA8wzk8r4jlPtkLfsZOVjlP0OjzpDKKT2+FaHIfTt/Ug6vxKK8x/5yTRbvKEeH4HnYfnHQ/tSO7Xv+k28o2FEWMXXnjh/cXqbytus1w3HPOO1DxgOjIORkQVYiINZoGgxQIeV3bkADSWxxxj2Y1NZx4aX5AdZ9RpUWpuZE81HCHt9IoFg8irWg0yrmXjdPZadpTcOpBByCQy0LAuDRxziXaDUSvItAmu76wA+5c4TmYpUmAQ7SmUkNVCKc+/O1oHrYkDXXrppRFdl9x5550LdeMx73xH8ycFIKyWBPlBns7SWwksumNYfWG57p3QmJFeLmSPq3UXxIC3lTFnmrfvIpTOjWLv1RLO6GvNagOzTUinbTxnfrdbAnbdypSP5TkJ8zwbk9Tpr9RrsWpRyFY6nnjE3hywHcAa7jOuMazT0z8d+rIbrZHWCqDpRRdd9OW60WPVYUsBUaLB5K6kYZn5+U/6B52OWQroPFPzELkOq4yOsxVBJ7D2K0QHtQo4g0tw13qOHZsGRDoedz7xOGY4A2iAMCAArdWb2jJwFSv+OYbp3F6P5QTYAQahCYct4DB53gCMtBCnBtNGnIcAFiDWpE/YIp/Fqv8fdHvrvfGpuOh36kaTevgpKa4ZyHx4bWMaHyA5ZwiTlPCEU1XRpbwqoPU+87C8iM7WDgPcmutwLmYqHMGiI3UBdvQldy4D2irM9l8ZiIDKYPAHk537EBS2JRnywMPl7HXOMb9ign4kn9txQdrLxNRG4vk/Hq5fLgA+VOLrpvHeeG/80BldBVj/a3XCUuk8fYoHr35CNCUviEFNZxFwDTH4yG7KABbEoP019ntAdhjSOZQFlJSZt7HTZLJyo0v0BnM86xvWfaiDekKkxKK4U9biYywHaIhzOPG8MYTPE7vzljK5Bu+/nyuE0u2oO+cQaalHO9t3g3qxUP3wG+vlPqE1A2jojNzgnXmf1LZt2zqQTZpr/mcxIoNqLpQPifgeSCfbt8tvPdjMePQU5/dYzLRBWOssLRhh9+ZeAAnLcDqdv3o01AIiohhObEvS4sReYQMmxxz4bAmg48gN0XYmCaLLgVj0Skj6Ux/jTNV1/cNnn332/1wv9+mfbT2Fc4Pzzz//j6qBP47cLGdgR/oGrvYgPEABGPkmjwV9h4HiY6uDzRfMASzS4DLhaB4Ag6AVMTk/L9/I4ql1TPqdZRYvEFyya3xT4X65jrCFrUbui8XI1sUGqYOrcBEA6bbALbHo8h8VgCiBHZ2MDTnY0X3i96nbBI2v3B3us24Aha688sqFatxrsos9ZqwHBDYZEx6t3x7RDHzOjUYrPcqEGPIBRK0O4VBE7hegeraZrRM/YuBIN7GOAqGfYKnw4RqcmVxrcWkXhAOl9All2he84IfipcX0Y7scxy6QNiDtby9cTFmnhMzZ3q7nPlVfFg/++RlnnPGV3eE+fd+NdpM+//nP31s6zzHlE1pEJqeRAUcaT1qHZz3fdKStJzqN43QKLBlfy6zhEiXOU3YmoOt2Cqn9J04FcfkQIAlNFBLhWOtkxJxGN6Q++sIeb/oIZ2tCQqk74R9CDKSCABpen8Wrt7y7iM16dE2yJWzF5bu8zuNSmOsW2zeVNT0OU8i2PqPdoMXRblD8QsV9fqEad39eh3DaaafN3sycTuG9pMTJyP7DpKcTGERzDi9IbMHlwbZ+0e67w3mDwkt3283NKcsxBgET3z4VyuKnaVdwhMi+ZAKYA1NHAIApDxi8Ky4WGM9PG9DPWk5nAPGsGDjoVrRlsFInVT5me7Y03C3w9HWOdoPiF3rNa17zYDXy8mrgtMDSW2XxUKNUp7FZQ28PNUlpiB+LP2YKQGH/6bEcgii9ISLMhBQMKnOITp7jdDzvTreHmgF1crlNY/Q26iYrwW2DA8EtEO82p62P4AVGfOZ677dtZRtON2+xQX7bKjP3tega1IXxMHGfqGd6vDjaB0fD+q/dpd0CUOiyyy4bv/rVr357scB6rqUpLDmziA7Ow6BM5iGx1Oi4AAyRYmtrLK+y34DjpdV80/GkwtLJ9np7tqYtAS+EqPQLWAAPuhb7XUMuS5v5T1sNFFtEznHys0+HWFlUAC+PNvBSV/ozSjKpLrZ06TccrX5G62FV9tCq/xWDb+/pAVC4UGRnPfTPF4iSAtAPDHI3SM9DkJaZxrfeaBRVOAC6jJVGv73Zq15bRRVnmx2H85x9dGbSSZa1QKDvjMlkh5CEOVgbkrDZbzcCbceaAwy2xOxcdCYAiyCxohh4CIDgkea1EDznJm2CSnLfYI2x7/e0JtxnTz/99C/vKXj6PhvtAUXxet3rXretGvzRavA0DsYMOOEMuEA6JzMLfYgMxpxHucNUN/eCzcOFWm82A0jnY804d8a5wAx234vTlW9QtulvpZv72nryrmEWKQYRCnLORx9kIlm34R7UYccnx1mAAJkrtSKRNtpLrQyGpCY/UfU+cdZZZ/16Jv9oA2iPABSKKHvlK1/5jmrkA/Uw05KtAdEYKwBrJCIgAwwX8TLenA9HQBRwLX4kBooEMwa4/R2aTndcTzWPW7i8X3RiMDhu5x3dCbwaDCG+SYCbKhwRsdOmv6DfwHnSjtRNTMvKOlwR4rVaXksWstMQP1Cd78ryyluYk17wixFdu2t1tbTHAIooq89iAeLU+rtYnbRcHdGxfzFyOb/DhYiLwW2Q1ZHtAZkHm87gmzccMpD2DbXiijiYweSwB/dwvS0QZp00AMh+mXAV9Ds7+Fh+4yQyQhB2/qHT2e8ER3RMC/DAeTwB8av5leU8Gyb+8L63xC6zUPDVl19++Xc3QnRBu+0HaikssQZnSzX+3tKFlsvPMLFpzEPaEmPm2JrB/LUl4sEevKizNE+/g8KiKoQ+xkylHAvqFprkLyxIBrR1KVCWb3MEt8+xKHQn0lloT943yzPCfWhbKOdTFjHvZd8GlvW1PBPLq4YkvN5heMopp+TZLi7QXbWR4Omfe7RBFJb4jW9844GaPa+rDly4/fbb+4ayRQxcBCsjZC8pMwanFwqrZy0dRRjAy1paEzyEVePVm8xiW1vUwZ49JKaFXB/+JJLQWm9wANC+6tzXth5nW53+Dcja3fcxDtB5vL1xzjnHHOMgVnI9z5fr95UbDZ7QhgEoFHH25je/+X/UAP2nzJwavD7XJLMgQMLcjL6DfM45m6FsF2Nl1yDzFiroF5SDnKFo0xZRA5C4jrJsletz3B9QhBhAfFnUn2eBq9lKtJ6Egg+4usZTj1nPuYgoROV4PN6hLbx6vNkTO0liXfnlsjx9evLJJ59X3xuiNLe0oQAKxUt9ySWX/FY9zNX1d5oOKPT3IHKeEPEu9CCndiQtBJmOJ9hWVzotqz7sBcbyQfENpX4sIItJ6xAhQEYAlXSH1G+OYp0KELK3EWkq6GUWaYAJLoxYM1flPKKZcwYk/qrWuUowe+CCWdOedXzTuvaQU0899dCAZ0+8zavRhqOyYmRp/+RFL3rRFRdffPHL68Gek4T8Yq9dDch4eeU6pJky7ZgXVguWRlgzg2w9IcCAZQNCOtZWEDnFWDTJpmQQzJX4H45EBgFlzZXaMAN+Gi/ToRycJMfzPNSDNdauBgEwxMICZjIdjj322B0UcbIdAPQgqpeyxqvAE8RO9hZ4QhvOgULV4CyPnbzpTW86vx4oa6yX7rjjjt6cZLbgVebFvcxgzuXjjRACNOI41gPQRYgpeYGjFd92J3fu5z0bGWjADLexEu/rXU+IpDmLSfQbtvQDoLTfuUO8Xt2GAMo8Iipkiy/X0KZhc9Dl6sMnAp6rrorOvPfA0993tJcoIIpldtFFF/3NAsL1NZuW4x+KiY+10DegHjwiK7ONwYdVM7gRVwDCIHPuMGLKoQ78Sd4qD4vIZdusRgMGJyYzvvUlwSVRsCOaUfC9IhVA4UVmexrOJY7odlCeiRNyEl3aQf4Sb46sY3lRTvec5zznyGuvvXZxo3w9q47zaC8TqQIf//jH/7Q67IItW7agEIZ2SNii8zyDYe9JZ8Dxhx5hZ2M6NOKOWY6JT/SdgG3KxkyG5fOBQzhLEo+xo+9wDXMlE7oSz4RTlPsQ3sh32hsQpl9CrB3Df4TLAvA6jJNz2fyiyo8zQes+T5bqcPje1Hla2usACnVPpQxMP/ShD11RD31Jsd3lbNaQAWW2Eoz1WixA5DQOK6cMkjlDrml3CvN1Ic4hfmwhWd8Zj1cmtNl64zyhGgMx9bLE2ikVgMarZzMp0oYTTzxxxp3YgKHlhuhb6EPDROmyJKfqfPylL33pUfsSPH1fjvYBBTyxzt797nf/nTLt33333XcvFJC2ZwPP6uiOGR8dIqyYgUrnwpF4R337QhfrLIgEFFBvPmDdBM7EbwKXtmxCpICkXbxcJgT4eM2DfT34sdgaj1AOnBLRg3cbfY49JrdrL2g+LGJMmbQzes8QM+yGvvhOwBOxtS/BE9orvoF5FOss31dfffX/+8IXvhBf0e+E5Ra36GUFgxqgYAZjfTkswHYmKMpDYvhMKcUR6KVDqatdX85y6dwXiyuE1dUGOdl6BQ4ZEQh1CmbivUbpRfFvLUOWP2F5oUNRhswFnjuUe4SzDeJ3e/1frHZd/oIXvOCVAc8FF1ywNNrHtFsZiXtCUfLe8IY33PSyl71s07Zt2+4p1n1UVnlUh42ZeeEyKNAMmJ2G4UTkHjlHiOvT0bHuwsEyEOl0uBbi0Cs8oviSUkrqacjOSerPIHtzTu4Jp0QkEuOLJzzgZclNyNYUHvicS3vx9wTITuXN+QBniCkuFfgOqXaed+aZZ17XPZXXs8/BE9onIqylMi+X8xKXt73tbceVI+6PizVPapZuj+8igKDDs0QohBKLRZXfsHWcb967CN8S4g7dAacllhvprfYDeU0a31h7juPl3q2uRKoJXBHxShKYRaX3iYTLsK9SgCQ3xBgDoOoNUqqp0wcrbHToV4oyIfdGiGKttE+U6J1R9KKEPz72sY89v0CxdZDfmU2ThEBQdnlXvd/X7qT1448/fpacjvWVb9wFORclNcS+OwQomeHEn8KtUHpRZuEE3poFzgOg7FhEhwIYiFA41gknnLAicZ5ngvPQBp5lCBSHw2yqY58699xz//a+VpZ3Rk8rgCCA9IlPfOJT9fdN1ZH9hlYxT1lM5/CALS8GjzCG11GhewBER9sBCJwjZPPbG1Z6hWcI0UY5K97s+WOrDBAkKp57yYKauSRyHziXLc6IpqpzsX7fU7/PO/3007c9devxdLQf0NMiwloacoomb33rW99cA3JmyfofVKdNCkh5e3Sf5RiFF98MulE3JGI5uR6RZFBggeEuIN8G5RVA4jOyZYbIQTxSFksrTk64D/ngzpjEojTQ7CFHNKLkD4sFEs+a5tljaBRHetEZZ5xxSk2wOwaRtV+AJ7RfACgUEOX7lltu+e4rXvGKk2oA/npZYT8s0ZLXjy+VddUN4ZDe6UaSvvcpSnQcUAw6wwx0AUUGPKYwg0peDpaSLbko4ew1hGhxENbckFib98fmQ3qvHYUBHVF20i6GvOw+EFr3zf4DC3WPjz7/+c/fXFbrze6j/Yn2CxE2jwbLoiuF+1eKc3y2ZuVh9b1UszG7xU5OPvnkjmBjwOPNDWJRRUygJLOhAAv1Mmh1ff8d3Qh9iDwgb6sXfSXAwCoi6d3ea6y8gIuXoMDJ4Ibj8cpNGnAdBLgF4nFecDs4BRfqPt+rCfCS8u30b8p5OpXkXdF+w4FaotNuvvnmL73lLW85vDr8l4qj3BcPdoBUs3jZGzjgxSYYGW7DMVtgpIYsabMmRA51EdlHn/HrsidK1E8ZNhJFVMbFgMMzRLoF+hmOycHiGhdnSmxwGldG0Xfqc2b5c04v8Dz0dFtYa6H9lgO1BEe64oorXliDcWUNxtn5XzN1e4miTfPiU1g/+bZug1lOOARRZ8UXoFhZR+GGi4S8fAdHIFsADtxlppsNS49iGCTZazme+DpfVS7cUscvOuecc7Z2G7BWa1/SAQMgUb/RZ5n+J9Zgva8+78ha7xqEpXR+fef82PnMWF6Oc4VwTgIWn0PBxVoCoGRQhgIOHIF+M1GOnXTSSb0oDTcbPN8d4ZW8eyQmeLXvw8WN3nvhhRc+eqABBzoQAQTR9u7DH/7wL5fOc3mJirNqUJdrUKbZkrgGNFHq3sMdXxGeZpyMcA1M6QAChTZA4Rw6EkCK/hRQVp09N/GurXC4QRfqiOdlLfqgW11T3+9/1ate9cVu2FLlQAQOdCADyNRzpRJvR5ZI+xcFgEuKo5w87Bs4jQWXbMgMfKyheLxZ0DiY9fnfD2KU5sTgAiDETuoh3BAuRRwsoBxM+ijAeUVA9twZK102AH64rvt0gesPXvva194yeobRMwVAPQ1ioP9Z8baF888//xcLBO8ofePFdezcEinZkSKWV5hDwBOx0g360Zj86wAlVlyANoimsYKkvSldQJkMzslu0InGg5i8u8pfW9f9l6rvSwWax0fPYHpGAWhXVH6UzeWQO6nEzatKxJxXYDm1OMWpNfDH18AfHgvPCWwozSjR9TsI3Z53iRa3+W5931Fgu6m41f+p763Pe97zHnnJS16yffRTRD9VANoVhWudd955h1SEe/ytb31rIRkCpQxP87qr733ve8vvete7njyQ9ZWDdJAO0kE6SAfpIM3oLwEx9nIifJoaVAAAAABJRU5ErkJggg=="></image>
      </defs>
      </svg>
   </div>
   <!-- News With Sidebar Start -->
   <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="col-lg-9 mb-4" data-aos="fade-right" data-aos-delay="100">
                  @if ($blogAll->count())                     
                     <div class="d-flex justify-content-between align-items-start mb-5">
                        <div class="d-flex flex-column">
                           <h2 class="d-table px-0 p-0 w-auto m-0 montserrat-regular font-14 title-blue text-uppercase rounded-top-left">
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

                     @if ($events->count() > 0)      
                        <div class="mb-3">
                              <div class="border col-12 m-auto p-2" data-aos="fade-left" data-aos-delay="100">
                                 <h3 class="mt-3 mb-4 d-flex justify-content-center align-items-center gap-2 text-uppercase montserrat-medium font-18 title-blue">
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.66667 0C3.11848 0 2.66667 0.462085 2.66667 1.02273V1.70455H1.33333C0.600267 1.70455 0 2.31845 0 3.06818V13.6364C0 14.3861 0.600267 15 1.33333 15H12.6667C13.3997 15 14 14.3861 14 13.6364V3.06818C14 2.31845 13.3997 1.70455 12.6667 1.70455H11.3333V1.02339C11.3333 0.46275 10.8815 0.000664781 10.3333 0.000664781C9.78515 0.000664781 9.33333 0.46275 9.33333 1.02339V1.70521H4.66667V1.02339C4.66667 0.46275 4.21485 0.000664781 3.66667 0.000664781V0ZM3.66667 0.681818C3.85742 0.681818 4 0.827637 4 1.02273V3.06818C4 3.26327 3.85742 3.40909 3.66667 3.40909C3.47591 3.40909 3.33333 3.26327 3.33333 3.06818V1.02273C3.33333 0.827642 3.47591 0.681818 3.66667 0.681818ZM10.3333 0.681818C10.5241 0.681818 10.6667 0.827637 10.6667 1.02273V3.06818C10.6667 3.26327 10.5241 3.40909 10.3333 3.40909C10.1426 3.40909 10 3.26327 10 3.06818V1.02273C10 0.827642 10.1426 0.681818 10.3333 0.681818ZM1.33333 2.38636H2.66667V3.06818C2.66667 3.62882 3.11848 4.09091 3.66667 4.09091C4.21485 4.09091 4.66667 3.62882 4.66667 3.06818V2.38636H9.33333V3.06818C9.33333 3.62882 9.78515 4.09091 10.3333 4.09091C10.8815 4.09091 11.3333 3.62882 11.3333 3.06818V2.38636H12.6667C13.0417 2.38636 13.3333 2.68466 13.3333 3.06818V5.45523H0.666667V3.06818C0.666667 2.68466 0.958333 2.38636 1.33333 2.38636ZM0.666667 6.13636H13.3333V13.6364C13.3333 14.0199 13.0417 14.3182 12.6667 14.3182H1.33333C0.958333 14.3182 0.666667 14.0199 0.666667 13.6364V6.13636Z" fill="#31404B"/>
                                    </svg>

                                    PRÓXIMOS <span class="montserrat-semiBold">EVENTOS</span>
                                 </h3>

                                 <div class="bg-white p-3 px-0">      
                                    @foreach($events as $event)                        
                                          <article>
                                             <div class="d-flex flex-column align-items-center mb-3 overflow-hidden">
                                                <div class="date col-6 h-100 d-flex justify-content-center align-items-center border border-right-1 bg-danger">
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
                                                         <h3 class="h6 m-0 montserrat-medium font-14 title-blue" title="{{$event->title}}">
                                                            {{ substr(strip_tags($event->title), 0, 50) }}...
                                                         </h3>
                                                      </a>
                                                </div>
                                             </div>
                                          </article>
                                    @endforeach              
                                    <div class="btn-about d-table m-auto mt-4">
                                          <a href="{{route('client.event')}}" class="background-red montserrat-semiBold font-15 py-2 px-3 rounded-5 text-black">
                                             Todos os eventos
                                             <svg class="ms-3" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M17 5.66003C14.562 5.66003 12.34 3.439 12.34 1V0H10.34V1C10.34 2.774 11.118 4.43803 12.339 5.66003H0V7.66003H12.339C11.118 8.88203 10.34 10.546 10.34 12.32V13.32H12.34V12.32C12.34 9.88103 14.562 7.66003 17 7.66003H18V5.66003H17Z" fill="black"/>
                                             </svg>
                                          </a>
                                    </div>                      
                                 </div>
                              </div>
                        </div>              
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