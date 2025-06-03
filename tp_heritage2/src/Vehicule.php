<?php

namespace App;

class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $annee;
    protected int $kilometrage;
    protected ?string $dernierEntretien = null;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }

    public function afficherInfos(): void
    {
        echo "Marque: {$this->marque}\n";
        echo "Modèle: {$this->modele}\n";
        echo "Année: {$this->annee}\n";
        echo "Kilométrage: {$this->kilometrage} km\n";
    }

    public function programmerEntretien(string $date): void
    {
        $this->dernierEntretien = $date;
    }

    public function afficherProchainEntretien(): void
    {
        if ($this->dernierEntretien) {
            echo "Dernier entretien: {$this->dernierEntretien}\n";
        } else {
            echo "Aucun entretien programmé.\n";
        }
    }
}
