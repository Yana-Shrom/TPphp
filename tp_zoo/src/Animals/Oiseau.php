<?php

namespace Zoo\Animals;

class Oiseau extends Animal {
    private string $espece;

    public function __construct(string $nom, int $age, string $espece) {
        parent::__construct($nom, $age);
        $this->espece = $espece;
    }

    public function decrire(): string {
        return parent::decrire() . " Je suis un oiseau de l'espèce {$this->espece}.";
    }

    public function crier(): string {
        return "Cui-cui!";
    }
}
