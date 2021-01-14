<?php

session_start();

if(isset($_GET["user"])){

    if($_GET["user"] == "2"){

        $_SESSION['login'] = 0;
        ?>

    <script type="text/javascript">

    document.location.href= "index.php";

    </script>

    <?php
    
    }

}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Início - Genesis</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/misc.css">
    <link rel="stylesheet" href="css/blue-scheme.css">

    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="js/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.php">Início</a></li>
            <li><a href="portfolio.html">Projetos</a></li>
            <li><a href="contact.html">Contato</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <!-- /.main_menu -->
    </div>
    <!-- /.responsive_menu -->

    <header class="site-header clearfix">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="pull-left logo">
                        <a href="index.php">
                            <img src="images/logo-2.png" alt="Medigo by templatemo">
                        </a>
                    </div>
                    <!-- /.logo -->

                    <div class="main-navigation pull-right">

                        <nav class="main-nav visible-md visible-lg">
                            <ul class="sf-menu">
                                <li class="active"><a href="index.php">Início</a></li>
                                <li><a href="portfolio.html">Projetos</a></li>
                                <li><a href="contact.html">Contato</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                            <!-- /.sf-menu -->
                        </nav>
                        <!-- /.main-nav -->

                        <!-- This one in here is responsive menu for tablet and mobiles -->
                        <div class="responsive-navigation visible-sm visible-xs">
                            <a href="#nogo" class="menu-toggle-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <!-- /responsive_navigation -->

                    </div>
                    <!-- /.main-navigation -->

                </div>
                <!-- /.col-md-12 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </header>
    <!-- /.site-header -->

    <section id="homeIntro" class="parallax first-widget">
        <div class="parallax-overlay">
            <div class="container home-intro-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Conheça Genesis</h2>
                        <p>Uma comunidade voltada para a Tecnologia Assistiva e seus projetos independentes.</p>
                        <a href="#meio" class="large-button white-color">Saiba mais</i></a>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.parallax-overlay -->
    </section>
    <!-- /#homeIntro -->

    <section id="meio">
        <div style="padding-top: 50px;">

        </div>
    </section>

    <section class="light-content services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-mobile-phone fa-2x"></i>
                        </div>
                        <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Responsivo</h3>
                            <p>Acesse o website do seu computador ou dispositivo móvel.</p>
                        </div>
                        <!-- /.service-cnt-wrap -->
                    </div>
                    <!-- /.service-box-wrap -->
                </div>
                <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-code fa-2x"></i>
                        </div>
                        <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Desenvolvedores</h3>
                            <p>Buscamos divulgar gratuitamente projetos de tecnologia assistiva de desenvolvedores.</p>
                        </div>
                        <!-- /.service-cnt-wrap -->
                    </div>
                    <!-- /.service-box-wrap -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-eye-slash fa-2x"></i>
                        </div>
                        <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Pessoa com Deficiência</h3>
                            <p>Ao incentivar desenvolvedores, o número de projetos que visam auxiliar deficientes aumenta.</p>
                        </div>
                        <!-- /.service-cnt-wrap -->
                    </div>
                    <!-- /.service-box-wrap -->
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.services -->

    <section class="dark-content portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Conheça alguns projetos:</h2>
                        <p class="section-desc">Todos criados com o intuito de auxiliar pessoas com deficiência.</p>
                    </div>
                    <!-- /.section-header -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
            <div class="item">
            <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Engenharia</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow3.html">Dando Asas</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/asasImgs/asas4.jpg" title="Projeto Dando Asas">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/asasImgs/asas4.jpg" alt="Awesome Theme">
                    </div>
            </div>
            <!-- /.item -->
            <div class="item">
            <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Engenharia</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow.html">Cadeira de Rodas Inteligente</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/cadeiraImgs/cadeira2.jpg" title="Cadeira de Rodas Inteligente">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/cadeiraImgs/cadeiraPort.png" alt="cadeira">
                    </div>
            </div>
            <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Engenharia</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow2.html">Pranchas CAA</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/pranchasImgs/prancha3.jpg" title="Pranchas CAA">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/pranchasImgs/prancha3.jpg" alt="Compass Template">
                    </div>
                </div>
            </div>
            <!-- /.item -->
            <div class="item">
            <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Engenharia</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow4.html">Mapa Tátil Pé-Yara</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/mapaImgs/mapa1.jpeg" title="Mapa Tátil Pé-Yara">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/mapaImgs/mapa1.jpeg" alt="Volton Personal Site">
                    </div>
            </div>
            <!-- /.item -->
            <div class="item">
            <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Website</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow5.html">MeViro</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/meviroImgs/viro2.jpg" title="MeViro.org">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/meviroImgs/viro2.jpg" alt="Rectangle Design">
                    </div>
            </div>
            <!-- /.item -->
            <div class="item">
            <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Engenharia</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow6.html">Equipamento para escrita</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/escritaImgs/escrita4.jpg" title="Equipamento para escrita">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- /.item -->
        </div>
        <!-- /#owl-demo -->
    </section>
    <!-- /.portfolio-holder -->

    <section class="testimonials-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bxslider">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Mary Pat Radabaugh</span>
                                <p class="testimonial-description">Para as pessoas sem deficiência, a tecnologia torna as coisas mais fáceis. Para as pessoas com deficiência, a tecnologia torna as coisas possíveis.</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Melvin Kransberg</span>
                                <p class="testimonial-description">A tecnologia não é boa nem é má, mas também não é neutra.</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Letícia Butterfield</span>
                                <p class="testimonial-description">Inclusão é um direito daqueles que precisam, e incluir é um dever de todos.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.bxslider -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.testimonials-widget -->

    <section class="light-content our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Meet our happy staff</h2>
                        <p class="section-desc">Medigo is the automated way to keep track of what everyone is working on.</p>
                    </div>
                    <!-- /.section-header -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="team-members">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="thumb-post">
                                <img src="images/includes/member1.jpg" alt="">
                                <span class="member-role">Marketing Manager</span>
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Amy Groovy</h4>
                                <p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="thumb-post">
                                <img src="images/includes/member2.jpg" alt="">
                                <span class="member-role">Web Developer</span>
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Candy Sharp</h4>
                                <p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="thumb-post">
                                <img src="images/includes/member3.jpg" alt="">
                                <span class="member-role">Graphic Designer</span>
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Linda Master</h4>
                                <p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
                            </div>
                        </div>
                        <!-- /.team-member -->
                    </div>
                    <!-- /.col-md-4 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.team-members -->
    </section>
    <!-- /.our-team -->

    <section id="blogPosts" class="parallax">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h2 class="section-title">Faça parte dessa crescente comunidade!</h2>
                            <h3 class="section-desc" style="color: white; line-height: 30px">A Genesis é uma comunidade onde você pode explorar projetos, invistir ou publicar sua própria criação. <br><br> Você quer conhecer novos projetos e ter novas inspirações? Deseja investir em um projeto revolucionário? Você tem um projeto e quer mostrar para o mundo? <a href="register.php">Cadastre-se</a> gratuitamente agora.</h3>
                        </div>
                        <!-- /.section-header -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.parallax-overlay -->
    </section>
    <!-- /#blogPosts -->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="footer-nav clearfix">
                        <ul class="footer-menu">
                            <li><a href="index.php">Início</a></li>
                            <li><a href="portfolio.html">Projetos</a></li>
                            <li><a href="contact.html">Contato</a></li>
                        </ul>
                        <!-- /.footer-menu -->
                    </nav>
                    <!-- /.footer-nav -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright-text">Copyright &copy; 2021 Genesis</p>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.site-footer -->

    <!-- Scripts -->
    <script src="js/min/plugins.min.js"></script>
    <script src="js/min/medigo-custom.min.js"></script>

</body>

</html>