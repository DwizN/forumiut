<?php
session_start();
if(empty($_SESSION['mail']))
{
  header('Location: authentification.php');
  exit();
}
 ?>


<!doctype html>
<html lang="fr">
<head>

  <title>Hello, world!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <div class ="in">
<?php include 'includes/header.php' ; ?>
<a href ="disconnect.php">Déconnecter</a><br>

<!-- REQUETE BDD pour les graphiques de merde -->
<?php
include 'includes/connexion.php';
    /* GRAPHIQUE  */
    $sqlETUDE = "SELECT DISTINCT COUNT(*) AS sit_eleveR FROM eleve ";
    $res = $pdo->query($sqlETUDE);
    $result= $res->fetch();
    $resultETUDE=$result['sit_eleveR'];






    $sqlSEXE="SELECT (SELECT COUNT(*) FROM eleve WHERE SEXE='M') as MALE, (SELECT COUNT(*) FROM eleve WHERE SEXE='F') as FEMELLE";
    $res = $pdo->query($sqlSEXE);
    $result= $res->fetch();
    $resultSEXEFemelle=$result['FEMELLE'];
    $resultSEXEMale=$result['MALE'];
    $resultSM=($resultSEXEMale/($resultSEXEMale+$resultSEXEFemelle))*100;
    $resultSF=($resultSEXEFemelle/($resultSEXEFemelle+$resultSEXEMale))*100;

?>



<div id="CheckBoxes">

   <label class="container">___ETUDE
        <input  id="checkETUDE" type="checkbox" name="ETUDE" onclick="checkboxFunction(this.id)">
        <span class="checkmark"></span>
    </label>
    <label class="container">____SEXE
        <input id="checkSEXE" type="checkbox" class="checkbb" name="SEXE" onclick="checkboxFunction(this.id)">
        <span class="checkmark"></span>
    </label>
    <label class="container">____CHOIX DU DEPARTEMENT
        <input  id="checkDEPARTEMENT" type="checkbox" name="DEPARTEMENT" onclick="checkboxFunction(this.id)">
        <span class="checkmark"></span>
    </label>

</div>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart()
      {
        var fille= "<?PHP echo $resultSF;?>" ;
        var garcon= "<?PHP echo $resultSM;?>" ;

        // Chart 1
        var data = google.visualization.arrayToDataTable([['Fille', 'Garcon'],["Fille",Math.round(fille)],["Garçon",Math.round(garcon)]]);
        var options = {
          title: "graphique fille garcon "
        };
        var chart = new google.visualization.PieChart(document.getElementById("grapheSEXE"));
        chart.draw(data, options);
      }

  </script>



   <div id="grapheSEXE" style=" visibility: hidden; width: 50%; height: 500px;">&nbsp;</div>
   <div id="grapheETUDE" style=" visibility: hidden; width: 50%; height: 500px;">&nbsp;</div>

<div id="txtHint"><b></b></div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<script type="text/javascript">
  function checkboxFunction(id)
  {
    if(id=="checkSEXE")
    {
      var cache=document.getElementById("grapheSEXE");
      if(document.getElementById(id).checked){
         cache.style.visibility="visible";
          return true;
      }
      else
     {   cache.style.visibility="hidden";
          return false;
    }
  }
  }

</script>


</div>
</body>
</html>
