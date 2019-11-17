<?php


namespace Nfq\Academy;


class Room
{
    private $roomtype;
    private $restroom;
    private $baldony;
    private $bedcount;
    private $roomnumber;
    private $extras;
    private $price;
    private $reservations = [];


    public function getRoomtype(): string
    {
        return $this->roomtype;
    }

    public function setRoomtype($roomtype): void
    {
        $this->roomtype = $roomtype;
    }

    public function getRestroom(): bool
    {
        return $this->restroom;
    }

    public function setRestroom($restroom): void
    {
        $this->restroom = $restroom;
    }

    public function getBaldony(): bool
    {
        return $this->baldony;
    }

    public function setBaldony($baldony): void
    {
        $this->baldony = $baldony;
    }

    public function getBedcount(): int
    {
        return $this->bedcount;
    }

    public function setBedcount($bedcount): void
    {
        $this->bedcount = $bedcount;
    }

    public function getRoomnumber(): int
    {
        return $this->roomnumber;
    }

    public function setRoomnumber($roomnumber): void
    {
        $this->roomnumber = $roomnumber;
    }

    public function getExtras(): string
    {
        return $this->extras;
    }

    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getReservations(): array
    {
        return $this->reservations;
    }

    public function __toString(): string
    {
        return "Room <strong>" . $this->getRoomnumber() . "</strong>";
    }

    public function addReservation($reservation)
    {
        if ($this->isTimereserved($reservation)) {
            throw new ReservationException("Time is reserved!");
        } else {
            array_push($this->reservations, $reservation);
        }
    }

    public function deleteReservation($reservation)
    {
        $this->reservations = array_diff($this->reservations, [$reservation]);
    }

    private function isTimeReserved(Reservation $reservation) : bool
    {
        foreach ($this->reservations as $temp) {
            if ($reservation->getStartDate() >= $temp->getStartDate() && $reservation->getStartDate() <= $temp->getEndDate()) {
                return true;
            }
            if ($reservation->getEndDate() >= $temp->getStartDate() && $reservation->getEndDate() <= $temp->getEndDate()) {
                return true;
            }
            if ($temp->getStartDate() >= $reservation->getStartDate() && $temp->getStartDate() <= $reservation->getEndDate()) {
                return true;
            }
            if ($temp->getEndDate() >= $reservation->getStartDate() && $temp->getEndDate() <= $reservation->getEndDate()) {
                return true;
            }
        }
        return false;
    }

}