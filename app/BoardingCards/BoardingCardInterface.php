<?php

namespace TripSorter\BoardingCards;

/**
 * Interface BoardingCardInterface
 * @package TripSorter\BoardingCards
 */
interface BoardingCardInterface
{
    /**
     * @return mixed
     */
    public function getSource();

    /**
     * @return mixed
     */
    public function getDestination();
}