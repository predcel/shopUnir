<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>store Shop</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/alertify.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/validacion.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">


    {{ $linksCss }}

    <script src="{{ URL::asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('js/messages_es.min.js') }}"></script>
    <script src="{{ URL::asset('js/localValidateMethods.js') }}"></script>
    <script src="{{ URL::asset('js/alertify.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>


    {{ $JSscripts }}
</head>

<input type="hidden" id="urlAsset" value="{{ asset('/') }}">
<body class="bg-body-tertiary">
    <div class="container-lg">
        <header>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3 col-3 mt-2 mb-1">
                    <a href="#">
                        <img src="{{ URL::asset('images/unir.png') }}" width="100%">
                    </a>
                </div>
                <div class="col-lg-3 offset-lg-6 col-3 offset-6 text-end mt-2 mb-1">
                    <a href="{{ URL::asset('/') }}">
                        <img src="{{ URL::asset('images/storeshop.jpeg') }}" width="50%">
                    </a>
                </div>
            </div>
        </header>

        {{ $body }}

        <footer class="bg-primary rounded-3 mx-auto mt-5 text-light-emphasis" data-bs-theme="dark">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-lg-4 text-center mt-4 mb-3">
                    <p>Hecho en México, Ing. Edcel Fuerte Martínez.</p>
                </div>
                <div class="col-lg-4 offset-lg-4 text-center mt-4 mb-3">
                    <p>Todos los derechos reservados 2024.</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
