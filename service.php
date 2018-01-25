<?php
include "includes/connexion.php";

    $sql="INSERT INTO test(nom,prenom) VALUES('{$_GET['prenom']}','{$_GET['nom']}')";
    $prep=$pdo->exec($sql);

//var_dump($sql) ;
?>
