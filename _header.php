<?php
include 'connector.php';
session_start();
if (!(isset($_SESSION['role']) && ($_SESSION['role'] == 'trader') || $_SESSION['role'] == 'accountant')) {
?>
    <script>
    swal('User can not access!', {
        icon: 'error',
    }).then((e) => {
        window.location.href = 'index.php';
    });
    </script>
<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการข้อมูล</title>
    <link rel="icon" href="dist/img/RoyalIcon.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="dist/apexcharts.js"></script>

    <script src="controller/currency.js"></script>

    <!-- Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <script src="plugins/select2/js/select2.full.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->

    <!-- <link rel="stylesheet" href="https://ds.fusioncharts.com/2.0.8/css/ds.css">
  <script src="https://ds.fusioncharts.com/2.0.8/js/ds.js"></script>
  <script type="text/javascript" src="http://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
  <script type="text/javascript"
    src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script> -->
    <!-- <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Thasadith:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Thasadith:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<style>
    /* Overide style */
    .navbar-green {
        background-color: #ffd700;
        border-color: #ffd700 !important;
        /* //# 00cba9*/
    }

    body {
        font-family: "Thasadith" !important;
    }
</style>
<script>
    $(document).ready(function() {

        if (localStorage.getItem('fontfam') != null && localStorage.getItem('fontfam') != '') {
            $('body').attr('style', 'font-family:' + localStorage.getItem('fontfam') + '!important');
            if (localStorage.getItem('fontfam') == "Prompt") {
                $('.allfont i').removeClass();
                $(".font1 i").addClass("fas fa-toggle-on");
                $(".font2 i").addClass("fas fa-toggle-off");
                $(".font3 i").addClass("fas fa-toggle-off");
            } else if (localStorage.getItem('fontfam') == "Thasadith") {
                $('.allfont i').removeClass();
                $(".font1 i").addClass("fas fa-toggle-off");
                $(".font2 i").addClass("fas fa-toggle-on");
                $(".font3 i").addClass("fas fa-toggle-off");
            } else if (localStorage.getItem('fontfam') == "Bai Jamjuree") {
                $('.allfont i').removeClass();
                $(".font1 i").addClass("fas fa-toggle-off");
                $(".font2 i").addClass("fas fa-toggle-off");
                $(".font3 i").addClass("fas fa-toggle-on");
            }
        } else {
            $('body').attr('style', 'font-family:Prompt !important');
        }

    });

    function fontP() {
        $('.allfont i').removeClass();
        $(".font1 i").addClass("fas fa-toggle-on");
        $(".font2 i").addClass("fas fa-toggle-off");
        $(".font3 i").addClass("fas fa-toggle-off");
        $('body').attr('style', 'font-family:Prompt !important');
        localStorage.setItem('fontfam', "Prompt");
    }

    function fontT() {
        $('.allfont i').removeClass();
        $(".font1 i").addClass("fas fa-toggle-off");
        $(".font2 i").addClass("fas fa-toggle-on");
        $(".font3 i").addClass("fas fa-toggle-off");
        $('body').attr('style', 'font-family:Thasadith !important');
        localStorage.setItem('fontfam', "Thasadith");
    }

    function fontB() {
        $('.allfont i').removeClass();
        $(".font1 i").addClass("fas fa-toggle-off");
        $(".font2 i").addClass("fas fa-toggle-off");
        $(".font3 i").addClass("fas fa-toggle-on");
        $('body').attr('style', 'font-family:Bai Jamjuree !important');
        localStorage.setItem('fontfam', "Bai Jamjuree");
    }
</script>
<?php include 'connector.php';?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">

    <!-- Site wrapper -->
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-green navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">หน้าหลัก</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="overview.php" class="nav-link">ข้อมูลลูกค้า</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">Example</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-language"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right allfont">
                        <span class="dropdown-item dropdown-header">Change font family</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item font1" onclick="fontP()">
                            <i class="fas fa-toggle-on"></i> Prompt
                            <!-- <span class="float-right text-muted text-sm">1</span> -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item font2" onclick="fontT()">
                            <i class="fas fa-toggle-off"></i> Thasadith
                            <!-- <span class="float-right text-muted text-sm">12 hours</span> -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item font3" onclick="fontB()">
                            <i class="fas fa-toggle-off"></i> Bai Jamjuree
                            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link elevation-4">
                <img src="dist/img/RoyalLogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">จัดการข้อมูล</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">ผู้ใช้งาน</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="accountOverview.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    หน้าหลัก
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="account.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    ข้อมูลลูกค้า
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <script>
            function checkLogout() {
                swal({
                        title: "แน่ใจหรือไม่ ?",
                        text: "ต้องการออกจากระบบหรือไม่",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willExit) => {
                        if (willExit)
                            window.location.href = "_logout.php";
                    });
            }
        </script>