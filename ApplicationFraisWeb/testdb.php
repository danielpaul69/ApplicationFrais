<?php
header('Access-Control-Allow-Origin: *');
$host_name = 'localhost';
$database = 'gsb';
$user_name = 'root';
$password = 'root';

$bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
// Connexion a la base de données => new PDO( ... )
$query = 'SELECT `id`, `mois`, `annee`, `etat_id`, `utilisateur_id` FROM fiche_frais';
$d = $bdd->query($query);
$fiches = $d->fetchAll();

$retour = [];
for ($i=0; $i < count($fiches); $i++) {
      $retour[$i]['id'] = $fiches[$i]['id'];
      $retour[$i]['mois'] = $fiches[$i]['mois'];
      $retour[$i]['annee'] = $fiches[$i]['annee'];
      $retour[$i]['etat_id'] = $fiches[$i]['etat_id'];
      $retour[$i]['utilisateur_id'] = $fiches[$i]['utilisateur_id'];
}


echo json_encode($retour);