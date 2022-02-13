<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<center>
	<div class="wrap">
	<form action="includes/login.inc.php" method="post">
     	<h2>LOGIN</h2>

		<!-- Affichage de Notification -->
     	<?php
		  if (isset($_GET['error'])) { 
		?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		 <?php
		  if (isset($_GET['succes'])) { 
		?>
     		<p class="succes"><?php echo $_GET['succes']; ?></p>
     	<?php } ?>
		<!-- Affichage de Notification -->

     	<label>User Name</label>
     	<input type="text" name="user" placeholder="User Name" required><br>

     	<label>Password</label>
     	<input type="password" name="pass" placeholder="Password" required><br>
		
		<div>
        <input type="submit" name="login" value="LOGIN">
        </div>
        <button type="reset" name="resset">RESET</button> <br><br>
		<div>
			<span>or go to </span>
			<a href="signUp.php">SIGN UP</a>
		</div>
     </form>
	</div>  

	</center>
	
</body>
</html>