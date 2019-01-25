<!DOCTYPE html>
<html>
<head>
	<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
</style>
</head>

<body>


<?php
$cars = array
  (
  array("Volvo",18),
  array("BMW",15,10),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
 $columns = count(current($cars));
 echo $columns;
 ?>


 <table >

<?php

echo "<tr>";

	echo "<td>".$cars[0][0]."</td>";
	echo "<td>"; 
	$test = isset($cars[0][1]) ? $cars[0][1] : ''; 
	echo $test."</td>";
	echo "<td>"; 
	$test = isset($cars[0][2]) ? $cars[0][1] : ''; 
	echo $test."</td>";
echo "</tr>";


echo "<tr>";
	echo "<td>".$cars[1][0]."</td>";
	echo "<td>".$cars[1][1]."</td>";
	echo "<td>".$cars[1][2]."</td>";
echo "</tr>";

echo "<tr>";
	echo "<td>".$cars[2][0]."</td>";
	echo "<td>".$cars[2][1]."</td>";
	echo "<td>".$cars[2][2]."</td>";
echo "</tr>";


echo "<tr>";
	echo "<td>".$cars[3][0]."</td>";
	echo "<td>".$cars[3][1]."</td>";
	echo "<td>".$cars[3][2]."</td>";
echo "</tr>";


?>
 </table>
</body>
</html>