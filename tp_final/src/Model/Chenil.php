<?php

namespace App\Model;

class Chenil {
    private static ?Chenil $instance = null;

    public static function getInstance(): Chenil {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getChiens(): array {
        return $_SESSION['chiens'] ?? [];
    }

    public function addChien(Chien $chien): void {
        $_SESSION['chiens'][] = $chien;
    }

    public function getChien(int $id): ?Chien {
        return $_SESSION['chiens'][$id] ?? null;
    }

    public function updateChien(int $id, Chien $chien): void {
        $_SESSION['chiens'][$id] = $chien;
    }

    public function removeChien(int $id): void {
        unset($_SESSION['chiens'][$id]);
    }

    public function searchByName(string $name): array {
        return array_filter($_SESSION['chiens'] ?? [], fn($chien) => stripos($chien->nom, $name) !== false);
    }
}
