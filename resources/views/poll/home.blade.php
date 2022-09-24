@extends('poll.template')

@section('content')

    <a href="{{ route('encuesta') }}" class=" mb-5">
        <h1 class="color-red text-uppercase text-center mb-5" style="font-size: 77px;"><b>El reto Del arroz americano  2022</b></h1>
    </a>

    <div class="text-center">
        <a href="{{ route('encuesta') }}" class="btn btn-primary btn-blue mb-5">
            Participar en la encuesta
        </a>
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