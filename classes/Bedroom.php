<?php


namespace Nfq\Academy;


class Bedroom extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        $this->setRoomtype('Gold');
        $this->setRestroom(true);
        $this->setBaldony(true);
        $this->setBedcount(2);
        $this->setRoomnumber($roomNumber);
        $this->setExtras('TV, air-conditioner, refrigerator, mini-
bar, bathtub');
        $this->setPrice($price);
    }
}