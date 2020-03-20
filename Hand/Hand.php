<?php

abstract class Hand
{
    abstract protected function winnableHand();

    abstract protected function unwinnableHand();

    abstract protected function drawHand();

    abstract public function getValue();

    public function battle(Hand $enemy_hand): string
    {
        switch ($enemy_hand->getValue()) {
            case $this->winnableHand():
                return 'win';
            case $this->unwinnableHand():
                return 'lose';
            case $this->drawHand():
                return 'draw';
        }
    }
}