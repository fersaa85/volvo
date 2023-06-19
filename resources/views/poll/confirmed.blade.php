@extends('poll.template')

@section('content')

    <div class="container">

        <div class="d-flex align-items-center justify-content-center" style="height: 350px">
            <div class="bd-highlight col-example">
                <div class="success text-center">p
                    <h1 class="color-red text-uppercase text-center"><b>Gracias por participar en el Reto del Arroz Americano Auténtico</b></h1>

                    <h4>Tus respuestas fueron guardadas.</h4>
                </div>
            </div>

        </div>

    </div>


</div>

@stop

@section('footer')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-4">
                        <img data-src="{{URL::asset('/images/poll/Logo-SOS-200x200px.png')}}"  loading="lazy" class="img-fluid lazyload">
                    </div>
                    <div class="col-4">
                        <img data-src="{{URL::asset('/images/poll/Logo-La-Merced-200x200px.png')}}"  loading="lazy" class="img-fluid lazyload">
                    </div>

                    <div class="col-4">
                        <img data-src="{{URL::asset('/images/poll/Logo-Vereda-200x200px.png')}}" loading="lazy" class="img-fluid lazyload">
                    </div>
                </div>
            </div>
            <div class="col-6 text-right" >
                <img data-src="{{URL::asset('/images/poll/Logo-Arroz-Americano-Completo-600x200px.png')}}"  loading="lazy" class="img-fluid lazyload">
            </div>
        </div>
    </div>
@show

@section('script')
<script>

    window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "https://wedrivetogether.mx/arroz";

    }, 3000);

    if ("loading" in HTMLImageElement.prototype) {
        // Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
        // `lazyload`, obtenemos el valor de su atributo `data-src` y lo inyectamos en el `src`.
        const images = document.querySelectorAll("img.lazyload");
        images.forEach((img) => {
            img.src = img.dataset.src;
        });
    } else {
        // Importamos dinámicamente la libreria `lazysizes`
        let script = document.createElement("script");
        script.async = true;
        script.src =
            "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js";
        document.body.appendChild(script);
    }
 </script>
@stop
