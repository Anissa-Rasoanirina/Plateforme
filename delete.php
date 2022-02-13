<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<div class="wrap">
		<form action="includes/delete.inc.php" method="post">
     	<h2>LOGIN</h2>

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

         <div>
			<label >CNE</label>
			<input  type="text" name ="CNE" placeholder="Student CNE"  required>
		</div>
		<div>
        <input type="submit" name="send" value="SEND">
        </div>
    <div>
		<a href="Bienvenue.php">BACK to LIST</a>
	</div>
    </form>

		</div>
	</center>
     
</body>
</html>