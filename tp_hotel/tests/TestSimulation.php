<?php
require __DIR__ . '/../vendor/autoload.php';

use Hotel\Model\Room;
use Hotel\Model\Customer;
use Hotel\Model\Reservation;
use Hotel\Exception\ReservationConflictException;

$rooms = [
    new Room(1, "101", "simple", 50),
    new Room(2, "102", "double", 70),
    new Room(3, "103", "suite", 150),
    new Room(4, "104", "double", 70),
    new Room(5, "105", "suite", 150),
];

$customers = [
    new Customer(1, "Manon", "manon@test.com"),
    new Customer(2, "Yasmine", "yasmine@test.com"),
    new Customer(3, "David", "david@test.com"),
];

$res1 = new Reservation(1, $rooms[0], $customers[0], new DateTime("2025-06-01"), new DateTime("2025-06-05"));
$res2 = new Reservation(2, $rooms[1], $customers[1], new DateTime("2025-06-03"), new DateTime("2025-06-06"));

try {
    $resConflict = new Reservation(3, $rooms[0], $customers[2], new DateTime("2025-06-04"), new DateTime("2025-06-07"));
} catch (ReservationConflictException $e) {
    echo "Conflit détecté : " . $e->getMessage() . "\n";
}

foreach ($customers as $customer) {
    echo "Historique de " . $customer->getName() . ":\n";
    foreach ($customer->getReservationHistory() as $reservation) {
        echo "- Chambre " . $reservation->getRoom()->getNumber() . ", statut : " . $reservation->getStatus() . "\n";
    }
}

$chiffreAffaires = 0;
foreach ($rooms as $room) {
    foreach ($room->getReservations() as $reservation) {
        if ($reservation->getStartDate()->format("Y-m") === "2025-06") {
            $chiffreAffaires += $reservation->calculateAmount();
        }
    }
}

echo "Chiffre d'affaires total en juin 2025 : " . $chiffreAffaires . "€\n";

$start = new DateTime("2025-06-04");
$end = new DateTime("2025-06-06");

echo "Chambres disponibles du " . $start->format("Y-m-d") . " au " . $end->format("Y-m-d") . ":\n";
foreach ($rooms as $room) {
    if ($room->isAvailable($start, $end)) {
        echo "- Chambre " . $room->getNumber() . "\n";
    }
}
