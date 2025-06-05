<?php

namespace App\Model;

class Chien implements Animal {
    public function __construct(
        public string $nom,
        public int $age,
        public string $race,
        public string $couleur,
        public string $sexe,
        public float $poids,
        private ?string $photo = null
    ) {}

    public function afficherDetails(): string {
        return "$this->nom, $this->age ans, $this->race, $this->couleur, $this->sexe, $this->poids kg";
    }

    public function ageHumain(): int {
        return $this->age * 7;
    }

    public function crier(): string {
        return "Wouf !!!";
    }

    public function estSurpoids(): bool {
        return $this->poids > 20;
    }

    public function setPhoto(?string $photo): void{
    $this->photo = $photo;
    }

    public function getPhoto(): ?string {
        return $this->photo;
    }
}
