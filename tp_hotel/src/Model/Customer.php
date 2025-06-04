<?php
namespace Hotel\Model;

use Hotel\Model\Reservation;

class Customer {
    private int $id;
    private string $name;
    private string $email;
    private array $reservations = [];

    public function __construct(int $id, string $name, string $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function addReservation(Reservation $reservation): void {
        $this->reservations[] = $reservation;
    }

    public function getReservationHistory(): array {
        return $this->reservations;
    }

    public function getName(): string {
        return $this->name;
    }
}
