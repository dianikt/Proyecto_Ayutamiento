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

        <link rel="stylesheet" href="assets/css/denuncias.css">
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

            <!--Home Sections-->
           <div class="container" style="background-color: #8ed6da;">


        <br><br><br><br><br><br><br>



      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;"><strong><h4 >Denuncias de mobiliario urbano</h4></strong></div>
        <div class="panel-body" style="text-align: center; background-color:  #e7fafa ;">

          <!-- Standar Form -->
          
          <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-inline" style="display: inline;">
                <p class="form-inline" style="display: inline;">Titulo de la incidencia: </p>
                <input class="form-inline" placeholder="Titulo de la incidencia" name="titulo" type="text" required="true">
            </div>
            <br><br>
            <div class="form-inline" >
                <p class="form-inline" >Descripción de la incidencia: </p>
                <textarea rows="4" cols="50" class="form-inline" placeholder="Descripción de la incidencia" name="description" required="true"></textarea>
            </div>
            <br><br>
            <br>
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="files[]" id="js-upload-files" multiple>
              </div>
              <button type="submit" class="btn btn-sm btn-primary">Subiendo Archivos</button>
            </div>
          </form>

            <br> <br>
           <div class="form-inline" style="display: inline;">
                <p class="form-inline" style="display: inline;">Calle de la incidencia: </p>
                <input class="form-inline" placeholder="Calle de la incidencia" name="calle" type="text" required="true">
            </div>
          <br> <br>

          <!-- MAPS -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2994.8677135458884!2d2.0679089505497026!3d41.35522897916542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sca!2ses!4v1516904707294" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          <br>

          <!-- Upload Finished -->
          <div class="js-upload-finished">
            <h3>Archivos subidos</h3>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Succes</span>image-01.jpg</a>
            
            </div>
          </div>
        </div>
      </div>
    </div> 

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


