
<?php
session_start(); 
//Accées aux Base de données
require_once("db_conn.inc.php");
//Traitement si le formulaire est envoyé
if(isset($_POST['register'])){
    $user = $_POST['user'];
    $pass   = $_POST['pass'];
	$passRepeat= $_POST['passRepeat'];
    //if confirm Password don't match
    if((isset($pass)) && ($pass!=$passRepeat)) {
        header("Location:../signUp.php?error=Password don't match");
	}
	else
	{
		$sql = "SELECT user, passwd
 		FROM compte
 		WHERE user ='".addslashes($user)."' AND passwd = '".$pass."'";
		$res = mysqli_query($mysqli, $sql);
		$rowcount = mysqli_num_rows($res);
        //Account Already exist
		if($rowcount>=1)
		{
            header("Location:../signUp.php?error=This account exist already");			
		}
		else{
			$sql="INSERT INTO `compte` (`user`, `passwd`) VALUES ( '$user','$pass')";
			$res = mysqli_query($mysqli, $sql);
			if($res)
			{ 
                header("Location:../index.php?succes=Your account has been saved");
			}
			else{
                header("Location:../signUp.php?error=Register");
			}
        }
	}	
			
}
?>