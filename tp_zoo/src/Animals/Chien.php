<?php

namespace Zoo\Animals;

class Chien extends Animal {
    private string $race;

    public function __construct(string $nom, int $age, string $race) {
        parent::__construct($nom, $age);
        $this->race = $race;
    }

    public function decrire(): string {
        return parent::decrire() . " Je suis un chien de race {$this->race}.";
    }

    public function crier(): string {
        return "Wouf!";
    }
}
