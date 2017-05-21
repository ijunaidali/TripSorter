<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

/**
 * Class TrainBoardingCard
 * @package TripSorter\BoardingCards
 */
class TrainBoardingCard extends BoardingCard
{
    /**
     * @var
     */
    private $trainNumber;

    /**
     * TrainBoardingCard constructor.
     * @param $trainNumber
     * @param $seatNumber
     * @param DestinationInterface $source
     * @param DestinationInterface $destination
     */
    public function __construct(
        $trainNumber,
        $seatNumber,
        DestinationInterface $source,
        DestinationInterface $destination
    )
    {
        $this->trainNumber = $trainNumber;

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
        return 'Take train '. $this->trainNumber .' from '. $this->source->getName() .' to '. $this->destination->getName() .'. Sit in seat '. $this->seatNumber .'.';
    }
}