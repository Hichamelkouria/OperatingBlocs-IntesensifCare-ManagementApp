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
                    <h3 class="text-primary">Agenda - Blocs opératoires</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <div class="dropdown" style="margin: 12px;">
                        	
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #007bff;">Semaine
                                            <span class="caret"></span></button>
                                    <ul class="dropdown-menu" style="width:400px;height:200px;overflow: scroll;">
                                    	<?php
                                    		for($i=1; $i<=25; $i++)
                                    		{
                                    			echo "<li><a href='#$i'>Semaine $i</a></li>";
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
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                            	<!-- algorithme de base -->
                                <style>
                                * {box-sizing: border-box;}
                                ul {list-style-type: none;}
                                body {font-family: Verdana, sans-serif;}

                                .month {
                                    padding: 30px 25px;
                                    width: 100%;
                                    background: #007bff;
                                    text-align: center;
                                }

                                .month ul {
                                    margin: 0;
                                    padding: 0;
                                }

                                .month ul li {
                                    color: white;
                                    font-size: 20px;
                                    text-transform: uppercase;
                                    letter-spacing: 3px;
                                }

                                .month .prev {
                                    float: left;
                                    padding-top: 10px;
                                }

                                .month .next {
                                    float: right;
                                    padding-top: 10px;
                                }


                                #diary {
                                   
                                    border-collapse: collapse;
                                    width: 100%;
                                }

                                #diary td, #diary th {
                                    border: 0px;
                                    padding: 8px;
                                }


                                #diary td:hover {
                                  background-color: #007bff!important ; color: #fff;
                                }
                                #diary td:nth-child(even){background-color: #fff;}
                                #diary th {
                                  width: 10%;
                                    padding-top: 12px;
                                    padding-bottom: 12px;
                                    background-color: #ddd;
                                    color: #666;
                                    text-align: center;
                                    font-size:18px;
                                }
                                #diary td{
                                  width: 10%;
                                   height: 100px;
                                  background: #eee;
                                  text-align: center;
                                    font-size:15px;
                                    color: #777;
                                }

                                </style>


<!-- code d'affichage des blocs -->







                            </div>
                            
<!-- table d'affichage -->
    <?php
    include 'reader.php';
    $excel = new Spreadsheet_Excel_Reader();
    ?>


    <?php
    $table = Array();
    $excel->read('bloc.xls');
    $Numsemaine=0;

$y=$z=2;
while($y<=$excel->sheets[0]['numRows']){    
    $x=1;
    $initial=$z;
    $y=$initial;
    
    $table = Array();
    //colone par colomn
    while($x<=$excel->sheets[0]['numCols']) {
      //initialiser la valeur de x
      $values = Array();
      $y=$initial;
      $patient=1;
      //tant qu'il ya du ligne faire ca
      while($y<=$excel->sheets[0]['numRows']){
        if(isset($excel->sheets[0]['cells'][$y][$x]))
        {
            $cell = $excel->sheets[0]['cells'][$y][$x];
            if($cell == 1)
                array_push($values, $patient); 
            $y++;
        }else
        {
            if($z<$y)
                $z=$y;
            break;
        } 
        $patient++;
      }
      if( empty($values))
        array_push($values, null); 
      array_push($table, $values);
      $x++;
    }
    /* l'affichage du tableau */
   $columns = count(current($table));


if($z == $y)
break;
$Numsemaine++;
echo "<br><br>";
echo "<div id='$Numsemaine'></div>";
echo "<div class='card-body'>";
echo "                                <div class='table-responsive'>";
echo "                                <div class='month'>";      
echo "                                  <ul>";                                
echo "                                    <li >";
echo "                                      Semaine ".$Numsemaine."<br>";

echo "                                    </li>";
echo "                                  </ul>";
echo "                                </div>";  



    echo "<table id='diary' >";
   echo "<tr>";
   echo "   <td><b> Lundi M<b></td>";
   echo "   <td><b>Lundi S<b></td>";
   echo "   <td><b>Mardi M<b></td>";
   echo "   <td><b>Mardi S<b></td>";
   echo "   <td><b>Mercredi M<b></td>";
   echo "   <td><b>Mercredi S<b></td>";
   echo "   <td><b>jeudi M<b></td>";
   echo "   <td><b>jeudi S<b></td>";
   echo "   <td><b>Vendredi M<b></td>";
   echo "   <td><b>Vendredi S<b></td>";
   echo " </tr>";

    for($a=0;$a<$columns;$a++)
    {
        echo "<tr>";
        for($b=0; $b<10; $b++)
        {   

            if(!empty($table[$b][$a]))
            {
            $val = isset($table[$b][$a])?$table[$b][$a] :' ';
            echo "<td ><center><span class='badge badge-primary'><a href='InfoClient.php?id=$val'>".$val ."</a></span></center></td>";
            }else
            {
                echo "<td></td>";
            }

        }
        echo "</tr>";

    }
    echo "</table>"; 
    $z=$z+7;
}
    
    ?> 
<!-- fin du code -->                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- /# column -->
                    <!-- /# column -->
                  	
                    <!-- /# column -->
                     <!-- /# column -->
                    <div class="col-lg-12">

                        </div>
                        <!-- /# card -->
                    </div>
                </div>
                <!-- /# row -->
                <!-- End PAge Content -->
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