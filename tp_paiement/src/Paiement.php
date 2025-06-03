<?php
namespace App;

abstract class Paiement
{
    protected float $montant;
    public function __construct(float $montant)
    {
        $this->montant = $montant;
    }
    public function afficherMontant(): void
    {
        echo "Montant à payer : {$this->montant} euros\n";
    }
    abstract public function effectuerPaiement(): void;
}