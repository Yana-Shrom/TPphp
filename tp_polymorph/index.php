<?php

require __DIR__ . '/vendor/autoload.php';

use App\Formes\Cercle;
use App\Formes\Rectangle;
use App\Formes\Triangle;
use App\CalculateurAire;

$formes = [
    new Cercle(5),
    new Rectangle(10, 4),
    new Triangle(3, 4, 5)
];

$calculateur = new CalculateurAire();
$total = $calculateur->calculerAireTotale($formes);

echo "Aire totale: " . round($total, 2) . " m²" . PHP_EOL;
