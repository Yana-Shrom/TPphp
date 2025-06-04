<?php
namespace App\View;

class TacheVue {
    public function afficherTaches($taches) {
        echo "<ul>";
        foreach ($taches as $id => $tache) {
            echo "<li><strong>{$tache['nom']}:</strong> {$tache['description']} 
                <form method='POST' style='display:inline'>
                    <input type='hidden' name='id' value='{$id}'>
                    <button type='submit' name='supprimer'>Supprimer</button>
                </form>
            </li>";
        }
        echo "</ul>";
    }
}