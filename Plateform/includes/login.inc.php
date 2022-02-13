<?php 
session_start();
//acces Base de données 
require_once("db_conn.inc.php");

if (isset($_POST['user']) && isset($_POST['pass'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['user']);
	$pass = validate($_POST['pass']);

	if (empty($user)) {
		header("Location:../index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location:../index.php?error=Password is required");
	    exit();
	}
    else
    {
		$sql = "SELECT user, passwd
        FROM compte
        WHERE user ='".addslashes($user)."' AND passwd = '".$pass."'";
        $res = mysqli_query($mysqli, $sql);
        $rowcount = mysqli_num_rows($res);
        if($rowcount===1){
            $_SESSION['user']=$_POST['user'];
            	header("Location:../bienvenue.php?succes= Connected");
		        exit();
        }
        else{
			header("Location:../index.php?error=Incorect User name or password");
		    exit();
		}
	}
	
}
else{
	header("Location:../index.php");
	exit();
}
?>