<?php

namespace TripSorterTest\Unit\BoardingCards;

use PHPUnit\Framework\TestCase;
use TripSorter\BoardingCards\BusBoardingCard;
use TripSorter\Destinations\Destination;

/**
 * Class BusBoardingCardTest
 * @package TripSorterTest\Unit\BoardingCards
 */
class BusBoardingCardTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldProduceBusJourneyDescription()
    {
        $expected  = 'Take the airport bus from Barcelona to Gerona Airport. No seat assignment.';

        $busBoardingCard = new BusBoardingCard(
            null,
            new Destination('Barcelona'),
            new Destination('Gerona Airport')
        );

        $busDescription = $busBoardingCard->getJourneyDescription();

        $this->assertEquals($expected, $busDescription);
    }
}