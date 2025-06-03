<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\LivrePapier;
use App\Ebook;

$livrePapier = new LivrePapier("1984", "George Orwell", 1949, 328);
$ebook = new Ebook("Clean Code", "Robert C. Martin", 2008, "PDF");

echo "--- Détails Livre Papier ---\n";
$livrePapier->afficherDetails();
$livrePapier->emprunter();
$livrePapier->emprunter();

echo "\n--- Détails Ebook ---\n";
$ebook->afficherDetails();
$ebook->emprunter();
$ebook->emprunter();
