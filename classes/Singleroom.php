<?php


namespace Nfq\Academy;


class Singleroom extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        $this->setRoomtype('Standard');
        $this->setRestroom(true);
        $this->setBaldony(false);
        $this->setBedcount(1);
        $this->setRoomnumber($roomNumber);
        $this->setExtras('TV, air-conditioner');
        $this->setPrice($price);
    }
}