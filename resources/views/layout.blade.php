<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/css/lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

    {{-- ICONOS --}}
    <script src="https://use.fontawesome.com/177aa3b6ac.js"></script>

    {{--  EFECTO SCROLL  --}}
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image: url('{{ url('/img/textura.png') }}');">

    <header class="header">
        <div class="container">
            <div class="row justify-content-between pb-2">
                <div class="columna col-3">
                    <a href="{{ route('/') }}">
                        <img src="{{ url('/img/servicio-a-domicilio.png') }}" alt="servicio-a-domicilio">
                    </a>
                </div>
                <div class="logo col-3">
                    <a href="#">
                        <img src="{{ url('/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="iconos-header col-3 mt-3">
                    <span class="fa-stack fa-lg">
                        <a href="#">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </a>
                    </span>
                    <span class="fa-stack fa-lg">
                       <a href="#">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                       </a>
                    </span>
                    <span class="fa-stack fa-lg">
                        <a href="#">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </a>
                    </span>
                    <span class="fa-stack fa-lg">
                       <a href="#">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                       </a>
                    </span>
                </div>
            </div>
        </div>
    </header>
    {{-- FINAL HEADER --}}



    <div class="row justify-content-center fondo-menu m-0 p-0 mt-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" align="center">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('/') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('taquizas-y-eventos') }}">Taquizas y Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('galeria') }}">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactanos') }}">Contactanos</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>

    {{--  <a href="#" class="imagenModal">Click aqui</a>  --}}



    @yield('contenido')

    <footer>
        <div class="container">
            <div class="row">
                <div class=" col-12 text-center pt-2">
                    <p>Lacanastamagica.com / <a href="#">ventas@Lacanastamagica.com</a> / 5533 1345 / 10:00-17:00</p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ver"></div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="{{ url('/js/parallax.min.js') }}"></script>
    <script src="{{ url('/js/lightbox.js') }}"></script>
    {{--  EFECTO SCROLL  --}}
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <script>
        AOS.init();
        $(".imagenModal").click(function()
	    {
            $.ajax({
                type: "POST",
                url: "{{ route('/') }}",
                success: function(a) {
                    $('#ver').html(a);
                }
            });
        });
        $('.contenedor-platillos').hide();
        $('#tacos').show();
        $('.menu-items a').click(function(e)
	    {
		    $('.menu-items a').removeClass('activo-menu');
		    $(this).addClass('activo-menu');
		    $('.contenedor-platillos').hide();
		    var enlace = $(this).attr('href');
		    $(enlace).fadeIn(500);

		    return false;
	    })

    </script>

</body>
</html>
