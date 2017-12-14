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
<script>
function showUser(str) {
    if (str == "" | str == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<body>
<?php include 'includes/header.php' ; ?>
<a href ="disconnect.php">Déconnecter</a>

                <div class="form-group">
                    <div class="menu">
                  <select class="form-control input-lg" name="users" onchange="showUser(this.value)">
                    <option value ="0">-- Forum --</option>
                    <?php $req='SELECT forum.id_for, forum.lieu, forum.date_forum, intervenant.nom, intervenant.prenom FROM forum INNER JOIN intervenant ON (forum.id_interv = intervenant.id_int)';
                          $response = $pdo->query($req);
                          while($donnee=$response->fetch())
                          {
                    echo "<option value=\"{$donnee['id_for']}\">{$donnee['date_forum']} à {$donnee['lieu']} par {$donnee['prenom']} {$donnee['nom']}</option>";
                  } ?>
                  </select>
                </div>
              </div>

              <form>

<div id="txtHint"><b>Person info will be listed here...</b></div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
