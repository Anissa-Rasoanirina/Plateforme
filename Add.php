<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<div class="wrap">
		<form action="includes/Add.inc.php" method="post" enctype="multipart/form-data">
     	<h2>ADD Student</h2>

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

     	<div>
			<label >CNE</label>
			<input  type="number" name ="CNE" placeholder=" CNE"  required>
		</div>
             <div>
				<label >Nom</label>
				<input  type="text" name ="Nom" placeholder="nom"  required>
			</div>
            <div>
			    <label >Prenom</label>
			    <input  type="text" name ="Prenom" placeholder="Prenom" required>
			</div>  
			<div >
				<label >Adresse</label>
				<input  type="text" name="Adresse" placeholder="Adresse" required>
			</div> 				
			<div>
				<label >Ville</label>
				<input type="text" name="Ville" placeholder="Ville" required>
		    </div>                
            <div>
				<label >Email</label>
				<input type="email" name ="Email" placeholder=" Email"  required>
			</div>  
			<div>
				<label >Photo</label>
				<input type="file" name ="choosefile">
				<input type="hidden" name="max_file_size" value="100000">
			</div>
		<div>
            <input type="submit" name="Add" value="AJOUTER">
        </div>
        <button type="reset" name="resset">Annuler</button>
		<div>
			<a href="Bienvenue.php">BACK to LIST</a>
		</div>
    </form>

		</div>
	</center>
     
</body>
</html>