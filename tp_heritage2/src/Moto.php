<?php

namespace App;

class Moto extends Vehicule
{
    private int $cylindree;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, int $cylindree)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->cylindree = $cylindree;
    }

    public function afficherInfos(): void
    {
        parent::afficherInfos();
        echo "Cylindrée: {$this->cylindree} cc\n";
    }
}
