<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

/**
 * Class BusBoardingCard
 * @package TripSorter\BoardingCards
 */
class BusBoardingCard extends BoardingCard
{
    /**
     * BusBoardingCard constructor.
     * @param $seatNumber
     * @param DestinationInterface $source
     * @param DestinationInterface $destination
     */
    public function __construct(
        $seatNumber,
        DestinationInterface $source,
        DestinationInterface $destination
    )
    {
        parent::__construct(
            $source,
            $destination,
            $seatNumber
        );
    }

    /**
     * @return string
     */
    public function getJourneyDescription()
    {
        return 'Take the airport bus from '. $this->source->getName() .' to '. $this->destination->getName() .'. No seat assignment.';
    }
}