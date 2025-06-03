<?php

namespace Zoo\Animals;

abstract class Animal {
    protected string $nom;
    protected int $age;

    public function __construct(string $nom, int $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function decrire(): string {
        return "Je suis un animal nommé {$this->nom}, j'ai {$this->age} ans.";
    }

    abstract public function crier(): string;
}
