<?php
include("connexion.php");
include("function.php");
$dpt = $_SESSION['dpt'];
$req="SELECT nom FROM departement_iut WHERE id_dep = '{$dpt}'";
      $response = $pdo->query($req);
      while($donnee=$response->fetch())
{
?>

  <?php
  echo '<div id="header">';
  echo '<center><img src="./img/iutlittoral.jpg" width = 900px <center>';
  echo '<div class="menu" style="background-color:'. couleurIndicateur($dpt) .'">';
  echo '<h1>'. $donnee[0] .'</h1>';

  echo '</div></div>';
}
  ?>
