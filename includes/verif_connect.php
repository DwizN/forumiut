<?php
include 'connexion.php';

session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)

    if(empty($_POST['dpt'])) {
        header("location:../authentification.php?Authentification=fail");
    } else {
      if(empty($_POST['mail'])) {
          header("location:../authentification.php?Authentification=fail");
        } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
          if(empty($_POST['password'])) {
              header("location:../authentification.php?Authentification=fail");
            } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
              $dpt = htmlentities($_POST['dpt'], ENT_QUOTES, "ISO-8859-1");
              $mail = htmlentities($_POST['mail'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
              $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
              $password = md5($password);
              $Requete = $pdo->query("SELECT * FROM utilisateurs WHERE dpt_user = '".$dpt."' AND mail_user = '".$mail."' AND pass_user = '".$password."'");
              $res = $Requete->fetchAll();

              if (count($res) == 0)
              {
                header("location:../authentification.php?Authentification=fail");
              }
                  else {
                    // on ouvre la session avec $_SESSION:
                      $_SESSION['mail'] = $mail; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                      $_SESSION['dpt'] = $dpt;
                      header("location:../index.php");
                    }
                  }
                }
              }
            }

?>
