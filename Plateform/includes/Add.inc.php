<?php
session_start();

//acces Base de données 
require_once("db_conn.inc.php");

//traitement
if(isset($_POST['Add'])){

    //recuperation 
	$CNE = $_POST['CNE'];
    $Nom   = $_POST['Nom'];
	$Prenom= $_POST['Prenom'];
	$Adresse = $_POST['Adresse'];
    $Ville   = $_POST['Ville'];
	$Email= $_POST['Email'];

    //taitement upload Photo
    error_reporting(0); 
    $filename = $_FILES["choosefile"]["name"]; //nom original coté client
    $tempname = $_FILES["choosefile"]["tmp_name"];  //nom temporaire coté Serveur
    $folder = "images/".$filename; //emplacement 

    //requete à executer  
	$sql="INSERT INTO `eleves`( `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`,`Photo`) VALUES ('$CNE','$Nom','$Prenom','$Adresse','$Ville','$Email','$folder')";
	$res = mysqli_query($mysqli, $sql);
	if (move_uploaded_file($tempname, $folder)) {
        header("Location:../bienvenue.php?succes= Succes");
		}else{	
            header("Location:../Add.php?Error=  Upload Photo  failed");
		}
	}
    if(!$res){
        header("Location:../Add.php?Error=  Operation  failed");
    
    }
?>