# TripSorter
## Installation
Run composer install command from root directory of the project.
```bash
composer install
```
## Run Tests
Run phpunit command from root directory of the project.
```bash
phpunit
```

## Run Code
```bash
$tripSorter = new TripSorter();
$sortedBoardingCards = $tripSorter->addBoardingCard($airplaneCard1)
    ->addBoardingCard($airplaneCard2)
    ->addBoardingCard($busCard)
    ->addBoardingCard($trainCard)
    ->sortBoardingCards()
    ->getSortedBoardingCards();
```
