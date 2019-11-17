<?php


namespace Nfq\Academy;


class Apartment extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        $this->setRoomtype('Diamond');
        $this->setRestroom(true);
        $this->setBaldony(true);
        $this->setBedcount(4);
        $this->setRoomnumber($roomNumber);
        $this->setExtras('TV, air-conditioner, refrigerator,
kitchen box, mini-bar, bathtub, free Wi-fi');
        $this->setPrice($price);
    }

}