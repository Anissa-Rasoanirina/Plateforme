<?php
session_start(); 
//Accées aux Base de données
require_once("db_conn.inc.php");
//Traitement si le formulaire est envoyé
if(isset($_POST['send'])){
    $CNE = $_POST['CNE'];
    $sql="DELETE FROM `eleves` WHERE CNE= $CNE";
    $res = mysqli_query($mysqli, $sql);
	if($res)
		{
         header("Location:../delete.php?succes=Operation Success");			
		}
    else{         
        header("Location:../bienvenue.php?Error=Something went wrong");			
    }

}