<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icono -->
    <link rel="icon" href="{{asset('/icon.png')}}" type="image/png" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" />


    <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'invitados' || $pagina == 'index') {
        echo '<link rel="stylesheet" href="css/colorbox.css">';
    } else if ($pagina == 'conferencia') {
        echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
    ?>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Oswald:wght@300;400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
    <script src="https://kit.fontawesome.com/1a2bd5a108.js" crossorigin="anonymous"></script>



    @routes
</head>

<body class="<?php echo $pagina ?>">

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('status'))
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Gracias! El pago se ha realizado correctamente',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
    @endif

    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="https://www.facebook.com/Creciende-100317412386236/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </ul>
                </nav>

                <!--.informacion-evento-->

            </div>
        </div>
        <!--.hero-->
    </header>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <a style="margin-left: 400px;" href="{{route('prin.welcome')}}">
                    <img src="images/logo_8.png">
                </a>
            </div>

            <!-- <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div> -->
        </div>
        <!--.contenedor-->
    </div>
    <!--.barra-->



    <section class="programa" style="margin-left: 500px;">
        <div class="col-md-6 login-form-2">
            <form action="{{ route('registrar.guardar_usuario') }}" method="post" autocomplete="off">
                {{csrf_field()}}
                <h3 class="register-heading">SEPARA GRATIS TU CUPO AQUI</h3>

                <div class="col register-content">
                    <div class="row form-group">
                        <input style="max-width:300px;" type="text" required name="nombres" autocomplete="nope" class="form-control" placeholder="Nombres Completos" spellcheck="false" id="txtInputs" />
                    </div>

                    <div class="row form-group">
                        <input style="max-width:300px;" type="number" required name="celular" maxlength="9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="N° de celular" spellcheck="false" id="txtInputs" />
                    </div>
                    <div class="row form-group">
                        <input style="max-width:300px;" type="text" required name="email" class="form-control" placeholder="Ingrese su correo electronico" spellcheck="false" id="txtInputs" />
                    </div>
                    <div class="row form-group">
                        <button type="submit" class="btn btn-primary" id="btnEntrar">QUIERO PARTICIPAR

                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <video autoplay loop poster="images/contenedor3.jpg"></video> -->
        </div>

    </section>

    <footer class="site-footer">

        <p class="copyright">
            Todos los derechos Reservados a Creciende 2021.
        </p>



        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        

        @if(Session::has('wsp'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Registrado!',
                text: '{{session("wsp")}}',
                // allowOutsideClick: false,
                confirmButtonText: 'Aceptar',
            }).then(
                function() {
                    window.open("https://bit.ly/import-gratis", '_blank');
                }
            )
        </script>
        @endif
    </footer>
</body>

</html>