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
    <div class="fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{URL::asset('/images/poll/Logo-SOS-200x200px.png')}}"  class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="{{URL::asset('/images/poll/Logo-La-Merced-200x200px.png')}}" class="img-fluid">
                        </div>

                        <div class="col-4">
                            <img src="{{URL::asset('/images/poll/Logo-Vereda-200x200px.png')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-6 text-right" >
                    <img src="{{URL::asset('/images/poll/Logo-Arroz-Americano-Completo-600x200px.png')}}" class="img-fluid">
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
