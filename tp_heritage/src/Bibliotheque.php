<?php

namespace App;

class Bibliotheque
{
    private array $livres = [];

    public function ajouterLivre(Livre $livre): void
    {
        $this->livres[] = $livre;
    }

    public function afficherInventaire(): void
    {
        foreach ($this->livres as $index => $livre) {
            echo "\nLivre #" . ($index + 1) . ":\n";
            $livre->afficherDetails();
        }
    }

    public function emprunterLivre(int $index): void
    {
        if (!isset($this->livres[$index])) {
            echo "Livre non trouvé à l'index $index.\n";
            return;
        }

        $livre = $this->livres[$index];

        if (method_exists($livre, 'emprunter')) {
            $livre->emprunter();
        } else {
            echo "Ce type de livre ne peut pas être emprunté.\n";
        }
    }
}
