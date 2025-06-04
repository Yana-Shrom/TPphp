<?php
namespace App\Controller;

class TacheController {
    public function ajouterTache($nom, $description) {
        $id = uniqid();
        $_SESSION['taches'][$id] = ['nom' => $nom, 'description' => $description];
    }

    public function getTaches() {
        return $_SESSION['taches'];
    }

    public function supprimerTache($id) {
        if (isset($_SESSION['taches'][$id])) {
            unset($_SESSION['taches'][$id]);
        }
    }
}