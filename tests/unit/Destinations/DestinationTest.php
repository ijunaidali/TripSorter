<?php

namespace TripSorterTest\Unit\Destinations;

use PHPUnit\Framework\TestCase;
use TripSorter\Destinations\Destination;

class DestinationTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldGetDestinationName()
    {
        $expected  = 'Barcelona';

        $destination = new Destination('Barcelona');
        $name = $destination->getName();
        $this->assertEquals($expected, $name);
    }
}