<?php

require __DIR__ . '/vendor/autoload.php';

use Zoo\Animals\Chien;
use Zoo\Animals\Chat;
use Zoo\Animals\Oiseau;

$animaux = [
    new Chien("Rex", 5, "Berger Allemand"),
    new Chat("Mia", 3, "Noir"),
    new Oiseau("Titi", 1, "Canari")
];

foreach ($animaux as $animal) {
    echo $animal->decrire() . PHP_EOL;
    echo "Cri: " . $animal->crier() . PHP_EOL . PHP_EOL;
}
