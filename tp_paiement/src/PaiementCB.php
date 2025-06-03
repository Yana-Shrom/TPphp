<?php
namespace App;
class PaiementCB extends Paiement
{
    public function effectuerPaiement(): void
    {
        echo "Paiement par carte bancaire effectué.\n";
    }
}