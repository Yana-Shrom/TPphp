<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Voiture;
use App\Moto;
use App\Camion;

$voiture = new Voiture("Toyota", "Corolla", 2018, 60000, 5);
$moto = new Moto("Yamaha", "MT-07", 2020, 15000, 689);
$camion = new Camion("Mercedes", "Actros", 2015, 120000, 10000);

echo "--- VOITURE ---\n";
$voiture->afficherInfos();
$voiture->programmerEntretien("01/06/2025");
$voiture->afficherProchainEntretien();

echo "\n--- MOTO ---\n";
$moto->afficherInfos();
$moto->programmerEntretien("15/06/2025");
$moto->afficherProchainEntretien();

echo "\n--- CAMION ---\n";
$camion->afficherInfos();
$camion->programmerEntretien("20/06/2025");
$camion->afficherProchainEntretien();
$camion->charger(4000);
$camion->charger(7000);
