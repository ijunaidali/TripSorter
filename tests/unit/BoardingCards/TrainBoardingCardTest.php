<?php

namespace TripSorterTest\Unit\BoardingCards;

use PHPUnit\Framework\TestCase;
use TripSorter\BoardingCards\TrainBoardingCard;
use TripSorter\Destinations\Destination;

/**
 * Class TrainBoardingCardTest
 * @package TripSorterTest\Unit\BoardingCards
 */
class TrainBoardingCardTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldProduceTrainJourneyDescription()
    {
        $trainBoardingCard = new TrainBoardingCard(
            '78A',
            '45B',
            new Destination('Madrid'),
            new Destination('Barcelona')
        );
        $trainDescription = $trainBoardingCard->getJourneyDescription();
        $this->assertEquals("Take train 78A from Madrid to Barcelona. Sit in seat 45B.", $trainDescription);
    }
}