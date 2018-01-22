<!DOCTYPE html>
<html>
<head>
</head>
<body>
<ul class="buttons"><a class="infor" href="index.php">Informations recueillies</a>
    <a class="stats" href="index.php">Statistiques</a></ul>
<?php
include 'includes/connexion.php';
$q = intval($_GET['q']);


$req="SELECT * FROM eleve WHERE id_forum = '".$q."'";
$response = $pdo->query($req);

echo "<table>
<tr>
<th>Prénom - Nom </th>
<th>Date</th>
<th>Mail</th>
<th>Situation</th>
<th>Dpt</th>
<th>Ville</th>
<th>Connait IUT?</th>
<th>Si oui, comment</th>
<th>Infos</th>

</tr>";

while($donnee=$response->fetch()) {
    echo "<tr>";
    echo "<td>" . $donnee['nom_eleve'] . $donnee['prenom_eleve'] ."</td>";
    echo "<td>" . $donnee['dn_eleve'] . "</td>";
    echo "<td>" . $donnee['mail_eleve'] . "</td>";
    echo "<td>" . $donnee['sit_eleve'] . "</td>";
    echo "<td>" . $donnee['dep_eleve'] . "</td>";
    echo "<td>" . $donnee['ville_eleve'] . "</td>";
    echo "<td>" . $donnee['q1_eleve'] . "</td>";
    echo "<td>" . $donnee['q2_eleve'] . "</td>";
    echo "<td>" . $donnee['q3_eleve'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
