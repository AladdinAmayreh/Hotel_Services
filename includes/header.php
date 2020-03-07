<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
     header("location:login.php");
     exit();
}


?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
        <link rel="stylesheet" href="../assets/vendor/bootstrap-select/css/bootstrap-select.css">

   
</head>

<body>
 
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a href="./index.php"><img src="../img/logoo.png" width="160px" height="32px" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="manage.php"  aria-expanded="false"  aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i> Manage Admin <span class="badge badge-success">6</span></a></li> 

                                <li class="nav-item ">
                                <a class="nav-link " href="manage_services.php"  aria-expanded="false"  aria-controls="submenu-1"><i  class="fa fa-fw fa-rocket"></i> Manage Servises<span class="badge badge-success">6</span></a>
                             
                            </li>
                          <li class="nav-item ">
                                <a class="nav-link " href="manage_servises_type.php"  aria-expanded="false"  aria-controls="submenu-1"><i  class="fab fa-fw fa-wpforms"></i> Manage Servises Type<span class="badge badge-success">6</span></a>
                             
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="manage_customer.php"  aria-expanded="false"  aria-controls="submenu-1"><i class="fas fa-fw fa-table"></i>Manage Custumer</a>
                                
                            </li>
                           <li class="nav-item">
                                <a class="nav-link" href="manage_order.php"  aria-expanded="false"  aria-controls="submenu-1"><i class="fas fa-f fa-folder"></i>Manage order</a>
                                
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="manage_email.php"  aria-expanded="false"  aria-controls="submenu-1"><i class="fas fa-f fa-folder"></i>Manage email</a>
                                
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"  aria-expanded="false"  aria-controls="submenu-1"><i class="fas fa-f fa-logout"></i>Logout</a>
                                
                            </li>
                          
                            
                            
                           
                          
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                        
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->