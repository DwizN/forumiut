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
<?php include 'includes/header.php' ; ?>
<div class="in">
<a href ="disconnect.php">Déconnecter</a><br>

  <?php

                  echo '<div id="departements">';
                  echo "<label class='champ'>Départements : </label>";
                    $req='SELECT * FROM departement_iut LIMIT 8';
                          $response = $pdo->query($req);
                          while($donnee=$response->fetch())
                          {
                          //  echo"<label class ='label_check' ><input type='checkbox' name='checkbox' value=".$donnee[0].">".$donnee[1]."</label>";
                            echo '<label value='.$donnee[0].' name ="label_check" class="label_check" style="background-color:'. couleurIndicateur($donnee[0]) .'"><'.$donnee[1].'>'.$donnee[1].'</label>';


}
echo '</div>';

?>


<div id="txtHint"><b></b></div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
		$(document).ready(function(){
			$(".label_check").click(function(){
				if($(this).css('background-color') == 'rgb(204, 204, 204)'){
          $(this).css('background-color','rgb(50, 50, 204)');

				}else{
					$(this).css('background-color','rgb(204, 204, 204)');


				}
			});

		});
	</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
  $(document).ready(function(){
  $(".ajax").change(function(){
  var salle = $("#salle").val();
  var jour = $("#jour").val();
  if( salle != 0 && jour != 0 ){
  $.ajax({
  type:"POST",
  url: "ajax.php",
  data: "salle="+salle+"&jour="+jour,
  success: function(data){
  $("#heures").html(data);
  }
  });
  }
  });
  });
  </script>
</body>
</html>
