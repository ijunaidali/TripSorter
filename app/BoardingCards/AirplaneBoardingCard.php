<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

class AirplaneBoardingCard extends BoardingCard
{
    private $flightNumber;

    private $gateNumber;

    private $counterNumber;

    public function __construct(
        $flightNumber,
        $gateNumber,
        $seatNumber,
        $counterNumber,
        DestinationInterface $source,
        DestinationInterface $destination
    )
    {
        $this->flightNumber = $flightNumber;
        $this->gateNumber = $gateNumber;
        $this->counterNumber = $counterNumber;

        parent::__construct($source, $destination, $seatNumber);
    }

    public function getJourneyDescription()
    {
        return 'From '. $this->source->getName() .' Airport, take flight '. $this->flightNumber .' to '. $this->destination->getName() .'. Gate '. $this->gateNumber.', seat '. $this->seatNumber.'. Baggage drop at ticket counter '. $this->counterNumber .'.';
    }
}