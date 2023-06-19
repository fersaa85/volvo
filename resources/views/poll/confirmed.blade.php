@extends('poll.template')

@section('content')

    <div class="container">

        <div class="d-flex align-items-center justify-content-center" style="height: 350px">
            <div class="bd-highlight col-example">
                <div class="success text-center">
                    <h1 class="color-red text-uppercase text-center"><b>Gracias por participar en el Reto del Arroz Americano Auténtico</b></h1>

                    <h4>Tus respuestas fueron guardadas.</h4>

                    <br /><br />
                    <div class="text-center">
                        <a href="{{ route('arroz') }}" class="btn btn-primary btn-blue mb-5">
                            Inicio
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>
@stop

@section('script')
<script>
        window.setTimeout(function(){

            // Move to a new location or you can do something else
            window.location.href = "https://wedrivetogether.mx/arroz";
        }, 3000);
    </script>
@stop