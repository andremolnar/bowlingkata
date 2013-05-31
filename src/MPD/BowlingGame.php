<?php

namespace MPD;

class BowlingGame {

  private $score;
  private $frames;
  private $frame;

  function __construct() {
    $this->frames = array();
    $this->frame = 1;
  }

  public function roll($pins) {
    $this->frames[$this->frame][] = $pins;
    $this->advanceFrame();
  }

  public function score() {
    foreach($this->frames as $frame => $value) {
      if ($this->isStrike($frame)) {
        if ($frame <= 10) {
          $this->score += 10 + $this->strikeBonus($frame);
        }
      }
      elseif ($this->isSpare($frame)) {
        $this->score += 10 + $this->spareBonus($frame);
      }
      else {
        $this->score += array_sum($this->frames[$frame]);
      }
    }
    return $this->score;
  }

  private function isStrike($frame) {
    if (array_sum($this->frames[$frame]) == 10 && count($this->frames[$frame] == 1)) {
      return true;
    }
    return false;
  }

  private function isSpare($frame) {
    if (array_sum($this->frames[$frame]) == 10 && count($this->frames[$frame]) == 2) {
      return true;
    }
    return false;
  }

  private function strikeBonus($frame) {
    return $this->frames[$frame + 1][0] + (isset($this->frames[$frame + 1][1]) ? $this->frames[$frame + 1][1] : $this->frames[$frame + 2][0]);
  }

  private function spareBonus($frame) {
    return $this->frames[$frame + 1][0];
  }

  private function advanceFrame() {
    if (array_sum($this->frames[$this->frame]) == 10 || count($this->frames[$this->frame]) == 2) {
      $this->frame++;
    }
  }
}
