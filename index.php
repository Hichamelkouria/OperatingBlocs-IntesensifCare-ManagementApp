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

    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
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
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">

                                            	<div class="dropdown" style="margin: 12px;">
                        	
                                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #c0262e;">Semaine
                                            <?php echo $_GET['id']; ?><span class="caret"></span></button>
                                    <ul class="dropdown-menu" style="width:400px;height:200px;overflow: scroll;">
                                    	<?php 
                                    		for($i=1; $i<=25; $i++)
                                    		{
                                    			echo "<li><a href='index.php?id=$i'>Semaine $i</a></li>";
                                    		}
                                    	?>
                                    </ul>
                                </div>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
             <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">

		<?php
	include 'reader.php';
    $excel = new Spreadsheet_Excel_Reader();
	?>


	<?php
$count =0;
$excel->read('bloc.xls');
$y=2;
while($y<=$excel->sheets[0]['numRows']){    
      while($y<=$excel->sheets[0]['numRows']){
      	if(isset($excel->sheets[0]['cells'][$y][1]))
      	{
        	$y++;
      	}else
      	{
      		$y++;
      		break;
      	} 
      }

$y+=2;
$x=1;
$ligne1 = Array();
 while($x<=$excel->sheets[0]['numCols']) {
        if(isset($excel->sheets[0]['cells'][$y][$x]))
        {
            $cell = $excel->sheets[0]['cells'][$y][$x];
           // echo "<t>val : $cell <br><t>";
            array_push($ligne1, $cell); 
        }
                    $x++;
      }

$count++;

if($count==$_GET['id'])
	break;

$y+=5;

    }
    
    ?>



<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Usage of blocs"
	},
	axisY: {
		title: "Number of patients"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Days",
		dataPoints: [      
			{ y: <?php echo $ligne1[0]; ?>, label: "<?php echo 'lundi m'; ?> " },
			{ y: <?php echo $ligne1[1]; ?>, label: "<?php echo 'lundi s'; ?> " },
			{ y: <?php echo $ligne1[2]; ?>, label: "<?php echo 'mardi m'; ?> " },
			{ y: <?php echo $ligne1[3]; ?>, label: "<?php echo 'mardi s'; ?> " },
			{ y: <?php echo $ligne1[4]; ?>, label: "<?php echo 'mercredi m'; ?> " },
			{ y: <?php echo $ligne1[5]; ?>, label: "<?php echo 'mercredi s'; ?> " },
			{ y: <?php echo $ligne1[6]; ?>, label: "<?php echo 'jeudi m'; ?> " },
			{ y: <?php echo $ligne1[7]; ?>, label: "<?php echo 'jeudi s'; ?> " },
			{ y: <?php echo $ligne1[8]; ?>, label: "<?php echo 'vendredi m'; ?> " },
			{ y: <?php echo $ligne1[9]; ?>, label: "<?php echo 'vendredi s'; ?> " }
		]
	}]
});
chart.render();

}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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


    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>