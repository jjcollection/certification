<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/bootstrap/css/bootstrap.min.css" />	

        <!-- REVOLUTION SLIDER -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/slider.revolution/css/extralayers.css" />	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/slider.revolution/css/settings.css" />	


        <!-- THEME CSS -->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/css/essentials.css"/>	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/css/layout.css"/>	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/css/thematics-education.css"/>	


        <!-- PAGE LEVEL SCRIPTS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/css/header-1.css"/>	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/css/color_scheme/blue.css"/>	
    </head>

    <!--
            AVAILABLE BODY CLASSES:
            
            smoothscroll 			= create a browser smooth scroll
            enable-animation		= enable WOW animations

            bg-grey					= grey background
            grain-grey				= grey grain background
            grain-blue				= blue grain background
            grain-green				= green grain background
            grain-blue				= blue grain background
            grain-orange			= orange grain background
            grain-yellow			= yellow grain background
            
            boxed 					= boxed layout
            pattern1 ... patern11	= pattern background
            menu-vertical-hide		= hidden, open on click
            
            BACKGROUND IMAGE [together with .boxed class]
            data-background="assets/images/boxed_background/1.jpg"
    -->
    <body class="smoothscroll enable-animation">
        <!-- wrapper -->
        <div id="wrapper">
            <!-- 
                    AVAILABLE HEADER CLASSES

                    Default nav height: 96px
                    .header-md 		= 70px nav height
                    .header-sm 		= 60px nav height

                    .noborder 		= remove bottom border (only with transparent use)
                    .transparent	= transparent header
                    .translucent	= translucent header
                    .sticky			= sticky header
                    .static			= static header
                    .dark			= dark header
                    .bottom			= header on bottom
                    
                    shadow-before-1 = shadow 1 header top
                    shadow-after-1 	= shadow 1 header bottom
                    shadow-before-2 = shadow 2 header top
                    shadow-after-2 	= shadow 2 header bottom
                    shadow-before-3 = shadow 3 header top
                    shadow-after-3 	= shadow 3 header bottom

                    .clearfix		= required for mobile menu, do not remove!

                    Example Usage:  class="clearfix sticky header-sm transparent noborder"
            -->
            <div id="header" class="sticky clearfix">

                <!-- SEARCH HEADER -->
                <div class="search-box over-header">
                    <a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

                    <form action="page-search-result-1.html" method="get">
                        <input type="text" class="form-control" placeholder="SEARCH" />
                    </form>
                </div> 
                <!-- /SEARCH HEADER -->

                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- BUTTONS -->
                        <ul class="pull-right nav nav-pills nav-second-main">

                            <!-- SEARCH -->
                            <li class="search">
                                <a href="javascript:;">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <!-- /SEARCH -->

                        </ul>
                        <!-- /BUTTONS -->


                        <!-- Logo -->
                        <a class="logo pull-left" href="index.html">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/logo_light.png" alt="" />
                        </a>

                        <!-- 
                                Top Nav 
                                
                                AVAILABLE CLASSES:
                                submenu-dark = dark sub menu
                        -->
                        <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                            <nav class="nav-main">

                                <!--
                                        NOTE
                                        
                                        For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                        Direct Link Example: 

                                        <li>
                                                <a href="#">HOME</a>
                                        </li>
                                -->
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="dropdown active"><!-- HOME -->
                                        <a class="dropdown-toggle" href="index.php?r=site/index">
                                            HOME
                                        </a>
                                    </li>
                                    <li class="dropdown"><!-- PAGES -->
                                        <a class="dropdown-toggle" href="#">
                                            PAGES
                                        </a>
                                    </li>
                                    <li class="dropdown"><!-- FEATURES -->
                                        <a class="dropdown-toggle" href="#">
                                            FEATURES
                                        </a>
                                    </li>
                                    <li class="dropdown mega-menu"><!-- PORTFOLIO -->
                                        <a class="dropdown-toggle" href="#">
                                            PORTFOLIO
                                        </a>
                                    </li>
                                    <?php
                                    if (Yii::app()->user->isGuest) {
                                        echo "<li class=\"dropdown\">";
                                        echo CHtml::link('LOGIN', array('site/login'));
                                        echo "</li>";
                                    } else {
                                        echo "<li class=\"dropdown\">";
                                        echo CHtml::link('LOGOUT (' . strtoupper(Yii::app()->user->name . ')'), array('site/logout'));
                                        echo "</li>";
                                    }
                                    ?> 
                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->
            </div>
            <!-- Services -->
            <section>
                <div class="container">
                    <div class="row">
                        <?php echo $content; ?>
                    </div>
                </div>
            </section>
            <!-- / -->
            <!-- /Services -->




            <!-- Parallax -->
            <section class="parallax parallax-1" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/1200x800/34-min.jpg)">
                <div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

                <div class="container">

                    <div class="text-center">
                        <h2 class="size-40 weight-300">Your Business Starts With A Beautiful Website.</h2>
                        <a class="btn btn-default btn-lg" href="#">VIEW COURSES <i class="fa fa-angle-right"></i></a> 
                        &nbsp; OR &nbsp; 
                        <a class="btn btn-3d btn-blue btn-lg" href="#">TAKE A TOUR <i class="fa fa-angle-right"></i></a>
                    </div>

                </div>
            </section>
            <!-- /Parallax -->




            <!-- Courses -->
            <section>
                <div class="container">

                    <!-- H2 -->
                    <div class="heading-title">
                        <h2>Courses</h2>
                        <p class="font-lato size-18">Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/thematics/education/edu1-min.jpg" alt="img" />
                            <h3 class="margin-top-10">Chemical Engineering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                            <a href="#" class="btn btn-default">VIEW COURSE</a>
                        </div>

                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/thematics/education/edu2-min.jpg" alt="img" />
                            <h3 class="margin-top-10">Bachelor of Nursing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                            <a href="#" class="btn btn-default">VIEW COURSE</a>
                        </div>

                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/thematics/education/edu3-min.jpg" alt="img" />
                            <h3 class="margin-top-10">Mental Health</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                            <a href="#" class="btn btn-default">VIEW COURSE</a>
                        </div>

                    </div>

                </div>
            </section>
            <!-- /Courses -->



            <!-- Testimonials -->
            <section class="padding-xxs dark">
                <div class="container">

                    <div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
                        <div class="testimonial">
                            <figure>
                                <img class="rounded" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/people/300x300/11-min.jpg" alt="" />
                            </figure>
                            <div class="testimonial-content nopadding">
                                <p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero.</p>
                                <cite>
                                    Joana Doe
                                    <span>Company Ltd.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonial">
                            <figure>
                                <img class="rounded" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/people/300x300/12-min.jpg" alt="" />
                            </figure>
                            <div class="testimonial-content nopadding">
                                <p class="lead">Quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
                                <cite>
                                    Melissa Doe
                                    <span>Company Ltd.</span>
                                </cite>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /Testimonials -->






            <!-- Overview -->
            <section>
                <div class="container text-center">

                    <div class="row text-left">

                        <div class="col-sm-8">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/images/demo/laptop.png" alt="product image" />
                        </div>

                        <div class="col-sm-4">
                            <h3 class="weight-300">Quick <span>Overview</span></h3>

                            <p>Lorem ipsum dolor sit amet, hinc dolores noluisse at vel, ex quod aperiri scaevola has, cum te sanctus denique. Eu liber docendi petentium has, labore.</p>
                            <p>Etiam falli mentitum id mel, ut mel sumo postulant referrentur. At has minim imperdiet, soluta offendit ocurreret sea an. </p>

                            <hr />

                            <ul class="list-unstyled list-icons">
                                <li><i class="fa fa-check"></i> Nobis nemore epicuri pro ea</li>
                                <li><i class="fa fa-check"></i> Qui dicunt singulis dissentias an</li>
                                <li><i class="fa fa-check"></i> Ea vis diceret constituam</li>
                                <li><i class="fa fa-check"></i> Mei no autem idque integre, sumo facilis</li>
                                <li><i class="fa fa-check"></i> Est quodsi labitur moderatius an</li>
                            </ul>

                        </div>
                    </div>

                </div>
            </section>
            <!-- /Overview -->









            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">


                    <div class="row">

                        <!-- col #1 -->
                        <div class="col-md-8">

                            <h3 class="letter-spacing-1">WHY US?</h3>

                            <!-- Small Description -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat.
                            </p>
                            <h2>(800) 123-4567</h2>
                        </div>
                        <!-- /col #1 -->

                        <!-- col #2 -->
                        <div class="col-md-4">
                            <h3 class="letter-spacing-1">KEEP IN TOUCH</h3>

                            <!-- Newsletter Form -->
                            <p>Subscribe to Our Newsletter to get Important News & Offers</p>

                            <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <!-- /Newsletter Form -->


                        </div>
                        <!-- /col #2 -->

                    </div>


                </div>

                <div class="copyright">
                    <div class="container">
                        <ul class="pull-right nomargin list-inline mobile-block">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li>&bull;</li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        &copy; All Rights Reserved, Company LTD
                    </div>
                </div>

            </footer>
            <!-- /FOOTER -->

        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->

        <script type="text/javascript">var plugin_path = "<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/";</script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/js/scripts.js"></script>

        <!-- STYLESWITCHER - REMOVE -->
        <script async type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/styleswitcher/styleswitcher.js"></script>

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/smarty/assets/js/view/demo.revolution_slider.js"></script>

    </body>
</html>