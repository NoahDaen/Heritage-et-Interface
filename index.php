<?php
include 'Comparable.php';
include 'ISport.php';
include 'sport.php';
include 'SportBallon.php';
include 'SportRelais.php';
include 'Club.php';

echo "Projet Heritage et Interface<br>";


$listClub[0] = new Club(1, "PSG",200);
$listClub[1] = new Club(2,"OL",150);
$listClub[2] = new Club(3,"Saint-Etienne",100);

$listClub[0]->AjouterSport(new Sport("Natation", 7));
$listClub[0]->AjouterSport(new Sport("Tennis", 2));

$listClub[1]->AjouterSport(new Sport("E-Sport", 6));
$listClub[1]->AjouterSport(new SportRelais("3*500",1, 1500));
$listClub[1]->AjouterSport(new SportRelais("100",1, 100));

$listClub[2]->AjouterSport(new SportRelais("200",1, 200));
$listClub[2]->AjouterSport(new SportBallon("Basketball",5, 28, 15));
$listClub[2]->AjouterSport(new SportBallon("Footballon",11, 105, 75));
$listClub[2]->AjouterSport(new SportBallon("Handball",8, 28, 15));

