<?php

header('Access-Control-Allow-Origin: *');
$host_name = 'localhost';
$database = 'gsb';
$user_name = 'root';
$password = 'root';

$bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);

$query = $bdd->prepare('SELECT `id`, `mois`, `annee` FROM fiche_frais WHERE utilisateur_id = :utilisateur ORDER BY annee DESC, mois DESC');
$query->bindParam(':utilisateur', $_GET['utilisateur']);
$query->execute();
$fiches = $query->fetchAll();

$retour = [];
for ($i=0; $i < count($fiches); $i++) {
      $retour[$i]['id'] = $fiches[$i]['id'];
      $retour[$i]['mois'] = $fiches[$i]['mois'];
      $retour[$i]['annee'] = $fiches[$i]['annee'];
}


echo json_encode($retour);
