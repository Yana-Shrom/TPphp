<?php

namespace App;

class Livre
{
    protected string $titre;
    protected string $auteur;
    protected int $anneePublication;

    public function __construct(string $titre, string $auteur, int $anneePublication)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
    }

    public function afficherDetails(): void
    {
        echo "Titre: {$this->titre}\n";
        echo "Auteur: {$this->auteur}\n";
        echo "Année de publication: {$this->anneePublication}\n";
    }
}
