<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\TacheController;
use App\View\TacheVue;

$controller = new TacheController();
$vue = new TacheVue();

if (!isset($_SESSION['taches'])) {
    $_SESSION['taches'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ajouter'])) {
        $controller->ajouterTache($_POST['nom'], $_POST['description']);
    } elseif (isset($_POST['supprimer'])) {
        $controller->supprimerTache($_POST['id']);
    }
}

$taches = $controller->getTaches();
$vue->afficherTaches($taches);
?>

<form method="POST">
    <input type="text" name="nom" placeholder="Nom de la tâche" required>
    <input type="text" name="description" placeholder="Description" required>
    <button type="submit" name="ajouter">Ajouter</button>
</form>