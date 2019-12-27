<html>
<script src="public/assets/js/jquery.min.js"></script>
</html><!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title><?php echo AppName ?></title>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
    <script src="<?php echo APP?>assets/js/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo APP?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>



<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>






    <script src="<?php echo APP?>assets/js/bootstrap-datepicker.fa.js"></script>
    <script src="<?php echo APP?>assets/js/bootstrap-datepicker.js"></script>
     <script src="<?php echo APP?>assets/js/xlsx_html.full.min.js"></script>
    <script src="<?php echo APP?>assets/js/FileSaver.js"></script>
    <script src="<?php echo APP?>assets/js/xlsx_html_utils.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.css">

    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">

 <link href="<?php echo APP?>assets/css/pages/card-page.css" rel="stylesheet">

    <!--<link href='<?php echo APP?>assets/js/plugins/PersianCalender/fullcalendar.css' rel='stylesheet' />-->

    <!--<link href='<?php echo APP?>assets/js/plugins/PersianCalender/fullcalendar.print.css' rel='stylesheet' media='print' />-->
    <!--<script src="<?php echo APP?>assets/js/plugins/prism/prism.js"></script>-->
    <!--<link href=" <?php echo APP?>assets/js/plugins/prism/prism.css" rel="stylesheet">-->
    <script src="<?php echo APP?>assets/js/Print.js"></script>
    <script src="<?php echo APP ?>AJAX/{My_Ajax_Path}"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo APP?>assets/js/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/js/plugins/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/js/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/js/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/js/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!--<link href="<?php echo APP?>assets/js/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />-->

    <!-- This page CSS -->
    <!-- Vector CSS -->
    <link href="<?php echo APP?>assets/js/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="<?php echo APP?>assets/js/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- chartist CSS -->
    <link href="<?php echo APP?>assets/js/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/js/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo APP?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/css/tableexport.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/css/colors/megna.css" id="theme" rel="stylesheet"/>
    <link href="<?php echo APP?>assets/css/Coustom.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/css/clockpicker.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/css/standalone.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/css/pages/user-card.css" rel="stylesheet">
    <link href="<?php echo APP?>assets/css/bootstrap-datepicker.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo APP?>assets/css/pages/dashboard1.css" rel="stylesheet"/>
    <!-- You can change the theme colors from here -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<!--<div class="preloader">-->
    <!--<div class="loader">-->
        <!--<div class="loader__figure"></div>-->
        <!--<p class="loader__label">دنیای پردازش ...</p>-->
    <!--</div>-->
<!--</div>-->
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?php echo APP ?>assets/images/logo.png" alt="homepage" class="dark-logo"  width="78" height="80"/>
                    <!-- Light Logo icon -->
                    <!--<img src="<?php echo APP ?>assets/images/logo.png" alt="بیمه معلم" class="dark-logo"  />-->
                </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <!--<img src="<?php echo APP ?>assets/images/logo.png" alt="homepage" class="dark-logo" />-->
                    <!-- Light Logo text -->
                         <!--<img src="<?php echo APP ?>assets/images/logo.png" class="light-logo" alt="بیمه معلم" /></span> </a>-->
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">پیام ها</div>
                                </li>
                                <li>
                                    <!--<div class="message-center">-->
                                        <!--&lt;!&ndash; Message &ndash;&gt;-->
                                        <!--<a href="#">-->
                                            <!--<div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>-->
                                            <!--<div class="mail-contnet">-->
                                                <!--<h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>-->
                                        <!--</a>-->

                                    <!--</div>-->
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"><i class="fa fa-angle-left"></i> <strong>نمایش همه پیام ها</strong>  </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">   تعداد درخواست های جدید  <span class="badge-info badge">5</span></div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <!--<a href="#">-->
                                            <!--<div class="user-img"> <img src="<?php echo APP?>assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>-->
                                            <!--<div class="mail-contnet">-->
                                                <!--<h5> نام : محمد کاظمی </h5> <span class="mail-desc"> خودرو : سمند</span> <span class="time">9:30 AM</span> </div>-->
                                        <!--</a>-->
                                        <!-- Message -->

                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo APP?>assets/images/mechanic.png" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="<?php echo APP?>assets/images/mechanic.png" alt="user"></div>
                                        <div class="u-text">
                                            <h4>مجتبی موسوی زاده
                                                </h4>
                                            <h5>پنل مدیریت وب سایت</h5>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="Profile"><i class="ti-user"></i>پروفایل</a></li>

                                <li><a href="Logout"><i class="fa fa-power-off"></i> خروج</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="user-profile">
                        <a class=" waves-effect waves-dark" href="#" aria-expanded="false"><img src=""<?php echo APP?>assets/images/mechanic.png"  alt="user" /><span class="hide-menu">مجتبی موسوی زاده </span></a>
                       <div class="col-lg-12 text-center" style="line-height: 50px"><i class="fa fa-university"></i> <span class="text-center text-danger"> مرکز: پنل مدیریت وب سایت</span></div>


                    </li>
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">منو</li>

                    <li style="font-family: Samim" class="start"> <a href="javascript:;">
                     <i class="fa fa-plus-circle"></i> <span class="title">عملیات مرکز معاینه</span>
                      <span class="selected"></span> <span class="arrow"></span> </a> <ul class="sub-menu"><li style="font-family: Samim" > <a href="CarAccept"><i class="fa fa-check-circle"></i>  <span class="title">پذیرش خودرو</span>  </a> </li><li style="font-family: Samim" > <a href="RequestInsurance"><i class="fa fa-reply"></i>  <span class="title">ثبت درخواست برگه بیمه</span>  </a> </li><li style="font-family: Samim" > <a href="InvalidPageReport"><i class=""></i>  <span class="title">لیست برگه های باطله</span>  </a> </li><li style="font-family: Samim" > <a href="#"><i class=""></i>  <span class="title">ثبت حادثه</span>  </a> </li><li style="font-family: Samim" > <a href="#"><i class=""></i>  <span class="title">لیست نامه های وارده</span>  </a> </li><li style="font-family: Samim" > <a href="InsuranceStatus"><i class=""></i>  <span class="title">مشاهده وضعیت برگه بیمه مرکز</span>  </a> </li></ul></li><li style="font-family: Samim" class="start"> <a href="javascript:;">
                     <i class="fa fa-plus-circle"></i> <span class="title">تعاریف</span>
                      <span class="selected"></span> <span class="arrow"></span> </a> <ul class="sub-menu"><li style="font-family: Samim" > <a href="AddCarExamination"><i class=""></i>  <span class="title">تعریف مرکز معاینه</span>  </a> </li><li style="font-family: Samim" > <a href="AddCar"><i class=""></i>  <span class="title">تعریف نوع خودرو</span>  </a> </li><li style="font-family: Samim" > <a href="AddCarModel"><i class=""></i>  <span class="title">تعریف مدل خودرو</span>  </a> </li><li style="font-family: Samim" > <a href="AddUsers"><i class=""></i>  <span class="title">کاربر جدید</span>  </a> </li><li style="font-family: Samim" > <a href="ExpireDate"><i class=""></i>  <span class="title">ثبت تاریخ انقضاء</span>  </a> </li><li style="font-family: Samim" > <a href="#"><i class=""></i>  <span class="title">تعریف مدارک لازم جهت حادثه</span>  </a> </li><li style="font-family: Samim" > <a href="ListsCarExamination"><i class=""></i>  <span class="title">لیست مراکز</span>  </a> </li><li style="font-family: Samim" > <a href="#"><i class=""></i>  <span class="title">رسیدگی به حوادث</span>  </a> </li></ul></li><li style="font-family: Samim" class="start"> <a href="javascript:;">
                     <i class="fa fa-plus-circle"></i> <span class="title">گزارشات</span>
                      <span class="selected"></span> <span class="arrow"></span> </a> <ul class="sub-menu"><li style="font-family: Samim" > <a href="AcceptReport"><i class=""></i>  <span class="title">گزارش پذیرش مرکز</span>  </a> </li><li style="font-family: Samim" > <a href="#"><i class=""></i>  <span class="title">وضعیت بیمه های صادر شده</span>  </a> </li><li style="font-family: Samim" > <a href="InsuranceIssuanceLists"><i class=""></i>  <span class="title">لیست درخواست های صدور برگه بیمه</span>  </a> </li></ul></li><li style="font-family: Samim" class="start"> <a href="javascript:;">
                     <i class="fa fa-cogs"></i> <span class="title">تنظیمات</span>
                      <span class="selected"></span> <span class="arrow"></span> </a> <ul class="sub-menu"><li style="font-family: Samim" > <a href="UsersAccess"><i class=""></i>  <span class="title">دسترسی کاربران</span>  </a> </li></ul></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card simple">
                <div class="card-title card-body">
                    <h4 style="font-family: Samim" class="panel-body panel-danger"> <span class="semi-bold">گزارش برگه ها</span></h4>
                </div>


                <div class="card-body form-material">





                <div class="container-fluid">
                    <div class="span12">
                        <div class="card simple">
                            <div class="card-title card-body">
                                <h4><i class=" fa fa-list"></i>لیست <span class="semi-bold"></span> گزارش برگه ها</h4>
                                <div class="tools"> <a href="javascript:;" class="collapse"></a></div>
                            </div>
                            <div class="card-body ">
                                <table class="table table-hover table-condensed" id="ListsOfReports">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام مرکز</th>
                                        <th> کد مرکز</th>
                                        <th> تعداد پذیرش</th>


                                    </tr>
                                    </thead>
                                    <tbody>
<tr class="even"><td class="v-align-middle">1</td><td><span class="muted"> نگین سبز</span></td><td><span class="muted">14</span></td><td><span class="muted">300</span></td></tr><tr class="even"><td class="v-align-middle">2</td><td><span class="muted">پنل مدیریت وب سایت</span></td><td><span class="muted">112200</span></td><td><span class="muted">22</span></td></tr><tr class="even"><td class="v-align-middle">3</td><td><span class="muted">آقای باقری</span></td><td><span class="muted">1333</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">4</td><td><span class="muted">کارگاه نگین سبز مبارکه</span></td><td><span class="muted">1500</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">5</td><td><span class="muted">هیدرو استاتیک</span></td><td><span class="muted">100000583</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">6</td><td><span class="muted">هیدرو تست</span></td><td><span class="muted">00823</span></td><td><span class="muted">200</span></td></tr><tr class="even"><td class="v-align-middle">7</td><td><span class="muted">آسمان آبی لردگان</span></td><td><span class="muted">18004</span></td><td><span class="muted">2</span></td></tr><tr class="even"><td class="v-align-middle">8</td><td><span class="muted">مرکز خدمات پاک سوز موتور کرمان- محمد علی ملک قاسمی</span></td><td><span class="muted">30002</span></td><td><span class="muted">2</span></td></tr><tr class="even"><td class="v-align-middle">9</td><td><span class="muted">مرکز نصب گاز آقای حجت اله کرمی</span></td><td><span class="muted">37004</span></td><td><span class="muted">-83</span></td></tr><tr class="even"><td class="v-align-middle">10</td><td><span class="muted">مرکز خدمات نصب گاز جناب آقای علی حسینی</span></td><td><span class="muted">18011</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">11</td><td><span class="muted">مرکز نصب سی ان جی آقای سید کامل حسینی</span></td><td><span class="muted">29022</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">12</td><td><span class="muted">مرکز نصب سی ان جی آقای اردشیر کریمی</span></td><td><span class="muted">31002</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">13</td><td><span class="muted">مرکز نصب سی ان جی آقای صالح قاسم زاده</span></td><td><span class="muted">10008</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">14</td><td><span class="muted">مرکز نصب سی ان جی آقای حمید خاکزاد </span></td><td><span class="muted">10010</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">15</td><td><span class="muted">مرکز نصب سی ان جی آقای آرش صفر خانلو </span></td><td><span class="muted">10011</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">16</td><td><span class="muted">مرکز نصب سی ان جی آقای مهدی اسلامی</span></td><td><span class="muted">10018</span></td><td><span class="muted">-3</span></td></tr><tr class="even"><td class="v-align-middle">17</td><td><span class="muted">مرکز نصب سی ان جی آقای حامد قنبری</span></td><td><span class="muted">10019</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">18</td><td><span class="muted">مرکز نصب سی ان جی آقای فرهاد محمد پور کانی طومار</span></td><td><span class="muted">11003</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">19</td><td><span class="muted">مرکز نصب سی ان جی آقای خالق مولودی</span></td><td><span class="muted">11004</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">20</td><td><span class="muted">مرکز نصب سی ان جی آقای مهدی ژاله کریمی</span></td><td><span class="muted">11006</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">21</td><td><span class="muted">مرکز نصب سی ان جی آقای کیوان فرجی</span></td><td><span class="muted">11008</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">22</td><td><span class="muted">مرکز نصب سی ان جی آقای قادر برزگری </span></td><td><span class="muted">10005</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">23</td><td><span class="muted">مرکز نصب سی ان جی آقای ناصر رضا زاده سرابی</span></td><td><span class="muted">10006</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">24</td><td><span class="muted">مرکز نصب سی ان جی آقای حسن شمسی</span></td><td><span class="muted">10007</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">25</td><td><span class="muted">مرکز نصب سی ان جی آقای علیرضا ولی دیزجی</span></td><td><span class="muted">10009</span></td><td><span class="muted">42</span></td></tr><tr class="even"><td class="v-align-middle">26</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای عبدالرحمن معروف بیگی</span></td><td><span class="muted">11016</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">27</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای جمشید عبدالهی نوروز لو</span></td><td><span class="muted">11020</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">28</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای امیر اسدی آقابیک</span></td><td><span class="muted">11021</span></td><td><span class="muted">45</span></td></tr><tr class="even"><td class="v-align-middle">29</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای ایمان مختارزاده</span></td><td><span class="muted">13003</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">30</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای جعفر ابراهیم زاده</span></td><td><span class="muted">11026</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">31</td><td><span class="muted">مرکز خدمات سی ان جی کژال کرد</span></td><td><span class="muted">22012</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">32</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای حمید رمضانی</span></td><td><span class="muted">39010</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">33</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای حسین سلاجقه </span></td><td><span class="muted">30003</span></td><td><span class="muted">-8</span></td></tr><tr class="even"><td class="v-align-middle">34</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای سید محمود میر عماد</span></td><td><span class="muted">24007</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">35</td><td><span class="muted">مرکز خدمات سی ان جی لیلا دره</span></td><td><span class="muted">39009</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">36</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای حسین دشتی</span></td><td><span class="muted">39005</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">37</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای محمد میرزایی پارسا</span></td><td><span class="muted">39004</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">38</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای محمد محمودیان</span></td><td><span class="muted">37002</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">39</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای سید محمد نور اشرف الدین</span></td><td><span class="muted">36003</span></td><td><span class="muted">16</span></td></tr><tr class="even"><td class="v-align-middle">40</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مهرداد دلیری</span></td><td><span class="muted">34012</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">41</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای احمد وطن خواه</span></td><td><span class="muted">34010</span></td><td><span class="muted">34</span></td></tr><tr class="even"><td class="v-align-middle">42</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای کمال الدین فیض الهی</span></td><td><span class="muted">34009</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">43</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مصطفی بلوک اصلی</span></td><td><span class="muted">34008</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">44</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مرتضی بزی</span></td><td><span class="muted">33009</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">45</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مجتبی بختیاری</span></td><td><span class="muted">33008</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">46</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مهرداد علی محمدی</span></td><td><span class="muted">33005</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">47</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای محمد محسن باقری</span></td><td><span class="muted">33003</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">48</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای محمد سندزایی</span></td><td><span class="muted">33002</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">49</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مهدی بهمنی</span></td><td><span class="muted">31012</span></td><td><span class="muted">0</span></td></tr><tr class="even"><td class="v-align-middle">50</td><td><span class="muted">مرکز خدمات سی ان جی جناب آقای مهدی صونی وند</span></td><td><span class="muted">31010</span></td><td><span class="muted">0</span></td></tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
<!--            <div class="col-lg-12">-->
<!--                <button class="btn btn-info pull-right" onclick="exportTableToExcel('ListsOfReports','Reports')">خروجی xls</button>-->
<!--                <button style="margin-left: 10px" class="btn btn-danger pull-right" onclick="PDF()" >PDF خروجی </button>-->
<!--                <button style="margin-left: 10px" class="btn btn-success pull-right"  onclick="exportExcel()">خروجی xlsx</button>-->

<!--            </div>-->
        </div>



    </div>


</div>


        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> سامانه بیمه معلم <?php echo date('Y') ?>  </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src=".<?php echo APP?>assets/js/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo APP?>assets/js/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo APP?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo APP?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo APP?>assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo APP?>assets/js/custom.min.js"></script>
<script src="<?php echo APP?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo APP?>assets/js/dashboard1.js"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- Vector map JavaScript -->
<script src="<?php echo APP?>assets/js/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo APP?>assets/js/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!--sparkline JavaScript -->


<!--morris JavaScript -->
<!--<script src="<?php echo APP?>assets/js/assets/plugins/chartist-js/dist/chartist.min.js"></script>-->
<!--<script src="<?php echo APP?>assets/js/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>-->
<!-- Chart JS -->
<script src="<?php echo APP?>assets/js/jquery.mask.js"></script>
<script src="<?php echo APP?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo APP?>assets/js/bootstrap-datepicker.fa.js"></script>


<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->

<script src="<?php echo APP?>assets/js/plugins/moment/min/moment.min.js"></script>
<script src="<?php echo APP?>assets/js/plugins/wizard/jquery.steps.min.js"></script>
<!--<script src="<?php echo APP?>assets/js/plugins/wizard/jquery.validate.min.js"></script>-->
<!--stickey kit -->
<script src="<?php echo APP?>/assets/js/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!-- Magnific popup JavaScript -->
<script src="<?php echo APP?>/assets/js/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo APP?>/assets/js/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
<script src="<?php echo APP?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo APP?>assets/js/fakeLoader.js"></script>

<!-- start - This is for export functionality only -->


</html>
