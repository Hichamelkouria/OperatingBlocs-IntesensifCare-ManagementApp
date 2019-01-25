<?php
include("connexion.php");
 $id =$_GET['id'];
 $sql = "DELETE FROM `Client` WHERE `Id_Client` = '$id' ";
 $conn->exec($sql);
 header("location: gerer.php");
 ?>
