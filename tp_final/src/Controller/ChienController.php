<?php

namespace App\Controller;

use App\Model\Chenil;
use App\Model\Chien;
use App\Model\ChienDeChasse;
use App\Exception\ValidationException;
use App\View\ViewRenderer;

class ChienController {

    private Chenil $chenil;

    public function __construct() {
        $this->chenil = Chenil::getInstance();
    }

    public function list() {
        $chiens = $this->chenil->getChiens();
        ViewRenderer::render('listeChiensView', ['chiens' => $chiens]);
    }

    public function create() {
        ViewRenderer::render('createChienForm');
    }

    public function store() {
        try {
            $this->validateForm($_POST);

            $type = $_POST['type'] ?? 'chien';

            if ($type === 'chien_de_chasse') {
                $chien = new ChienDeChasse(...$this->getChienParams());
            } else {
                $chien = new Chien(...$this->getChienParams());
            }

            if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
                $photo = $this->handleUpload($_FILES['photo']);
                $chien->setPhoto($photo);
            }

            $this->chenil->addChien($chien);
            header('Location: ?action=list');
        } catch (ValidationException $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: ?action=create');
        } catch (\Throwable $e) {
            $_SESSION['error'] = "Erreur technique : " . $e->getMessage();
            header('Location: ?action=create');
        }
    }

    public function edit() {
        $chien = $this->chenil->getChien($_GET['id']);
        ViewRenderer::render('editChienForm', ['chien' => $chien, 'id' => $_GET['id']]);
    }

    public function update() {
    $type = $_POST['type'] ?? 'chien';

    if ($type === 'chien_de_chasse') {
        $chien = new \App\Model\ChienDeChasse(
            $_POST['nom'],
            $_POST['age'],
            $_POST['race'],
            $_POST['couleur'],
            $_POST['sexe'],
            $_POST['poids'],
            null
        );
    } else {
        $chien = new \App\Model\Chien(
            $_POST['nom'],
            $_POST['age'],
            $_POST['race'],
            $_POST['couleur'],
            $_POST['sexe'],
            $_POST['poids'],
            null
        );
    }

    $id = $_POST['id'];
    $chienActuel = $this->chenil->getChien($id);

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $photo = $this->handleUpload($_FILES['photo']);
    $chien->setPhoto($photo);
    }
    else {
            
            $chien->setPhoto($chienActuel?->getPhoto());
        }

        $this->chenil->updateChien($id, $chien);
        header('Location: ?action=list');
    }


    public function delete() {
        $this->chenil->removeChien($_GET['id']);
        header('Location: ?action=list');
    }

    public function show() {
        $chien = $this->chenil->getChien($_GET['id']);
        ViewRenderer::render('chienView', ['chien' => $chien]);
    }

    public function search() {
        $result = $this->chenil->searchByName($_POST['search']);
        ViewRenderer::render('listeChiensView', ['chiens' => $result]);
    }


    private function validateForm(array $data): void {
        if (empty($data['nom']) || !is_numeric($data['age']) || !is_numeric($data['poids'])) {
            throw new \App\Exception\ValidationException("Champs obligatoires invalides (Nom, Âge, Poids).");
        }
    }

    private function getChienParams(): array {
        return [
            $_POST['nom'],
            (int)$_POST['age'],
            $_POST['race'],
            $_POST['couleur'],
            $_POST['sexe'],
            (float)$_POST['poids'],
            null
        ];
    }

   private function handleUpload(array $file): string {
    $targetDir = './images/';
    
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowedTypes)) {
        throw new \RuntimeException("Format de fichier non autorisé.");
    }

    
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $fileName = uniqid('chien_', true) . '.' . $extension;

    $targetFile = $targetDir . $fileName;

    if (!move_uploaded_file($file['tmp_name'], $targetFile)) {
        throw new \RuntimeException("Échec du téléchargement de l'image.");
    }

    return $fileName;
}


}
