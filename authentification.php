<?php
include('includes/connexion.php');
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Hello, world!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <?php if(isset($_GET['Authentification'])) {?>
    <div class="alert alert-danger">
  <i class="icon icon-times-circle icon-lg"></i>
  <center><strong>Erreur !</strong> Vos identifiants sont incorrects</center>
  </div>
  <?php }?>
    <div class="container">
      <h1>Authentification</h1>
        <div class="row">
            <form method="POST" action="includes/verif_connect.php">
                <div class="col-sm-10">
                    <div class="form-group">

                      <select class="form-control input-lg" name = "dpt">
                        <option value ="0">-- Département --</option>
                        <?php $req='SELECT * FROM departement_iut';
                              $response = $pdo->query($req);
                              while($donnee=$response->fetch())
                              {
                        echo "<option value=\"{$donnee['id_dep']}\">{$donnee['nom']}</option>";
                      } ?>
                      </select>

                       <input type='email' id='mail' name='mail' class='form-control' placeholder='mail'/>
                       <input type='password' id='password' name='password' class='form-control' placeholder='password'/>

                       <input type='checkbox' id='check' name='check'> Se souvenir de moi>
                       <input class="btn btn-primary" type="submit" name ="connexion" value="Se connecter"/>

                    </div>
                </div>

            </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
