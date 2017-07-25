<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UAIP</title>

    <meta name="keywords" content="">

    <!--link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css' -->

    <!-- Bootstrap and Font Awesome css -->
    <!-- link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" -->
    <!-- link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" -->
    <link href="../../../../asset_/css/bootstrap.min.css" rel="stylesheet">
    <!-- Css animations  -->
    <link href="../../../../asset_/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="../../../../asset_/css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <link href="../../../../asset_/css/font-awesome.css" rel="stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="../../../../asset_/css/custom.css" rel="stylesheet">

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon"   href="../../../../asset_/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../../../../asset_/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../../../../asset_/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../../../../asset_/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../../../asset_/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../../../../asset_/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../../../../asset_/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../../../../asset_/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../../../../asset_/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="../../../../asset_/css/owl.carousel.css" rel="stylesheet">
    <link href="../../../../asset_/css/owl.theme.css" rel="stylesheet">


</head>

<body>

    <div id="all">

        <header>

            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">
                                <?php
                                foreach ($footer as $data)
                                {
                                    if($data->titulo=='titulo_portal')
                                    {
                                    ?>
                                     <?php echo $data->contenido; ?>
                                    <?php
                                    }
                                }
                                ?>                                
                            </p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container nav_sup">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index">
                                <img src="../../../../assets/images/avatars/19920162344logo.png" alt="Universal logo" class="hidden-xs hidden-sm" width="50px">
                                <img src="../../../../asset_/img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <?php
                                foreach($menu as $menus){
                                ?>
                                    <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle data" 
                                    id="<?php echo $menus->url_menu; ?>" data-toggle="dropdown">
                                    <?php echo $menus->nombre_menu; ?><b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="../../../../assets/images/avatars/<?php echo $menus->icon_menu; ?>" class="img-responsive hidden-xs" width="50%" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>MENU</h5>
                                                        <ul> 
                                                        <?php
                                                        foreach ($submenu as $submenus) {
                                                            if($menus->id_menu == $submenus->id_menu)
                                                            {
                                                                ?>
                                                                <li>
                                                                <a href="#" class="data" id="<?php echo $submenus->url_submenu ."/".$submenus->id_submenu ?>">
                                                                    <b><i class="<?php echo $submenus->icon_menu ?>" id="icons"></i></b>
                                                                    <?php echo $submenus->nombre_submenu ?>
                                                                </a>
                                                                </li>
                                                                <?php
                                                            }                                                            
                                                        }
                                                        ?>                                                       
                                                                                                                        
                                                        </ul>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="component"></section>

        <footer id="footer" class="fonts">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <?php
                    foreach ($footer as $data) {
                        if($data->titulo=='informacion_footer'){
                            ?>
                                <h4><?php echo $data->subtitulo; ?></h4>
                                <p style="padding-right:50px;"><?php echo $data->contenido; ?></p>
                            <?php
                        }
                    }
                    ?>                       
                    </div>

                    <div class="col-md-4">
                        <?php
                            foreach ($footer as $data) {
                                if($data->titulo=='direccion_footer'){
                                    ?>
                                        <h4><?php echo $data->subtitulo; ?></h4>
                                        <p style="padding-right:50px;"><?php echo $data->contenido; ?></p>
                                    <?php
                                }
                            }
                        ?>   
                    </div>
                    <div class="col-md-4">
                        <h4>REDES SOCIALES</h4>
                        <div class="social-links">
                        <?php
                            foreach ($footer as $data) {
                                if($data->titulo=='redes_footer')
                                {
                                ?>
                                    <a href="<?php echo $data->referencia; ?>" target="_blank" title="<?php echo $data->subtitulo; ?>"><img src="../../../../assets/images/avatars/<?php echo $data->imagen; ?>" width="50px"></a>
                                <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container copy">
            <div class="row">
                Copyright © 2017 ALCALDIA MUNICIPAL CIUDAD PUERTO EL TRIUNFO

            </div>
        </div>


        <!-- /#copyright -->
        <!-- *** COPYRIGHT END *** -->
    </div>

    <script src="../../../../asset_/js/jquery-1.11.0.min.js"></script>
    <script src="../../../../asset_/js/bootstrap.min.js"></script>
    <script src="../../../../asset_/js/jquery.cookie.js"></script>
    <script src="../../../../asset_/js/waypoints.min.js"></script>    
    <script src="../../../../asset_/js/jquery.counterup.min.js"></script>
    <script src="../../../../asset_/js/jquery.parallax-1.1.3.js"></script>
    <script src="../../../../asset_/js/front.js"></script>
    <script src="../../../../asset_/js/owl.carousel.min.js"></script>

    
    <script>
        $(document).ready(function(){
            $(".component").load('http://www.uaippuertoeltriunfo.com.sv/sifp/index.php/portal/uaip/Cindex/carrusel');
            
            $("a.data").click(function(){
                var url = $(this).attr('id');                                 
                
                $(".component").load("http://www.uaippuertoeltriunfo.com.sv/sifp/index.php/portal/"+url);      
            });
        });
    </script>
</body>
</html>

<style>
.copy{
    width: 100%;
    text-align: center;
    background: #555;
    color: white;

}
#icons{
    color: black;
    font-size: 1.5em;
}
.navbar {
    background-color: #9AC835;
}
.fonts{
    font:normal normal 300 18px/2em 'Fira Sans';
}
#footer{
    

}
</style>