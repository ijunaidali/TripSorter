<?php

namespace TripSorter\Destinations;

/**
 * Class Destination
 * @package TripSorter\Destinations
 */
class Destination implements DestinationInterface
{
    /**
     * @var
     */
    private $name;

    /**
     * Destination constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}