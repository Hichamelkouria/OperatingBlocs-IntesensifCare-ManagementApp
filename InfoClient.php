<?php
include("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>TX/TX - Organisation des blocs opératoires</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logoIcon.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <img src="images/logoGrand.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- End Comment -->
                       
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li><a class="has-arrow"  href="index.php?id=1" aria-expanded="true"><i class="fa fa-bar-chart"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php?id=1">Graphes - Blocs Operatoirs</a></li>
                                <li><a href="indexSoins.php?id=1">Graphes - Soins Intensifs</a></li>
                            </ul>
                        </li>
                         <li> <a c href="bloc.php"><i class="fa fa-table"></i><span class="hide-menu">Blocs opératoire</span></a></li>
                        <li> <a c href="soins.php"><i class="fa fa-table"></i><span class="hide-menu">Soins intensifs</span></a></li>
                        <li> <a c href="gerer.php"><i class="fa fa-users"></i><span class="hide-menu">Patients</span></a></li>
                       

                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"  style="color: red;">Agenda - Soins intensifs</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Soins intensifs</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-success">
                            <div class="card-header">
                               <center><h4 class="m-b-0 text-white" style="font-weight: bold;">Info Patient</h4></center> 
                            </div>
                            <div class="card-body">
                                <form action="ModifierClient.php" method="GET">
                                    <div class="form-body">
                                        <center><h3 class="card-title m-t-15">Informations Personnelles</h3></center>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="font-weight: bold;">Id Client</label>
                                                    <?php 
                                                    $id = $_GET['id'];
                                                    $rep = $conn->query("select * from client where Id_Client='$id'");
                                                    $data = $rep->fetch();
                                                    $GLOBALS['nom'] = $data["Nom"];
                                                     $GLOBALS['prenom'] = $data["Prenom"];
                                                     $GLOBALS['tel'] = $data["Tel"];
                                                     $GLOBALS['adresse'] = $data["Adresse"];
                                                     $GLOBALS['cni'] = $data["CNI"];

                                                    echo "<input type='text' name='id' class='form-control' value='$id' readonly>";
                                                    ?>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="font-weight: bold;">Nom</label>

                                                    <?php
                                                    echo "<input type='text' name='nom' class='form-control' value='$nom' readonly>";
                                                    ?>
                                                   <!-- <input type="text" name="nom" class="form-control" placeholder="Nom"> -->
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label" style="font-weight: bold;">Prénom</label>
                                                   <!-- <input type="text" name="prenom" class="form-control" placeholder="Prenom">-->
                                                    <?php
                                                    echo "<input type='text' name='prenom' class='form-control' value='$prenom' readonly>";
                                                    ?>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label" style="font-weight: bold;">Numéro Télèphone</label>
                                                    <!--<input type="text" name="tel" class="form-control" placeholder="06********">-->
                                                     <?php
                                                    echo "<input type='text' name='tel' class='form-control' value='$tel' readonly >";
                                                    ?>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label" style="font-weight: bold;">CIN</label>
                                                   <!-- <input type="text" name="cin" class="form-control" placeholder="CIN"> -->
                                                   <?php
                                                    echo "<input type='text' name='cni' class='form-control' value='$cni' readonly>";
                                                    ?>
                                                    </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="form-group has-danger">
                                                    <label class="control-label" style="font-weight: bold;">Adresse</label>
                                                    <?php
                                                    echo "<input type='text' name='adresse' class='form-control' value='$adresse' readonly >";
                                                    ?>
                                                    <!--<input type="text" name="adresse" class="form-control" placeholder="Adresse, ... ">-->
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <!--/row-->
                                       
                                        </div>
                                    </div> 
                                    <center>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-warning"> <i class="fa fa-check"></i>Modifier</button>
                                         <button type="reset" class="btn btn-inverse">Réinitialiser</button>
                                    </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="#">Projet TX/TO</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>