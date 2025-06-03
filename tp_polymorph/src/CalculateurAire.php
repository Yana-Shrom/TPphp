<?php

namespace App;

use App\Formes\FormeGeometrique;

class CalculateurAire {
    public function calculerAireTotale($formes): float {
        $total = 0;
        foreach ($formes as $forme) {
            $aire = $forme->calculerAire();
            echo "Aire: " . round($aire, 2) . " m²\n";
            $total += $aire;
        }
        return $total;
    }
}
