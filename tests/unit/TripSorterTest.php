<?php

namespace TripSorterTest\Unit;

use PHPUnit\Framework\TestCase;
use TripSorter\BoardingCards\AirplaneBoardingCard;
use TripSorter\BoardingCards\BusBoardingCard;
use TripSorter\BoardingCards\TrainBoardingCard;
use TripSorter\Destinations\Destination;
use TripSorter\TripSorter;

/**
 * Class TripSorterTest
 * @package TripSorterTest\Unit
 */
class TripSorterTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldSortGivenBoardingCards()
    {
        $airplaneCard1 = new AirplaneBoardingCard(
            'SK22',
            '22',
            '7B',
            'Baggage will we automatically transferred from your last leg',
            new Destination('Stockholm'),
            new Destination('New York JFK')
        );

        $airplaneCard2 = new AirplaneBoardingCard(
            'SK455',
            '45B',
            '3A',
            'Baggage drop at ticket counter 344',
            new Destination('Gerona Airport'),
            new Destination('Stockholm')
        );

        $busCard = new BusBoardingCard(
            null,
            new Destination('Barcelona'),
            new Destination('Gerona Airport')
        );

        $trainCard = new TrainBoardingCard(
            '78A',
            '45B',
            new Destination('Madrid'),
            new Destination('Barcelona')
        );

        $expected = [
            $trainCard,
            $busCard,
            $airplaneCard2,
            $airplaneCard1
        ];

        $tripSorter = new TripSorter();
        $tripSorter->addBoardingCard($airplaneCard1);
        $tripSorter->addBoardingCard($airplaneCard2);
        $tripSorter->addBoardingCard($busCard);
        $tripSorter->addBoardingCard($trainCard);

        $tripSorter->sortBoardingCards();

        $sorted = $tripSorter->getSortedBoardingCards();

        $this->assertEquals($expected, $sorted);
    }
}