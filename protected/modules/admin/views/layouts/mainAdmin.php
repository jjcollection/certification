<!doctype html>
<html lang="en-US">
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
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/plugins/bootstrap/css/bootstrap.min.css" />	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/css/essentials.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/css/layout.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/css/color_scheme/green.css"/>	
        <?php echo Yii::app()->bootstrap->registerBootstrap(); ?>
    </head>
    <body>
        <div id="wrapper" class="clearfix">
            <aside id="aside">
                <nav id="sideNav"><!-- MAIN MENU -->
                    <ul class="nav nav-list">
                        <li class="active"><!-- dashboard -->
                            <a class="dashboard" href="index.php?r=site"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="#">
                                                        <i class="fa fa-menu-arrow pull-right"></i>
                                                        <i class="main-icon fa fa-bar-chart-o"></i> <span>Admin</span>
                                                    </a>
                                                    <ul> submenus 
                                                        <li><a href="index.php?r=admin/pelaksanaan/index">Pelaksanaan</a></li>
                                                        <li><a href="graphs-morris.html">Data Mahasiswa</a></li>
                                                        <li><a href="graphs-inline.html">Data Dosen</a></li>
                                                        <li><a href="graphs-chartjs.html">Nilai</a></li>
                                                    </ul>
                                                </li>-->
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-pencil-square-o"></i> <span>Dosen</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="index.php?r=admin/profilDosen/create">Tambah Dosen</a></li>
                                <li><a href="index.php?r=admin/profilDosen/admin">Kelola Dosen</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-pencil-square-o"></i> <span>Mahasiswa</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="index.php?r=admin/profilMahasiswa/create">Tambah Mahasiswa</a></li>
                                <li><a href="index.php?r=admin/profilMahasiswa/admin">Kelola Mahasiswa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?r=admin/keahlian/admin">
                                <i class="main-icon fa fa-envelope"></i><span>Keahlian</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-calendar"></i> <span>Pelaksanaan</span>
                            </a>
                            <ul><!-- submenus -->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-menu-arrow pull-right"></i>
                                        Periode
                                    </a>
                                    <ul>
                                        <li><a href="index.php?r=admin/periodePelaksanaan/create">Tambah Periode</a></li>
                                        <li><a href="index.php?r=admin/periodePelaksanaan/admin">Kelola Period</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-menu-arrow pull-right"></i>
                                        Jadwal
                                    </a>
                                    <ul>
                                        <li><a href="index.php?r=admin/pelaksanaan/admin">Kelola Jadwal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- SECOND MAIN LIST -->
                    <h3>Laporan</h3>
                    <ul class="nav nav-list">
                        <li>
                            <a href="index.php?r=admin/laporan/laporanDosen">
                                <i class="main-icon fa fa-link"></i>
                                <span class="label label-danger pull-left">Dosen</span> 
                            </a>
                        </li>
                        <li>
                            <a href="index.php?r=admin/laporan/laporanMahasiswa">
                                <i class="main-icon fa fa-link"></i>
                                <span class="label label-danger pull-left">Mahasiswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?r=admin/laporan/laporanNilai">
                                <i class="main-icon fa fa-link"></i>
                                <span class="label label-danger pull-left">Nilai</span> 
                            </a>
                        </li>
                    </ul>
                </nav>
                <span id="asidebg"><!-- aside fixed background --></span>
            </aside>
            <!-- /ASIDE -->
            <!-- HEADER -->
            <header id="header">
                <!-- Mobile Button -->
                <button id="mobileMenuBtn"></button>
                <!-- Logo -->
                <span class="logo pull-left">
                    <img src="assets/images/logo_light.png" alt="SERTIFIKASI STTI" height="35" />
                </span>
                <nav>
                    <!-- OPTIONS LIST -->
                    <ul class="nav pull-right">
                        <!-- USER OPTIONS -->
                        <li class="dropdown pull-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img class="user-avatar" alt="" src="assets/images/noavatar.jpg" height="34" /> 
                                <span class="user-name">
                                    <span class="hidden-xs">
                                        <?= Yii::app()->user->name ?>
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </span>
                            </a>
                            <ul class="dropdown-menu hold-on-click">
                                <li><!-- my calendar -->
                                    <a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
                                </li>
                                <li><!-- my inbox -->
                                    <a href="#"><i class="fa fa-envelope"></i> Inbox
                                        <span class="pull-right label label-default">0</span>
                                    </a>
                                </li>
                                <li><!-- settings -->
                                    <a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><!-- lockscreen -->
                                    <a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
                                </li>
                                <li><!-- logout -->

                                    <?php echo CHtml::link(' <i class="fa fa-power-off"></i> Logout', array('/site/logout'), array('visible' => !Yii::app()->user->isGuest)) ?>
                                </li>
                            </ul>
                        </li>
                        <!-- /USER OPTIONS -->
                    </ul>
                    <!-- /OPTIONS LIST -->
                </nav>
            </header>
            <!-- /HEADER -->
            <section id="middle">
                <div id="panel-1" class="panel panel-default">
                    <div class="panel-heading">
                        <span class="title elipsis">
                            <?php if (isset($this->breadcrumbs)): ?>
                                <?php
                                $this->widget('zii.widgets.CBreadcrumbs', array(
                                    'links' => $this->breadcrumbs,
                                ));
                                ?><!-- breadcrumbs -->
                            <?php endif ?>

                        </span>
                    </div>
                    <!-- panel content -->
                </div>
                <div id="content" class="dashboard padding-20">
                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <span class="title elipsis">
                                <strong>OPERATION</strong> <!-- panel title -->
                                <small class="size-12 weight-300 text-mutted hidden-xs">SERTIFIKASI STT INDONESIA TANJUNGPINANG</small>
                            </span>
                            <!-- right options -->
                            <ul class="options pull-right list-inline">
                                <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
                                <li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
                            </ul>
                            <!-- /right options -->
                        </div>
                        <!-- panel content -->
                        <div class="panel-body">
                            <?php
                            if (Yii::app()->user->getLevel() == 1) {
                                $this->widget('ext.bootstrap.widgets.BootMenu', array(
                                    'type' => 'tabs',
                                    'items' => $this->menu,
                                ));
                            }
                            ?>

                        </div>
                    </div>
                    <!-- /PANEL -->
                    <div class="row">

                        <div class="col-md-12">

                            <!-- 
                                    PANEL CLASSES:
                                            panel-default
                                            panel-danger
                                            panel-warning
                                            panel-info
                                            panel-success

                                    INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
                                                    All pannels should have an unique ID or the panel collapse status will not be stored!
                            -->
                            <div id="panel-1" class="panel panel-info">
                                <div class="panel-heading">
                                    <span class="title elipsis">
                                        <strong><?php echo CHtml::encode($this->pageTitle); ?></strong> <!-- panel title -->
                                    </span>
                                </div>
                                <!-- panel content -->
                                <div class="panel-body">

                                    <!-- tabs content -->
                                    <div class="tab-content transparent">

                                        <div id="ttab1_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->

                                            <?php echo $content; ?>

                                        </div><!-- /TAB 1 CONTENT -->



                                    </div>
                                    <!-- /tabs content -->

                                </div>
                                <!-- /panel content -->

                            </div>
                            <!-- /PANEL -->

                        </div>

                        <div class="col-md-6">

                            <!-- 
                                    PANEL CLASSES:
                                            panel-default
                                            panel-danger
                                            panel-warning
                                            panel-info
                                            panel-success

                                    INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
                                                    All pannels should have an unique ID or the panel collapse status will not be stored!
                            -->

                            <!-- /PANEL -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- /MIDDLE -->

        </div>
        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = "<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/plugins/";</script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/js/app.js"></script>

        <!-- PAGE LEVEL SCRIPT -->
        <script type="text/javascript">
            /* 
             Toastr Notification On Load 
             
             TYPE:
             primary
             info
             error
             success
             warning
             
             POSITION
             top-right
             top-left
             top-center
             top-full-width
             bottom-right
             bottom-left
             bottom-center
             bottom-full-width
             
             false = click link (example: "http://www.stepofweb.com")
             */
            _toastr("Welcome <?= Yii::app()->user->name ?>, di Website Sertifikasi", "top-right", "success", false);




            /** SALES CHART
             ******************************************* **/
            loadScript(plugin_path + "chart.flot/jquery.flot.min.js", function () {
                loadScript(plugin_path + "chart.flot/jquery.flot.resize.min.js", function () {
                    loadScript(plugin_path + "chart.flot/jquery.flot.time.min.js", function () {
                        loadScript(plugin_path + "chart.flot/jquery.flot.fillbetween.min.js", function () {
                            loadScript(plugin_path + "chart.flot/jquery.flot.orderBars.min.js", function () {
                                loadScript(plugin_path + "chart.flot/jquery.flot.pie.min.js", function () {
                                    loadScript(plugin_path + "chart.flot/jquery.flot.tooltip.min.js", function () {

                                        if (jQuery("#flot-sales").length > 0) {

                                            /* DEFAULTS FLOT COLORS */
                                            var $color_border_color = "#eaeaea", /* light gray 	*/
                                                    $color_second = "#6595b4";		/* blue      	*/


                                            var d = [
                                                [1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 4568], [1198450800000, 686], [1198537200000, 4122], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 544], [1199574000000, 500], [1199660400000, 476], [1199746800000, 462], [1199833200000, 500], [1199919600000, 700], [1200006000000, 750], [1200092400000, 600], [1200178800000, 500], [1200265200000, 900], [1200351600000, 930], [1200438000000, 1200], [1200524400000, 980], [1200610800000, 950], [1200697200000, 900], [1200783600000, 1000], [1200870000000, 1050], [1200956400000, 1150], [1201042800000, 1100], [1201129200000, 1200], [1201215600000, 1300], [1201302000000, 1700], [1201388400000, 1450], [1201474800000, 1500], [1201561200000, 1510], [1201647600000, 1510], [1201734000000, 1510], [1201820400000, 1700], [1201906800000, 1800], [1201993200000, 1900], [1202079600000, 2000], [1202166000000, 2100], [1202252400000, 2200], [1202338800000, 2300], [1202425200000, 2400], [1202511600000, 2550], [1202598000000, 2600], [1202684400000, 2500], [1202770800000, 2700], [1202857200000, 2750], [1202943600000, 2800], [1203030000000, 3245], [1203116400000, 3345], [1203202800000, 3000], [1203289200000, 3200], [1203375600000, 3300], [1203462000000, 3400], [1203548400000, 3600], [1203634800000, 3700], [1203721200000, 3800], [1203807600000, 4000], [1203894000000, 4500]];

                                            for (var i = 0; i < d.length; ++i) {
                                                d[i][0] += 60 * 60 * 1000;
                                            }

                                            var options = {

                                                xaxis: {
                                                    mode: "time",
                                                    tickLength: 5
                                                },

                                                series: {
                                                    lines: {
                                                        show: true,
                                                        lineWidth: 1,
                                                        fill: true,
                                                        fillColor: {
                                                            colors: [{
                                                                    opacity: 0.1
                                                                }, {
                                                                    opacity: 0.15
                                                                }]
                                                        }
                                                    },
                                                    //points: { show: true },
                                                    shadowSize: 0
                                                },

                                                selection: {
                                                    mode: "x"
                                                },

                                                grid: {
                                                    hoverable: true,
                                                    clickable: true,
                                                    tickColor: $color_border_color,
                                                    borderWidth: 0,
                                                    borderColor: $color_border_color,
                                                },

                                                tooltip: true,

                                                tooltipOpts: {
                                                    content: "Sales: %x <span class='block'>$%y</span>",
                                                    dateFormat: "%y-%0m-%0d",
                                                    defaultTheme: false
                                                },

                                                colors: [$color_second],

                                            };

                                            var plot = jQuery.plot(jQuery("#flot-sales"), [d], options);
                                        }

                                    });
                                });
                            });
                        });
                    });
                });
            });
        </script>
        <!-- STYLESWITCHER - REMOVE -->
        <!--<script async type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/admin/assets/plugins/styleswitcher/styleswitcher.js"></script>-->
    </body>
</html>