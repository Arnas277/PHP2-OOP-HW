<?php

use Nfq\Academy\BookingManager;
use Nfq\Academy\Guest;
use Nfq\Academy\Reservation;
use Nfq\Academy\Singleroom;

require_once __DIR__ . "/vendor/autoload.php";

    $room = new SingleRoom(1408, 99);
    $guest = new Guest('Vardenis', 'Pavardenis');

    $startDate = new \DateTime('2019-11-17');
    $endDate = new \DateTime('2019-11-24');
    $reservation = new Reservation($startDate, $endDate, $guest);

    BookingManager::bookRoom($room, $reservation);