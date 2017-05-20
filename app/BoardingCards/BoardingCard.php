<?php

namespace TripSorter\BoardingCards;

class BoardingCard implements BoardingCardInterface
{
    protected $source;

    protected $destination;

    public function __construct($source, $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
    }
}