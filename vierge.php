<?php

// Définition de la timezone
date_default_timezone_set('Europe/Paris');

// Création des objets DateTime pour la date actuelle et la date de destination
$presentTime     = new DateTime();
$destinationTime = new DateTime('2024-05-21 12:30:00');

// Affichage des dates au format demandé
echo "Date actuelle : " . $presentTime->format('M d Y A h i') . "\n";
echo "<br>";
echo "Date de destination : " . $destinationTime->format('M d Y A h i') . "\n";

// Calcul de la durée entre les deux dates
$duration = $presentTime->diff($destinationTime);
echo "<br>";
//résultat qui affiche le nombre d'années, mois, jours, heures et minutes entre les deux dates.
echo "Durée entre les deux dates : ";
echo $duration->format('%y années, %m mois, %d jours, %h heures et %i minutes');

// Calcul de la durée entre les deux dates en minutes
$interval = $presentTime->diff($destinationTime);
$minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;

// Calcul du nombre de litres de carburant nécessaire
$litres = ceil($minutes / 10000);
echo "<br>";
// Affichage du résultat
echo "Durée entre les deux dates : " . $minutes . " minutes<br>";
echo "Nombre de litres de carburant nécessaire : " . $litres;
?>