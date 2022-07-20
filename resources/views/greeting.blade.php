<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'helvetica_neue55_roman';
            src: url('{{URL::asset("/fonts/helveticaneue-roman-webfont.woff2")}}') format('woff2'),
            url('{{URL::asset("/fonts/helveticaneue-roman-webfont.woff")}}') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        body {
            background: url({{URL::asset('/images/VolvoFondo.jpg')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        h1{
            font-family: 'helvetica_neue55_roman';
            font-size: 85px;
            font-weight: bold;
            text-align: center;
            color: #ffffff;
        }

        .success{
            width: 450px;
            border-radius: 25px;
            background: #2a507e;
            border-color: #2a507e;
            padding: 40px;
            color: #ffffff;
        }

        .btn-blue{
            background-color: #2a507e;
            border-color: #2a507e;
        }

    </style>
    <title>Volvo</title>
</head>
<body>
<div class="container-fluid mt-4" >
    <div class="row">
        <div class="col">
            <a href="{{ url('/') }}">
                <img src="{{URL::asset('/images/logoVolvo.png')}}">
            </a>
        </div>
        <div class="col">

        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1>WE DRIVE TOGHETER</h1>
        </div>
    </div>
</div>
<div class="p-3 mb-4">

    <div class="d-flex align-items-center justify-content-center" style="height: 350px">
        <div class="p-2 bd-highlight col-example">
            <div class="success text-center">
                <h2 class="text-uppercase">¡Bienvenido {{ $name }}!</h2>
                <br><br/>
                <h4>TU REGISTRO HA SIDO EXITOSO</h4>
            </div>
        </div>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>