<!doctype html>


<html lang="en-gb" class="no-js">
<head>
    <meta charset="utf-8">
    <title><?=  APP_NAME ?></title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--styles -->
    <link href="public/frontoffice/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontoffice/css/font-awesome.css" rel="stylesheet">
    <link href="public/frontoffice/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="public/frontoffice/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="public/frontoffice/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="public/frontoffice/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/frontoffice/css/animate.css" />
    <link rel="stylesheet" href="public/frontoffice/css/etlinefont.css">
    <link href="public/frontoffice/css/style.css" type="text/css"  rel="stylesheet"/>


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="public/frontoffice/js/html5shiv.js"></script>
    <script src="public/frontoffice/js/respond.min.js"></script>
    <![endif]-->

<body  data-spy="scroll" data-target="#main-menu">


<!--Start Page loader -->
<div id="pageloader">
    <div class="loader">
        <img src="public/frontoffice/images/progress.gif" alt='loader' />
    </div>
</div>
<!--End Page loader -->


<!--Start Navigation-->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Start Logo -->
                <div class="logo-nav">
                    <a href="public/frontoffice/index.html">
                        <img src="public/frontoffice/images/logo.png" alt="Company logo" />
                    </a>
                </div>
                <!--End Logo -->
                <div class="clear-toggle"></div>
                <div id="main-menu" class="collapse scroll navbar-right">
                    <ul class="nav">

                        <li class="active"> <a href="#home">Inicio </a> </li>

                        <li> <a href="#about">Sobre</a> </li>

                        <li> <a href="#team">Equipa</a> </li>

                        <li> <a href="#contact">Contacto</a> </li>

                        <li> <a href="router.php?c=login&a=index">Login</a> </li>

                    </ul>
                </div><!-- end main-menu -->
            </div>
        </div>
    </div>
</header>
<!--End Navigation-->

<!-- Start Slider  -->
<section id="home" class="home">
    <div class="slider-overlay"></div>
    <div class="flexslider">
        <ul class="slides scroll">
            <li class="first">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big">Fatura + </div>
                        <div class="small">Trabalho da disciplina de Programação Web - Servidor</div>
                        <a href="router.php?c=login&a=index" class=" middle btn btn-white">Fazer login</a>
                    </div>
                </div>
                <img src="public/frontoffice/images/slider/1.jpg" alt="">
            </li>

            <li class="secondary">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big">Fatura +</div>
                        <div class="small">Trabalho realizado por: António Figueiras e Gonçalo Vital</div>
                        <a href="#team" class=" middle btn btn-white">Ver equipa</a>
                    </div>
                </div>
                <img src="public/frontoffice/images/slider/2.jpg" alt="">
            </li>

            <li class="third">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big">Fatura +</div>
                        <div class="small">Contacta-nos para mais dúvidas!</div>
                        <a href="#contact" class="middle btn btn-white">Contactar</a>
                    </div>
                </div>
                <img src="public/frontoffice/images/slider/3.jpg" alt="">
            </li>
        </ul>
    </div>
</section>
<!-- End Slider  -->


<!--Start Features-->
<section  id="about" class="section">
    <div class="container">
        <div class="row">

            <!-- Features Icon-->
            <div class="col-md-4">
                <div class="features-icon-box">

                    <div class="features-icon">
                        <i class="fa fa-leaf"></i>
                    </div>

                    <div class="features-info">
                        <h4>Design Limpo e Moderno</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Features Icon-->
            <div class="col-md-4">
                <div class="features-icon-box">

                    <div class="features-icon">
                        <i class="fa fa-paper-plane"></i>
                    </div>

                    <div class="features-info">
                        <h4>Illustration</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Features Icon-->
            <div class="col-md-4">
                <div class="features-icon-box">

                    <div class="features-icon">
                        <i class="fa fa-life-saver"></i>
                    </div>

                    <div class="features-info">
                        <h4>App Development</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Features Icon-->
            <div class="col-md-4">
                <div class="features-icon-box">

                    <div class="features-icon">
                        <i class="fa fa-paint-brush"></i>
                    </div>

                    <div class="features-info">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Features Icon-->
            <div class="col-md-4">
                <div class="features-icon-box">

                    <div class="features-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>

                    <div class="features-info">
                        <h4>Digital Design</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Features Icon-->
            <div class="col-md-4">
                <div class="features-icon-box">

                    <div class="features-icon">
                        <i class="fa fa-gift"></i>
                    </div>

                    <div class="features-info">
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                    </div>
                </div>
            </div>


        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End Features-->


<!-- Start Facts-->
<section id="facts" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-happy"></i></span>
                <h3>5</h3>
                <span>Clientes Felizes</span>
            </div>
            <!-- End Item-->

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-document"></i></span>
                <h3>30</h3>
                <span>Faturas</span>
            </div>
            <!-- End Item-->

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-profile-male"></i></span>
                <h3>2</h3>
                <span>Funcionários</span>
            </div>
            <!-- End Item-->

            <!-- Start Item-->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-trophy"></i></span>
                <h3>20</h3>
                <span>Nota do Trabalho</span>
            </div>
            <!-- End Item-->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End Facts-->

<!--Start Team-->
<section id="team" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Team</h2>
            </div>

        </div>

        <!-- Team -->
        <div class="team-items team-carousel">
            <!-- Team Member #1 -->
            <div class="item">
                <img src="public/frontoffice/images/team/team1.jpg" alt=""  />
                <h4>António Figueiras</h4>
                <h5>Administrador</h5>
                <p>Tesp-PSI<br>Nº2211864</p>

                <div class="socials">
                    <ul>
                        <li><a class="facebook" href="#"><i class="fa fa-github"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Member -->

            <!-- Team Member #2 -->
            <div class="item">
                <div class="socials">
                </div>
            </div>
            <!-- End Member -->

            <!-- Team Member #3 -->
            <div class="item">
                <img src="public/frontoffice/images/team/team2.jpg" alt=""  />
                <h4>Gonçalo Vital</h4>
                <h5>Administrador</h5>
                <p>Tesp-PSI<br>Nº2211864</p>

                <div class="socials">
                    <ul>
                        <li><a class="facebook" href="#"><i class="fa fa-github"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Member -->
        </div>
        <!-- End Team -->
    </div>
    <!-- End Content -->
</section>
<!--End Team-->


<!--Start Skills-->
<section  id="skills" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Linguagens Utilizadas</h2>
            </div>

            <!--Skill #1-->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart " data-percent="25">
                        <span class="percent"></span>
                    </span>
                <h4>PHP</h4>
                <p></p>
            </div>

            <!--Skill #2-->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart" data-percent="25">
                        <span class="percent"></span>
                    </span>
                <h4>HTML/CSS</h4>
                <p></p>
            </div>

            <!--Skill #3-->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart " data-percent="25">
                        <span class="percent"></span>
                    </span>
                <h4>SQL</h4>
                <p></p>
            </div>

            <!--Skill #4-->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart" data-percent="25">
                        <span class="percent"></span>
                    </span>
                <h4>Javascript</h4>
                <p></p>
            </div>


        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End Skills-->


<!--Start Services-->
<section id="services" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Serviços</h2>
            </div>

            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-basket"></i> </div>
                    <div class="services-desc">
                        <h4>Development</h4>
                        <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-shield"></i> </div>
                    <div class="services-desc">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-hotairballoon"></i> </div>
                    <div class="services-desc">
                        <h4>SEO</h4>
                        <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

            <!--Services Item -->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-global"></i> </div>
                    <div class="services-desc">
                        <h4>Graphic Design</h4>
                        <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-target"></i> </div>
                    <div class="services-desc">
                        <h4>Content Writing</h4>
                        <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

            <!--Services Item -->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <i class="icon-aperture"></i> </div>
                    <div class="services-desc">
                        <h4>HTML Basic</h4>
                        <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!--End Services-->


<!--Start Why Choose us-->
<section id="why-choose" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Why Choose us</h2>
            </div>

            <!--start tabs-->
            <div class="col-md-6">
                <div class="tabs tabs-main">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#one" data-toggle="tab">Design</a></li>
                        <li><a href="#two" data-toggle="tab">Company</a></li>
                        <li><a href="#three" data-toggle="tab">Support</a></li>
                    </ul>
                    <div class="tab-content">

                        <!--Start Tab Item #1 -->
                        <div class="tab-pane in active" id="one">
                            <p>
                                Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
                            </p>
                        </div>
                        <!-- End Tab -->

                        <!--Start Tab Item #2 -->
                        <div class="tab-pane" id="two">
                            <p>
                                Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
                            </p>
                        </div>
                        <!-- End Tab -->

                        <!--Start Tab Item #3 -->
                        <div class="tab-pane" id="three">
                            <p>
                                Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
                            </p>
                        </div>
                        <!-- End Tab -->

                    </div>
                </div>
            </div>
            <!-- End Tabs-->

            <!--Start Accordion-->
            <div class="col-md-6">
                <div class="panel-group accordion-main" id="accordion">
                    <!--About accordion #1-->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse"
                             data-parent="#accordion" data-target="#collapseOne">
                            <h6 class="panel-title accordion-toggle">
                                Photography
                            </h6>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                                </p>

                            </div>
                        </div>
                    </div>

                    <!--About accordion #2-->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse"
                             data-parent="#accordion" data-target="#collapseTwo">
                            <h6 class="panel-title accordion-toggle">
                                Web Designing
                            </h6>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--About accordion #3-->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse"
                             data-parent="#accordion" data-target="#collapseThree">
                            <h6 class="panel-title accordion-toggle">
                                Web Development
                            </h6>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                                </p>

                            </div>
                        </div>
                    </div>

                    <!--About accordion #4-->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse"
                             data-parent="#accordion" data-target="#collapseFour">
                            <h6 class="panel-title accordion-toggle">
                                Responsive Design
                            </h6>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Accordion-->

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!--End Why Choose us-->

<!--Start Contact-->
<section id="contact" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Contact</h2>
            </div>
        </div>

        <!--Start contact form-->
        <div class="col-md-8 col-md-offset-2 contact-form">

            <div class="contact-info text-center">
                <p>910 123 456</p>
                <p>Leiria, Portugal </p>
                <p>faturaplus@gmail.com </p>
            </div>

            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" id="name" placeholder="Full Name" type="text">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="email" placeholder="Your Email" type="email">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="subject" placeholder="Subject" type="text">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="message" rows="7" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-green">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
        <!--End contact form-->

    </div> <!-- /.container-->
</section>
<!--End Contact-->


<!--Start Footer-->
<footer>
    <div class="container">
        <div class="row">
            <!--Start copyright-->
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="copyright"><p>Copyright © 2022 All Rights reserved by: <a href="http://localhost/fatura/"> <?=  APP_NAME ?></a>
                    </p></div>
            </div>
            <!--End copyright-->

            <!--start social icons-->
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--End social icons-->
        </div> <!-- /.row-->
    </div> <!-- /.container-->
</footer>
<!--End Footer-->

<a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

<!--Plugins-->
<script type="text/javascript" src="public/frontoffice/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="public/frontoffice/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/frontoffice/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="public/frontoffice/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="public/frontoffice/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="public/frontoffice/js/easing.js"></script>
<script type="text/javascript" src="public/frontoffice/js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="public/frontoffice/js/jquery.appear.js"></script>
<script type="text/javascript" src="public/frontoffice/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="public/frontoffice/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="public/frontoffice/js/custom.js"></script>

</body>
</html>

