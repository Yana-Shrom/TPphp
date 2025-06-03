<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\PaiementCB;
use App\PaiementPaypal;
use App\PaiementVirement;
$paiements = [
    new PaiementCB(120.50),
    new PaiementPaypal(89.99),
    new PaiementVirement(300.00),
    new PaiementCB(42.75),
    new PaiementPaypal(199.95)
];
foreach ($paiements as $paiement) {
    $paiement->afficherMontant();
    $paiement->effectuerPaiement();
    echo "\n";
}
