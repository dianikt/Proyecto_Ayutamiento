<?php session_start(); ?>
<!doctype html>

 <html class="no-js" lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>Ayuntamiento de cornella</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/logo.ico">

        <!--Google Fuentes link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">        
        <link rel="stylesheet" href="assets/css/style.css">      
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div>


        <div class="culmn">           
            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Contacto tel: 93 475 38 22</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contacto email: informacio@aj-cornella.cat</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">                 <!-- nav redes sociales --> 
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Barra de busqueda -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Búsqueda">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Barra Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/Logo_Color_Horitzontal.jpg" class="logo" alt="">
                        </a>
                    </div>
                  
                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>                    
                            <li><a href="registro.php">Registro</a></li>
                            <li><a href="">Noticias</a></li>
                            <li><a href="denuncias.php">Denuncias</a></li>
                            <li><a href="">Debates</a></li>
                            <li><a href="sesionxat.php">ChatRoom</a></li>
                        </ul>
                    </div>
                </div> 
            </nav>

            <!--Formulario de registro-->
            <section id="home" class="home bg-black fix">              
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-9">
                            <div class="well well-sm">
                                <form class="form-horizontal" method="POST" action="index.php">
                                    <fieldset>
                                        <legend class="text-center header">Registrate ! </legend>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="lname" name="apellidos" type="text" placeholder="Apellidos" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="adress" name="adress" type="text" placeholder="Direccion" class="form-control">
                                            </div>
                                        </div>                      

                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary btn-lg">Enviar datos</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Concurso de comparsas</h3>
                                        <p>El dia 10 de Febrero, se abre el plazo para inscribirse en el concurso de comparsas del Carnestoltes 2018.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-tablet"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Introducción a la robótica</h3>
                                        <p>Introducción al mundo de la robótica, el bjectivo es construir un robot de aprendizaje.

                                        Dia: 23/01/18
                                        Hora: 18h
                                        Lugar: Biblioteca Central de Cornella</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-sliders"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Auditorio St. Ildefons</h3>
                                        <p>La compañía de teatro Pyros, nos presenta su nuevo espectáculo "Libros para quemar".</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>                        
                <div class="main_footer fix bg-mega text-center p-top-20 p-bottom-20 m-top-1">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with 
                            <i class="fa fa-heart"></i>
                            by 
                            <p>Diana y Andrea</p> 
                            2018. All Rights Reserved
                        </p>
                    </div>
                </div>            
        </div>
    <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
