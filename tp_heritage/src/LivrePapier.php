<?php

namespace App;

class LivrePapier extends Livre
{
    private int $nombrePages;
    private bool $emprunte = false;

    public function __construct(string $titre, string $auteur, int $anneePublication, int $nombrePages)
    {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->nombrePages = $nombrePages;
    }

    public function afficherDetails(): void
    {
        parent::afficherDetails();
        echo "Nombre de pages: {$this->nombrePages}\n";
    }

    public function emprunter(): void
    {
        if ($this->emprunte) {
            echo "Ce livre papier est déjà emprunté.\n";
        } else {
            $this->emprunte = true;
            echo "Vous avez emprunté le livre papier avec succès.\n";
        }
    }
}
