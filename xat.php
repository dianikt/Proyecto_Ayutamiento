
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
    <?php
        session_start();
        $nick = $_SESSION["nick"];
        echo ('<p id="nick" name="'.$nick.'" hidden="true"></p>');
    ?>
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
                <div class="container" ">              
                    <div class="row" ">            
                        <div class="col-md-4 col-xs-6" style="margin-top: -150px">                  
                            <div class="well"> 
                                <div style="text-align: center;"><h3>Usuarios conectados<h3></div>                        
                                <a href="?msg=15" class="chatperson">
                                    <span class="chatimg">
                                        <img src="http://via.placeholder.com/50x50?text=A" alt="" />
                                    </span>

                                    <div class="namechat">
                                        <div class="pname">Andrea</div> 
                                    </div>
                                </a>

                                <a href="?msg=16" class="chatperson">
                                    <span class="chatimg">
                                        <img src="http://via.placeholder.com/50x50?text=B" alt="" />
                                    </span>
                                    <div class="namechat">
                                        <div class="pname">Berto</div>
                                    </div>
                                </a>

                                <a href="?msg=17" class="chatperson">
                                    <span class="chatimg">
                                        <img src="http://via.placeholder.com/50x50?text=C" alt="" />
                                    </span>
                                    <div class="namechat">
                                        <div class="pname">Carol</div> 
                                    </div>
                                </a>

                                 <a href="?msg=18" class="chatperson">
                                    <span class="chatimg">
                                        <img src="http://via.placeholder.com/50x50?text=D" alt="" />
                                    </span>
                                    <div class="namechat">
                                        <div class="pname">Diana</div> 
                                    </div>
                                </a>
                            </div>
                        </div>
                            
                        <div  class="col-md-7 col-xs-6" style="margin-top: -352px; margin-left:400px;">
                            <div class="chatbody">
                                <table class="table" id="xat">
                                    <tr>
                                      <td><img src="http://via.placeholder.com/50x50?text=C" /></td>
                                      <td><h3>Bienvenido al chat del Ajuntament de Cornella</h3></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/50x50?text=C"/>Carol</td>
                                        <td>Hola que tal, habeís visto la plaza del pilar que bonita?</td>
                                        <td>16:05</td>
                                    </tr>

                                </table>

                            </div>

                            <div class="row">
                                <div class="col-xs-9">
                                    <input type="text" placeholder="Escribir mensaje..." class="form-control" id="texto"/>
                                </div>
                                <div class="col-xs-3">
                                    <button class="btn btn-info btn-block" onclick="nuevoMensaje()">Send</button>
                                </div>
                            </div>
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
</html>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<script type="text/javascript">
        function nuevoMensaje(){
            var nick = $('#nick').attr('name');
            var inicial = nick.slice(0, 1);

            var mensaje = $('#texto').val();

            var tiempo = new Date();
            var hora = tiempo.getHours();
            var minuto = tiempo.getMinutes();

            var tr = "<tr><td><img src='http://via.placeholder.com/50x50?text="+inicial+"' />"+nick+"</td><td>"+mensaje+"</td><td>"+hora+":"+minuto+"</td></tr>";

            $('#xat tr:last').after(tr);
          
        }

    </script>