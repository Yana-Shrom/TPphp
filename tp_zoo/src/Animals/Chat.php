<?php

namespace Zoo\Animals;

class Chat extends Animal {
    private string $couleur;

    public function __construct(string $nom, int $age, string $couleur) {
        parent::__construct($nom, $age);
        $this->couleur = $couleur;
    }

    public function decrire(): string {
        return parent::decrire() . " Je suis un chat de couleur {$this->couleur}.";
    }

    public function crier(): string {
        return "Miaou!";
    }
}
