<?php
namespace App;
class PaiementPaypal extends Paiement
{
    public function effectuerPaiement(): void
    {
        echo "Paiement via PayPal effectué.\n";
    }
}