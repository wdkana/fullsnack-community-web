<?php


include '../../../controller/User_controller.php';
$user = new User_controller();

$session = $user->validate();
if($session == false){
	header("location: http://localhost/fullsnack.org/p/users/login");
}

$user->logout();

$email = $_SESSION['email'];
$status = $_SESSION['logged-in'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--
    <link rel="icon" type="image/png" sizes="16x16" href="/localhost/fullsnack.org/assets/dashboard/plugins/images/favicon.png">-->
    <title>FSB Member Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/dashboard/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/assets/dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="/assets/dashboard/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="/assets/dashboard/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/assets/dashboard/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/assets/dashboard/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/dashboard/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/assets/dashboard/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a href="http://fullsnack.org/" style="color:#222">
                     <b>FSB</b></a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <!--<img src="#" alt="user-img" width="36" class="img-circle">--><b class="hidden-xs"><?php echo $email; ?></b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="#" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Kegiatan</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>List Materi</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-code fa-fw" aria-hidden="true"></i>Code Library</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-briefcase fa-fw" aria-hidden="true"></i>Bisnis Library</a>
                    </li>
                    <li>
                      <a><form method="post" action="" class="waves-effect">
	<button type="submit" name="logout" class="btn btn-warning">Keluar</button>
</form>
                    </li>

                </ul>
                <div class="center p-20">
                     <a href="#" target="_blank" class="btn btn-danger btn-block waves-effect waves-light">Gabung Divisi</a>
                 </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">FSB BETA VERSION</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Gabung Divisi</a>
                        <ol class="breadcrumb">

                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-star fa-fw" aria-hidden="true"></i> FSB Member Poin</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">0</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-user-secret fa-fw" aria-hidden="true"></i> FSB Top Member</h3>
                            <ul class="list-inline two-part">
                                <li class="text-right"><span>Dea Afrizal</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-money fa-fw" aria-hidden="true"></i> FSB E-Money</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right">Rp. <i class="ti-arrow-up text-info"></i><span class="counter text-info">1500</span></li>
                            </ul>
                        </div>
                    </div>
                       <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> FSB Latest News</h3>
                            <ul class="list-inline two-part">
                                <li class="text-left">LPKIA akan mengadakan ...</li>
                                <li class="text-left"><a href="#" class="btn btn-danger">Lihat Berita</a></li>
                            </ul>
                        </div>
                    </div>

                       <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-bookmark fa-fw" aria-hidden="true"></i> FSB Open Project</h3>
                            <ul class="list-inline two-part">
                            	<li></li>
                                <li class="text-right"><a href="#" class="btn btn-danger">Lihat Daftar</a></li>
                            </ul>
                        </div>
                    </div>

                       <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-bolt fa-fw" aria-hidden="true"></i> FSB Chat</h3>
                            <ul class="list-inline two-part">
                                <li></li>
                                <li class="text-right"><a href="#" class="btn btn-danger">Masuk Chanel</a></li>
                            </ul>
                        </div>
                    </div>


                      <div class="col-lg-12 col-sm-10 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Catatan</h3>
                            <ul class="list-inline two-part">
                                <li class="text-left">
       <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1"></label>
        </div>
      </div>
    </form>
                                </li>
<br/><a href="#" class="btn btn-danger">Simpan</a>
                            </ul>
                        </div>
                    </div>

                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
               
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
               
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Fullsnack Community <span style='color:red'>BETA 1</span></footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/dashboard/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/dashboard/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/assets/dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/assets/dashboard/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/assets/dashboard/js/waves.js"></script>
    <!--Counter js -->
    <script src="/assets/dashboard/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/assets/dashboard/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="/assets/dashboard/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="/assets/dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="/localhost/fullsnack.org/assets/dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/assets/dashboard/js/custom.min.js"></script>
    <script src="/assets/dashboard/js/dashboard1.js"></script>
    <script src="/assets/dashboard/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>


