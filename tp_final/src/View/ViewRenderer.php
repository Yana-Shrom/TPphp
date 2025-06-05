<?php

namespace App\View;

class ViewRenderer {
    public static function render(string $viewName, array $data = []): void {
        extract($data);
        include __DIR__ . "/templates/$viewName.php";
    }
}
