<?php

namespace TripSorter;

use TripSorter\BoardingCards\BoardingCardInterface;

/**
 * Class TripSorter
 * @package TripSorter
 */
class TripSorter
{
    /**
     * @var array
     */
    private $boardingCards = [];

    /**
     * @var array
     */
    private $sortedBoardingCards = [];

    /**
     * TripSorter constructor.
     */
    public function __construct()
    {
    }

    /**
     * sort boarding cards
     */
    public function sortBoardingCards()
    {
        $sourceIndex = [];
        $destinationIndex = [];
        $startingLocation = null;

        foreach ($this->boardingCards as $boardingCard) {
            $sourceName = $boardingCard->getSource()->getName();
            $destinationName = $boardingCard->getDestination()->getName();
            $sourceIndex[$sourceName] = $boardingCard;
            $destinationIndex[$destinationName] = $boardingCard;
        }

        foreach ($this->boardingCards as $boardingCard) {
            $sourceLocation = $boardingCard->getSource()->getName();
            if (!array_key_exists($sourceLocation, $destinationIndex)) {
                $startingLocation = $sourceLocation;
            }
        }

        $currentLocation = $startingLocation;

        while ($boardingCard = (array_key_exists($currentLocation, $sourceIndex)) ?
            $sourceIndex[$currentLocation] : null) {
            array_push($this->sortedBoardingCards, $boardingCard);
            $currentLocation = $boardingCard->getDestination()->getName();
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getSortedBoardingCards()
    {
        return $this->sortedBoardingCards;
    }

    /**
     * @param BoardingCardInterface $boardingCard
     * @return $this
     */
    public function addBoardingCard(BoardingCardInterface $boardingCard)
    {
        $this->boardingCards[] = $boardingCard;

        return $this;
    }

}