<?php
require ('./ConnectionMySQL.php') ;

$sql = "select nom, prenom from ELEVES" ;
$connection = getConnection();
$instructions = $connection->prepare($sql);
$instructions->execute();
$resultat = $instructions->fetchAll() ;
echo("Liste des élèves de la classe de madame Maitresse <br>");
foreach ($resultat as $ligne) {
    echo "L’élève $ligne[0] $ligne[1]";
    echo "<br>";
}
