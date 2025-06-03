<?php

namespace App;

class Voiture extends Vehicule
{
    private int $nombrePortes;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage, int $nombrePortes)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->nombrePortes = $nombrePortes;
    }

    public function afficherInfos(): void
    {
        parent::afficherInfos();
        echo "Nombre de portes: {$this->nombrePortes}\n";
    }
}
