<?php

namespace TripSorterTest\Unit\BoardingCards;

use PHPUnit\Framework\TestCase;
use TripSorter\BoardingCards\AirplaneBoardingCard;
use TripSorter\Destinations\Destination;

class AirplaneBoardingCardTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldProduceAirplaneJourneyDescription()
    {
        $expected  = 'From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.';

        $airplaneBoardingCard = new AirplaneBoardingCard(
            'SK455',
            '45B',
            '3A',
            '344',
            new Destination('Gerona'),
            new Destination('Stockholm')
        );

        $airplaneDescription = $airplaneBoardingCard->getJourneyDescription();

        $this->assertEquals($expected, $airplaneDescription);
    }
}