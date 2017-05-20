<?php

namespace TripSorter\BoardingCards;

class TrainBoardingCard extends BoardingCard
{
    private $trainNumber;

    private $seatNumber;

    public function __construct($trainNumber, $seatNumber, $source, $destination)
    {
        $this->trainNumber = $trainNumber;
        $this->seatNumber = $seatNumber;

        parent::__construct($source, $destination);
    }

    public function getJourneyDescription()
    {
        return 'Take train '. $this->trainNumber .' from '. $this->source .' to '. $this->destination .'. Sit in seat '. $this->seatNumber .'';
    }
}