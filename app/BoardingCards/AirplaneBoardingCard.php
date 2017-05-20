<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

class AirplaneBoardingCard extends BoardingCard
{
    private $flightNumber;

    private $gateNumber;

    private $baggageInfo;

    public function __construct(
        $flightNumber,
        $gateNumber,
        $seatNumber,
        $baggageInfo,
        DestinationInterface $source,
        DestinationInterface $destination
    )
    {
        $this->flightNumber = $flightNumber;
        $this->gateNumber = $gateNumber;
        $this->baggageInfo = $baggageInfo;

        parent::__construct($source, $destination, $seatNumber);
    }

    public function getJourneyDescription()
    {
        return 'From '. $this->source->getName() .', take flight '. $this->flightNumber .' to '. $this->destination->getName() .'. Gate '. $this->gateNumber .', seat '. $this->seatNumber .'. '. $this->baggageInfo .'.';
    }
}