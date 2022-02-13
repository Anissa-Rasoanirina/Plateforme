<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
	<div class="wrap">
	<form action="includes/SignUp.inc.php" method="post">
     	<h2>Create Account</h2>

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

        <label>Repeat-Password</label>
     	<input type="password" name="passRepeat" placeholder="Confirm Password" required><br>
		
        <div class="button_login">
        <input type="submit" name="register" value="REGISTER">
        </div>
        <button type="reset" name="resset">RESET</button>
		<div>
			<a href="index.php">-->BACK to SIGN IN</a>
		</div>
     </form>
	</div>   

	</center>
	
</body>
</html>