<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

class BusBoardingCard extends BoardingCard
{
    public function __construct(
        $seatNumber,
        DestinationInterface $source,
        DestinationInterface $destination
    )
    {
        parent::__construct($source, $destination, $seatNumber);
    }

    public function getJourneyDescription()
    {
        return 'Take the airport bus from '. $this->source->getName() .' to '. $this->destination->getName() .' Airport. No seat assignment.';
    }
}