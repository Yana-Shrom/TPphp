<?php

namespace App\Formes;

class Rectangle extends FormeGeometrique {
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerAire(): float {
        return $this->longueur * $this->largeur;
    }
}
