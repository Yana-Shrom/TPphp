<?php
namespace Hotel\Model;

use DateTime;
use Hotel\Model\Room;
use Hotel\Model\Customer;
use Hotel\Interface\Billable;

class Reservation implements Billable {
    private int $id;
    private Room $room;
    private Customer $customer;
    private DateTime $startDate;
    private DateTime $endDate;
    private string $status;

    public function __construct(int $id, Room $room, Customer $customer, DateTime $startDate, DateTime $endDate) {
        $this->id = $id;
        $this->room = $room;
        $this->customer = $customer;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->status = "pending";

        $room->addReservation($this);
        $customer->addReservation($this);
        $this->status = "confirmed";
    }

    public function calculateAmount(): float {
        return $this->getDurationInNights() * $this->room->getPricePerNight();
    }

    public function cancel(): void {
        $this->status = "canceled";
    }

    public function getDurationInNights(): int {
        return $this->endDate->diff($this->startDate)->days;
    }

    public function getStartDate(): DateTime {
        return $this->startDate;
    }

    public function getEndDate(): DateTime {
        return $this->endDate;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getRoom(): Room {
        return $this->room;
    }
}
