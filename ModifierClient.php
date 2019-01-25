<?php
include("connexion.php");
 $id =$_GET['id'];
 $nom=$_GET['nom'];
 $prenom=$_GET['prenom'];
 $tel=$_GET['tel'];
 $cni=$_GET['cni'];
 $adresse=$_GET['adresse']; 

 $sql = "UPDATE `Client` SET `Nom`='$nom' , `Prenom`='$prenom', `Tel`='$tel' , `Adresse`='$adresse' , `CNI`='$cni' WHERE `Id_Client` = '$id' ";
 $conn->exec($sql);
 header("location: gerer.php");
 ?>
