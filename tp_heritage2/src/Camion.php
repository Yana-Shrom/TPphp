<?php

namespace App;

class Camion extends Vehicule
{
    private int $poidsMax;
    private int $chargeActuelle;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, int $poidsMax)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->poidsMax = $poidsMax;
        $this->chargeActuelle = 0;
    }

    public function afficherInfos(): void
    {
        parent::afficherInfos();
        echo "Poids max: {$this->poidsMax} kg\n";
        echo "Charge actuelle: {$this->chargeActuelle} kg\n";
    }

    public function charger(int $poids): void
    {
        if ($this->chargeActuelle + $poids > $this->poidsMax) {
            echo "Erreur : surcharge ! Charge actuelle: {$this->chargeActuelle} kg, tentative de chargement: $poids kg.\n";
        } else {
            $this->chargeActuelle += $poids;
            echo "Nouveau chargement ajouté. Charge actuelle: {$this->chargeActuelle} kg\n";
        }
    }
}
