<?php
include_once './Logicaphp/BD.php';
include_once './Logicaphp/logica.php';
$lo = new logica();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloquera Juquilta</title>

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" type="image/x-icon" />
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="vendors/animate/animate.css" rel="stylesheet">
        <!-- Icon CSS-->
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <!-- Camera Slider -->
        <link rel="stylesheet" href="vendors/camera-slider/camera.css">
        <!-- Owlcarousel CSS-->
        <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

        <!--Theme Styles CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Top Header_Area -->
        <section class="top_header_area">
            <div class="container">
                <ul class="nav navbar-nav top_nav">
                    <li><a href="#"><i class="fa fa-phone"></i>+1 (237) 108 98 93</a></li>
                    <!--<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>-->
                    <li><a href="#"><i class="fa fa-clock-o"></i>Lunes a Sabado 08:00 - 18:00</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right social_nav">
                    <li><a href="https://www.facebook.com/comprimidosJuquilita"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- End Top Header_Area -->

        <!-- Header_Area -->
        <nav class="navbar navbar-default header_aera" id="main_navbar">
            <div class="container">
                <!-- searchForm -->
                <div class="searchForm">
                    <form action="#" class="row m0">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                            <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                        </div>
                    </form>
                </div><!-- End searchForm -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-md-2 p0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="images/bj.png" alt="" style="margin-top: -25px;"></a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-md-10 p0">
                    <div class="collapse navbar-collapse" id="min_navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php">Inicio</a>
                            </li>
                            <li>
                                <a href="#Nosotros">Nosotros</a>
                            </li>
                            <li class="dropdown submenu">
                                <a href="#Productos">Productos</a>
                            </li>
                            <li><a href="galeria.php">Galería</a></li>
                            <li><a href="contact.php">Contacto</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container -->
        </nav>
        <!-- End Header_Area -->

        <!-- Slider area -->
        <section class="slider_area row m0">
            <div class="slider_inner">
                <?php
                echo $lo->mostrar_slider();
                //var_dump($lo);
                ?>
                <div data-thumb="" data-src="images/imagenesBloquera/BLOCKROJO.jpg">
                    <div class="camera_caption">
                        <div class="container">
                            <h5 class=" wow fadeInUp animated">BIENVENIDO</h5>
                            <br>
                            <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">¡Estamos para servirte!</h3>

                        </div> 
                    </div>
                </div>

            </div>
        </section>
        <!-- End Slider area -->

        <!-- Professional Builde -->
        <section class="professional_builder row">
            <div class="container">
                <div class="row builder_all">
                    <div class="col-md-4 col-sm-6 builder">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <h4>Atención personalizada</h4>
                        <p>Visitanos y con mucho gusto te atenderemos</p>
                    </div>
                    <div class="col-md-4 col-sm-6 builder">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <h4>Calidad Garantizada</h4>
                        <p>Contamos con una excelente calidad</p>
                    </div>
                    <div class="col-md-4 col-sm-6 builder">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>¡Siempre a tiempo!</h4>
                        <p>Haz tus pedidos y será un placer servirte</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Professional Builde -->

        <!-- About Us Area -->
        <section class="about_us_area row">
            <div class="container">
                <div class="tittle wow fadeInUp">
                    <h2 id="Nosotros">NOSOTROS</h2>
                    <h4>No hay limítes</h4>
                </div>
                <div class="row about_row">
                    <div class="who_we_area col-md-7 col-sm-6">
                        <div class="subtittle">
                            <h3>Misión</h3>
                        </div>
                        <p>Somos una empresa dedicada a la producción y venta de comprimidos y materiales para construcción, que busca brindar a sus clientes la mejor atención, calidad y servicio a través de nuestros productos</p>
                        <br>
                        <div class="subtittle">
                            <h3>Visión</h3>
                        </div>
                        <p>
                            Ser una empresa consolidada en el ámbito de productos comprimidos y materiales para construcción, reconocida por su calidad y atención al cliente, así como la expansión en la cartera de productos.
                        </p>
                        <div class="subtittle">
                            <h3>Valores</h3>
                        </div>
                        <br>
                        <ul>
                            <li>Honestidad</li>
                            <li>Respeto</li>
                            <li>Pasión por el trabajo</li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 about_client">
                        <img src="images/imagenesBloquera/captus.png" alt="">
                    </div>
                </div>


            </div>
        </section>
        <!-- End About Us Area -->
        <!-- Our Featured Works Area -->
        <section class="featured_works row" data-stellar-background-ratio="0.3">
            <div class="tittle wow fadeInUp">
                <h2 id="Productos">Nuestros Productos</h2>
            </div>

            <div class="w3-row-padding">
                <div class="featured_gallery">
                    <?php
                    echo $lo->mostrar_todos();
                    //var_dump($lo);
                    ?>
                </div>
            </div>


        </section>

        <!-- Our Partners Area -->
        <section class="our_partners_area">
            <div class="container">
                <div class="tittle wow fadeInUp">
                    <h2>Repartos a: </h2>
                    <h4></h4>
                </div>
                <div class="partners">
                    <div class="item"><img src="images/imagenesBloquera/holcim.png" alt=""></div>
                    <div class="item"><img src="images/imagenesBloquera/calidra.jpg" alt=""></div>
                    <div class="item"><img src="images/imagenesBloquera/sicartsa.png" alt=""></div>
                    <div class="item"><img src="images/imagenesBloquera/Marcas-Cemex.png" alt=""></div>
                    <div class="item"><img src="" alt=""></div>
                </div>
            </div>

        </section>
        <!-- End Our Partners Area -->

        <!-- Footer Area -->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_row row">
                    <div class="col-md-4 col-sm-6 footer_about">
                        <h2>ACERCA DE </h2>
                        <img src="images/bj.png" alt="BLOQUERA JUQUILITA">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="socail_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 footer_about quick">
                        <h2>Enlaces rápidos</h2>
                        <ul class="quick_link">
                            <li><a href="index.php"><i class="fa fa-chevron-right"></i>Inicio</a></li>
                            <li><a href="#Nosotros"><i class="fa fa-chevron-right"></i>Nosotros</a></li>
                            <li><a href="#Productos"><i class="fa fa-chevron-right"></i>Productos</a></li>
                            <li><a href="galeria.php"><i class="fa fa-chevron-right"></i>Galería</a></li>
                            <li><a href="contact.php"><i class="fa fa-chevron-right"></i>Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 footer_about">
                        <h2>CONTÁCTANOS</h2>
                        <address>
                            <p>Dudas o comentarios</p>
                            <ul class="my_address">
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>01 237 108 98 93</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Carretera federal 
                                            Tehuacán - Huajuapan S/N San Martín del Valle, Zapotitlán Salinas, Puebla. </span></a></li>
                            </ul>
                        </address>
                    </div>
                </div>
            </div>
             <div class="copyright_area">
           <a href="https://colorlib.com"> Copyright 2019 All rights reserved.</a>
        </div>
        </footer>
        <!-- End Footer Area -->

        <!-- jQuery JS -->
        <script src="js/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Animate JS -->
        <script src="vendors/animate/wow.min.js"></script>
        <!-- Camera Slider -->
        <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
        <script src="vendors/camera-slider/camera.min.js"></script>
        <!-- Isotope JS -->
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <!-- Progress JS -->
        <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
        <script src="vendors/Counter-Up/waypoints.min.js"></script>
        <!-- Owlcarousel JS -->
        <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
        <!-- Stellar JS -->
        <script src="vendors/stellar/jquery.stellar.js"></script>
        <!-- Theme JS -->
        <script src="js/theme.js"></script>

    </body>
</html>
