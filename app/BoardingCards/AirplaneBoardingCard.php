<?php

namespace TripSorter\BoardingCards;

use TripSorter\Destinations\DestinationInterface;

/**
 * Class AirplaneBoardingCard
 * @package TripSorter\BoardingCards
 */
class AirplaneBoardingCard extends BoardingCard
{
    /**
     * @var
     */
    private $flightNumber;

    /**
     * @var
     */
    private $gateNumber;

    /**
     * @var
     */
    private $baggageInfo;

    /**
     * AirplaneBoardingCard constructor.
     * @param $flightNumber
     * @param $gateNumber
     * @param $seatNumber
     * @param $baggageInfo
     * @param DestinationInterface $source
     * @param DestinationInterface $destination
     */
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
        return 'From '. $this->source->getName() .', take flight '. $this->flightNumber .' to '. $this->destination->getName() .'. Gate '. $this->gateNumber .', seat '. $this->seatNumber .'. '. $this->baggageInfo .'.';
    }
}