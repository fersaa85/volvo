<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'haborosoft-norexbuploadedfile';
            src: url('{{URL::asset("/fonts/haborosoft-norexb-webfont.woff2")}}') format('woff2'),
            url('{{URL::asset("/fonts/haborosoft-norexb-webfont.woff")}}') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        body {
            background: #ccd8de;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .bg-talabera{
            background: url({{URL::asset('/images/poll/Pleca-Completa-793x100px.png')}});
            height: 100px;
        }


        h1, h2{
            font-family: 'haborosoft-norexbuploadedfile';
        }
        h1, h2, p{
            color: #ffffff;
        }

        a:link, a:visited, a:hover, a:active  { text-decoration: none; }


        .color-red{
            color: #98232b;
        }
        .text-center{
            text-align: center;
        }


        .form{
            border-radius: 25px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
        }

        .btn-blue{
            background-color: #2a507e;
            border-color: #2a507e;
        }

        .alert-success-blue{
            background-color: #2a507e;
            border-color: #2a507e;
        }

        .color-white{
            color: #ffffff;
        }

    </style>
    <title>EL RETO DEL ARROZ AMERICANO</title>
</head>
<body>
<div class="container-fluid bg-talabera">

</div>
<div class="container mt-5 mb-5">

    @yield('content')
</div>


@section('footer')
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
@show



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('script')
@show

</body>
</html>