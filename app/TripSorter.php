<?php

namespace TripSorter;

use TripSorter\BoardingCards\BoardingCardInterface;

class TripSorter
{
    private $boardingCards;

    public function __construct()
    {
    }

    public function sortBoardingCards()
    {
        //TODO::implement sorting logic here
    }

    public function getSortedBoardingCards()
    {
        return $this->boardingCards;
    }

    public function addBoardingCard(BoardingCardInterface $boardingCard)
    {
        $this->boardingCards[] = $boardingCard;
    }

}