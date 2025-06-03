<?php

namespace App;

class Ebook extends Livre
{
    private string $format;
    private bool $emprunte = false;

    public function __construct(string $titre, string $auteur, int $anneePublication, string $format)
    {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->format = $format;
    }

    public function afficherDetails(): void
    {
        parent::afficherDetails();
        echo "Format: {$this->format}\n";
    }

    public function emprunter(): void
    {
        if ($this->emprunte) {
            echo "Cet ebook est déjà emprunté.\n";
        } else {
            $this->emprunte = true;
            echo "Vous avez emprunté l'ebook avec succès.\n";
        }
    }
}
