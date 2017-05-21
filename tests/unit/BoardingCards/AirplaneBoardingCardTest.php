<?php

namespace TripSorterTest\Unit\BoardingCards;

use PHPUnit\Framework\TestCase;
use TripSorter\BoardingCards\AirplaneBoardingCard;
use TripSorter\Destinations\Destination;

/**
 * Class AirplaneBoardingCardTest
 * @package TripSorterTest\Unit\BoardingCards
 */
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
            'Baggage drop at ticket counter 344',
            new Destination('Gerona Airport'),
            new Destination('Stockholm')
        );

        $airplaneDescription = $airplaneBoardingCard->getJourneyDescription();

        $this->assertEquals($expected, $airplaneDescription);

        $expected  = 'From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will we automatically transferred from your last leg.';

        $airplaneBoardingCard = new AirplaneBoardingCard(
            'SK22',
            '22',
            '7B',
            'Baggage will we automatically transferred from your last leg',
            new Destination('Stockholm'),
            new Destination('New York JFK')
        );

        $airplaneDescription = $airplaneBoardingCard->getJourneyDescription();

        $this->assertEquals($expected, $airplaneDescription);
    }
}