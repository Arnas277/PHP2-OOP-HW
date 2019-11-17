<?php


namespace Nfq\Academy;


interface ReservableInterface
{
    public function addReservation($reservation);
    public function removeReservation($reservation);
}