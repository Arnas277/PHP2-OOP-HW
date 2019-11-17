<?php


namespace Nfq\Academy;


class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    public function getGuest(): Guest
    {
        return $this->guest;
    }

    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }

    public function __toString()
    {
        $startDate = $this->startDate->format('Y-m-d');
        $endDate = $this->endDate->format('Y-m-d');
        return PHP_EOL . "from <time>$startDate</time> to <time>$endDate</time>!";
    }

}