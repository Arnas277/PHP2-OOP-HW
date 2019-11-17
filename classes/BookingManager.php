<?php


namespace Nfq\Academy;


class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
            $room->addReservation($reservation);
            echo $room . " successfully booked for " . $reservation->getGuest() . " " . $reservation . PHP_EOL;
    }
    public static function deleteReservation(Room $room, Reservation $reservation)
    {
        $room->deleteReservation($reservation);
    }
}