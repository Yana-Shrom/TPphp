<?php
namespace Hotel\Model;

use DateTime;
use Hotel\Model\Reservation;
use Hotel\Exception\ReservationConflictException;

class Room {
    private int $id;
    private string $number;
    private string $type;
    private float $pricePerNight;
    private array $reservations = [];

    public function __construct(int $id, string $number, string $type, float $pricePerNight) {
        $this->id = $id;
        $this->number = $number;
        $this->type = $type;
        $this->pricePerNight = $pricePerNight;
    }

    public function isAvailable(DateTime $start, DateTime $end): bool {
        foreach ($this->reservations as $reservation) {
            if ($reservation->getStatus() !== "canceled" &&
                $start < $reservation->getEndDate() && $end > $reservation->getStartDate()) {
                return false;
            }
        }
        return true;
    }

    public function addReservation(Reservation $reservation): void {
        if (!$this->isAvailable($reservation->getStartDate(), $reservation->getEndDate())) {
            throw new ReservationConflictException("Chambre déjà réservée pour ces dates.");
        }
        $this->reservations[] = $reservation;
    }

    public function getReservations(): array {
        return $this->reservations;
    }

    public function getPricePerNight(): float {
        return $this->pricePerNight;
    }

    public function getNumber(): string {
        return $this->number;
    }
}
