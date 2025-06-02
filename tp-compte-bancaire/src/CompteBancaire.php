<?php

namespace App;

class CompteBancaire
{
    private float $solde;
    private string $titulaire;

    public function __construct(float $soldeInitial, string $titulaire)
    {
        if ($soldeInitial < 0) {
            throw new \InvalidArgumentException("Le solde non négatif.");
        }
        $this->solde = $soldeInitial;
        $this->titulaire = $titulaire;
    }

    public function depot(float $montant): void
    {
        if ($montant <= 0) {
            echo "depot > 0 !\n";
            return;
        }
        $this->solde += $montant;
    }

    public function retrait(float $montant): void
    {
        if ($montant <= 0) {
            echo "Le montant du retrait doit être positif.\n";
            return;
        }
        if ($montant > $this->solde) {
            echo "Fonds insuffisants pour ce retrait.\n";
            return;
        }
        $this->solde -= $montant;
    }

    public function afficherSolde(): void
    {
        echo "Solde actuel : {$this->solde} €\n";
    }

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function calculerInterets(float $tauxAnnuel): void
    {
        if ($tauxAnnuel < 0) {
            echo "Le taux d'intérêt doit être positif.\n";
            return;
        }

        $interets = $this->solde * $tauxAnnuel / 100;
        echo "Intérêts annuels calculés : {$interets} €\n";
    }
}
