<html>
  <head>
    <style type="text/css">
    table {
    	border-collapse: collapse;
    }        
    td {
    	border: 1px solid green;
    	padding: 0 0.5em;
    }        
    </style>
  </head>
  <body>
	<?php
	include 'reader.php';
    $excel = new Spreadsheet_Excel_Reader();
	?>


	<?php
$count =0;
$excel->read('soins.xls');
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


$x=1;
$ligne1 = Array();
$ligne2 = Array();
 while($x<=$excel->sheets[0]['numCols']) {
        if(isset($excel->sheets[0]['cells'][$y][$x]))
        {
            $cell = $excel->sheets[0]['cells'][$y][$x];
           // echo "<t>val : $cell <br><t>";
            array_push($ligne1, $cell); 
        }
                    $x++;
      }
 $y++;
 $x=1;
  while($x<=$excel->sheets[0]['numCols']) {
        if(isset($excel->sheets[0]['cells'][$y][$x]))
        {
            $cell = $excel->sheets[0]['cells'][$y][$x];
           // echo "<t>val : $cell <br><t>";
            array_push($ligne2, $cell); 
        }
                    $x++;
      }
$count++;
echo "count : $count <br><br>";
	echo "<table>";
   echo "<tr>";
   echo " 	<td> Lundi Matin</td>";

   echo " 	<td> Mardi Matin</td>";

   echo " 	<td> Mercredi Matin </td>";

   echo "		<td> jeudi Matin </td>";

   echo " 	<td> Vendredi Matin </td>";
   echo " 	<td> samedi Matin </td>";
   echo " 	<td> dimanche Matin </td>";

  
   echo "<tr>";
    for($a=0;$a<7;$a++)
    {
    	$val = isset($ligne1[$a])?$ligne1[$a]: ' ';
    	echo "<td>".$val ."</td>";
    }
     echo " </tr>";
        echo "<tr>";
    for($a=0;$a<7;$a++)
    {
    	$val = isset($ligne2[$a])?$ligne2[$a]: ' ';
    	echo "<td>".$val ."</td>";
    }
     echo " </tr>";
    echo "</table>"; 

$y+=5;


    }
    
    ?> 
