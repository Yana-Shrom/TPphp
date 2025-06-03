<?php
namespace App;
class PaiementVirement extends Paiement
{
    public function effectuerPaiement(): void
    {
        echo "Paiement par virement bancaire effectué.\n";
    }
}