<?php

namespace App\Model;

class ChienDeChasse extends Chien {
    public function crier(): string {
        return "Aboiement de chasse !";
    }
}