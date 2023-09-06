<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8A////ALjBwsasvLz/q7q9/6u6vf+ntLj/nqqrxv///wD///8A////AP///wD///8A////AP///wD///8A0dXW1LG/w/+wwcT/r77C/6u6vf+qt7z/pLS4/5Wqq/+KoaP/pK+vqv///wD///8A////AP///wD///8AvsfI/7vJyf+3xMb/qrq7/6Gztv/Ay83/0drX/+bt7f/s9PT/f5ye/2+Qj/9jeXr/////AP///wD///8A8vPzVcXSz/+/zc3/WoB+//Hz81X///8A////AP///wD///8A/f7+VOTr6f9rh4j/Wn17//L19Cr///8A////AMvW1f/I09L/SGxt/////wD///8A////AP///wD///8A////AP///wD///8AxdjU/1Fzdf9Jam3/////AP///wDT3N7/0dve/7XDwnH///8A////AP///wD///8A////AP///wD///8A////APDz842dra//Nl9g/////wB8OkX/cjA3/24nLf9tISb/Zx0e/14cGv9jGBn/YxcX/1wTEv9hDxL/WhES/1UREf9WDxD/Ug8N/1YNDv9KEQ//fT5I/3g4Q//z//v/jmJj/76oqf9hFBb/8vn2//r69/9MEhX/ildV//n6/P9HKyz/nICC/1cND//o8u//TwsJ/4dIUv+YeHv/lnBy/8OrrP/j3Nz/Yx0h//j7+v/3/v7/XhoZ/3xYWv93Vln/j4iI/52Ulf9VDhD/7PLu/1ANC/+KUlr/gEJM/3o4Q/99LTX/aykv/2QhJP9lHR3/Yhsa/2UaG/9iGBf/YxcW/1sQEP9YEhH/VREO/1EQDf9RDQz/////HOry8f+3x8j/s7e3VP///wD///8A////AP///wD///8A////AP///wD///8A8/X1cbbIyf9niIj/////AP///wDm7ez/5e3s/wo3OP////8A////AP///wD///8A////AP///wD///8A////AKC1t/9qhoj/aomM/////wD///8A3ePiqeXs6//j6ef/CTU2//7//xz///8A////AP///wD///8A/f7+HJyxs/9sjI3/ZoaI/7m6u3/d4uKN////AP///wDk6+v/2OLg/8fU1P81UlL/OF5g/0pycP9igoL/epOV/5+ws/9qiIn/aIeI/2aKiP9kioj/cIiL/////wD///8A////AMvT0dTF0M//scPF/6W2uv+TqKn/epqZ/3WTlP9sjo7/aYmI/2iAf/9riov/bImL/2+LjP////8A////AP///wD///8A////AJurrP+cs7X/jaSl/3+am/91lZT/Wnh3/////wD///84aIeI/2iHh/9sioz/+B8AAOAHAADAAwAAx+MAAI/xAACf8QAAAAAAAAAAAAAAAAAAAAAAAJ/5AACP8QAAh+IAAMAAAADgAAAA+BgAAA==" rel="icon" type="image/x-icon" />

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
            background: url({{URL::asset('/images/web-registro-back-1654x930px.jpg')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        h1, h3{
            text-align: center;
            color: #2a507e;
            margin-bottom: 0px;
            text-transform: uppercase;
        }

        .volvobroadregular{
            font-family: 'volvobroadregular';
        }

        .helvetica_neue55_roman{
            font-family: 'helvetica_neue55_roman';
        }

        .success{
            width: 450px;
            border-radius: 25px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 40px;
            color: #ffffff;
            font-weight: lighter;
        }
        .color-text{
            color: #2a507e;
        }

        a:link, a:visited, a:hover,  a:active { text-decoration: none; }

        @media (orientation: landscape) {
            .text-align{
                text-align: center;
            }
        }

        @media (orientation: portrait) {
            .text-align{
                text-align: center;
            }
        }

    </style>
    <title>Volvo</title>
</head>
<body>
<div class="container-fluid mt-4" >
    <div class="row">
        <div class="col-12 text-align">
            <a href="{{ url('/') }}">
                <img src="{{URL::asset('/images/logoVolvo.png')}}">
            </a>
        </div>

    </div>
</div>

<div class="p-3 mb-4">

    <a href="https://wedrivetogether.mx/">
        <div class="d-flex align-items-center justify-content-center" style="height: 350px">
            <div class="p-2 bd-highlight col-example">
                <div class="success text-center color-text">
                    <h2 class="text-uppercase">¡Bienvenido <br />{{ $name }}!</h2>
                    <br><br/>
                    <h4>TU REGISTRO HA SIDO EXITOSO</h4>
                </div>
            </div>

        </div>
    </a>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "https://wedrivetogether.mx/";

    }, 3000);
</script>

</body>
</html>