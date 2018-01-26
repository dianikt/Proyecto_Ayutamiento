<?php 
session_start();
ob_start();
?>
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

             <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-9">
                            <img src="/assets/images/xat.png"/>
                             </div>
                        </div>
                    </div>
                </div>

            <!--Formulario de registro-->
            <section id="home" class="home bg-black fix">              
                <div class="container" style="margin-left:180px;">              
                    <div class="row" style="margin-top: -200px;">
                            <img src="assets/images/XAT.jpg" height="460px;" width="450px;" style=" border: 5px solid coral; margin-top: 10px;"/>         

                        <div class="col-md-9 col-xs-9" style="margin-top: -310px; margin-left: 100px;">
                            <div class="well well-sm" style="border: 5px solid coral;">
                            <?php
                            function formulario(){
                                echo '<div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 style="text-align: center;" class="panel-title">  Introduce nickname</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form accept-charset="UTF-8" role="form" action="sesionxat.php" method="post">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="nickname" name="nick" type="text" required="true">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="password" name="code" type="text" value="" required="true">
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                                    </label>
                                                </div>
                                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                            </fieldset>
                                            </form>
                                        </div>
                                      </div>';
                            }

                            if(!isset($_POST["code"])){
                                formulario();
                            }else{
                                if ((string)$_POST["code"] == (string)"1234"){
                                    $_SESSION["nick"] = $_POST["nick"];
                                    header("Location:xat.php");
                                }else{
                                    echo ('<p class="error">Codigo no correcto</p>');
                                    formulario();
                                }
                            }
                            ?>                                                                                
                            </div>
                        </div>
                    </div>
                </div>                  
            </section> 

                    
                <div class="main_footer fix bg-mega text-center p-top-20 p-bottom-20 m-top-1">
                    <div class="col-md-12" >
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
    <?php ob_end_flush();?>
</html>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
