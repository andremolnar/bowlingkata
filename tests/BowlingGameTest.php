<?php

Use MPD\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {
  private $game;

  function setUp() {
    $this->game = new BowlingGame();
  }

  function testBowlAllZeros() {
    $this->rollMany(20, 0);
    $this->assertSame(0, $this->game->score());
  }

  function testBowlAllOnes() {
    $this->rollMany(20, 1);
    $this->assertSame(20, $this->game->score());
  }

  function testSpare() {
    $this->game->roll(5);
    $this->game->roll(5);
    $this->game->roll(6);
    $this->rollMany(17, 0);
    $this->assertSame(22, $this->game->score());
  }

  function testStrike() {
    $this->game->roll(10);
    $this->game->roll(5);
    $this->game->roll(4);
    $this->rollMany(17, 0);
    $this->assertSame(28, $this->game->score());
  }

  function testPerfectGame() {
    $this->rollMany(12, 10);
    $this->assertSame(300, $this->game->score());
  }

  function rollMany($numberOfBalls, $pins) {
    for($i = 1; $i <= $numberOfBalls; $i++) {
      $this->game->roll($pins);
    }
  }

}
