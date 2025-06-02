<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\CompteBancaire;

$compte = new CompteBancaire(100000.00, "Manon Gomez-Mor");

echo "Titulaire du compte : " . $compte->getTitulaire() . "\n";

$compte->afficherSolde();

$compte->depot(250.00);
$compte->retrait(100.00);

$compte->afficherSolde();

$compte->calculerInterets(3.5);
