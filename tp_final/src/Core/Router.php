<?php

namespace App\Core;

use App\Controller\ChienController;

class Router {
    public function handleRequest(): void {
        $action = $_GET['action'] ?? 'list';

        $controller = new ChienController();

        switch ($action) {
            case 'create':
                $controller->create();
                break;
            case 'store':
                $controller->store();
                break;
            case 'edit':
                $controller->edit();
                break;
            case 'update':
                $controller->update();
                break;
            case 'delete':
                $controller->delete();
                break;
            case 'show':
                $controller->show();
                break;
            case 'search':
                $controller->search();
                break;
            default:
                $controller->list();
        }
    }
}
