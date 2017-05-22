<?php

namespace TripSorter\BoardingCards;

/**
 * Interface BoardingCardInterface
 * @package TripSorter\BoardingCards
 */
interface BoardingCardInterface
{
    /**
     * @return string
     */
    public function getSource();

    /**
     * @return string
     */
    public function getDestination();
}