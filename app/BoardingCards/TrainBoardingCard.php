<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

class TrainBoardingCard extends BoardingCard
{
    private $trainNumber;

    public function __construct($trainNumber, $seatNumber, DestinationInterface $source, DestinationInterface $destination)
    {
        $this->trainNumber = $trainNumber;

        parent::__construct($source, $destination, $seatNumber);
    }

    public function getJourneyDescription()
    {
        return 'Take train '. $this->trainNumber .' from '. $this->source->getName() .' to '. $this->destination->getName() .'. Sit in seat '. $this->seatNumber .'';
    }
}