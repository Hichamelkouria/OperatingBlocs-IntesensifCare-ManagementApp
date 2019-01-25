<?php
include("connexion.php");

 $nom=$_GET['nom'];
 $prenom=$_GET['prenom'];
 $prenom=$_GET['tel'];
 $cin=$_GET['cin'];
 $adresse=$_GET['adresse']; 


 $sql = "INSERT INTO `Client` (`Id_Client`, `Nom`, `Prenom`, `Tel`, `Adresse`, `CNI`) VALUES (NULL, '$nom', '$prenom', '$tel', '$adresse', '$cin')";
 $conn->exec($sql);
 header("location: index.php");
 ?>
