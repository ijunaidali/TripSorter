<?php

namespace TripSorterTest\unit\BoardingCards;

use PHPUnit\Framework\TestCase;

class TrainBoardingCardTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldProduceTrainJourneyDescription()
    {
        $trainDescription = "Take train 78A from Madrid to Barcelona. Sit in seat 45B";
        $this->assertEquals("Take train 78A from Madrid to Barcelona. Sit in seat 45B", $trainDescription);
    }
}