# Agenda
## Project setup
    root
        |- src
            |- MPD
        |- tests
        composer.json
## Getting setup with composer
### creating our first composer file
### installing phpunit as part of our project
### PSR-0 autoloading

## Running PHP Unit Tests
### `vendor/phpunit/phpunit/phpunit.php --colors tests`
### IDE support for running tests from within the IDE

## The Bowling Kata
### Kata repeated movements in martial arts to build muscle memory and improve concentration
### Coding Kata's are the same sort of idea
### This one designed to teach you Test Driven Development

## Bowling Rules
### Basicly a game where you count the number of pins each ball knocks down
### You get two balls per frame (unless you get a strike - in which case you only get one ball)
### If you get a spare (10 pins with two balls in a frame) you get a bonus: 10 points for the pins + the number of pins hit by the next ball
### If you get a strike (10 pins with 1 ball in a frame) you get a bonus: 10 points for the pins + the number of pins for both of the next two balls thrown
### There are 10 frames in a game
### A perfect game has a score of 300
### examples
    * ball 1: 3  | ball 2: 2 - score for the frame = 5
    * ball 3: 5  | ball 4: 5 | ball 5: 6 | ball 6: 2 - score for the second frame = 5 + 5 + 6 = 16
    * ball 7: 10 | ball 8: 5 | ball 9: 4 - score for the third frame = 10 + 5 + 4 = 19
    ----------------------------------------------------------------------------
    | 3 | 2 | 5 | / | 6 | 2 |  | X | 4 | 5 |   |   |   |   |   |   |   |   |
    |     5 |    16 |     8 |   19 |     9 |       |       |       |       |
    ----------------------------------------------------------------------------
    RT    5      21      29     48      57
    ----------------------------------------------------------------------------
## TDD
### Write your test first
### Watch the test fail (and/or throw an error)
### Write the _minimum_ amount of code that passes the test
### Refactor your code
### Write your next test
### Rinse and Repeat

## This Exercise (assumptions)
### We'll have a game class
### It will have a minimum of two methods "roll" and "score"
### test All 0s
### test All 1s
### test Spare
### test Strike
### test Perfect Game

