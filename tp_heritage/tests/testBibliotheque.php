<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\LivrePapier;
use App\Ebook;
use App\Bibliotheque;

$livre1 = new LivrePapier("Le Petit Prince", "Antoine de Saint-Exupéry", 1943, 96);
$livre2 = new Ebook("L'art de la guerre", "Sun Tzu", -500, "ePub");

$bibliotheque = new Bibliotheque();
$bibliotheque->ajouterLivre($livre1);
$bibliotheque->ajouterLivre($livre2);

echo "--- Inventaire de la bibliothèque ---\n";
$bibliotheque->afficherInventaire();

echo "\n--- Tentative d'emprunt des livres ---\n";
$bibliotheque->emprunterLivre(0);
$bibliotheque->emprunterLivre(1);
$bibliotheque->emprunterLivre(1);
