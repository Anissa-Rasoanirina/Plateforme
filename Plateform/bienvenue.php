<?php
session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gestion des éleves GINF1:2021-2022</title>
</head>
<body>
<?php
    require_once("includes/db_conn.inc.php");
?>
<div >
  <h1> Liste des éleves au GINF1 de cette années:</h1>
  
  <!-- Affichage de Notification -->
  <?php  if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <?php
		  if (isset($_GET['succes'])) { 
		?>
     		<p class="succes"><?php echo $_GET['succes']; ?></p>
     	<?php } ?>
    <!-- Affichage de Notification -->

  <table class="tableAction">
    <tr>
      <td><button><a href="add.php">ADD Student</a></button> </td>
      <td><button><a href="delete.php">DELETE</a></button></td>
      <td><button><a href="includes/deconnexion.php">LOGOUT</a></button></td>
    </tr>
  </table>
<?php 
  $sql="SELECT  `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`,`photo`,`etat` FROM `eleves` ORDER BY ID_eleve";
  $eleves=mysqli_query($mysqli,$sql);
?>
  <table  id="tableList">
  <tr>
    <th>CNE</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Ville</th>
    <th>Email</th>
    <th>Photo</th>
  </tr>
<?php
foreach($eleves as $row){  
  echo"<tr>
  <td>".$row['CNE']."</td>
  <td>".$row['Nom']."</td>
  <td>".$row['Prenom']."</td>
  <td>".$row['Adresse']."</td>
  <td>".$row['Ville']."</td>
  <td>".$row['email']."</td>
  <td><img src=" .$row["photo"]." height=\"100px\" width=\"100px\"\/> </td>
  </tr>";
 }
?>
</div>              
</body>
</html>

<?php
}
 else{
    header('location:index.html?reponse:\"violation d\'accées \"');
  }
?>