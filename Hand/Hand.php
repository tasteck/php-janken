<?php

abstract class Hand
{
    abstract protected function winnableHand();
    abstract protected function unwinnableHand();
    abstract public function getValue();

    public function battle(Hand $enemy_hand): string
    {
        if ($enemy_hand->getValue() === $this->winnableHand()) {
            return 'win';
        }

        if ($enemy_hand->getValue() === $this->unwinnableHand()) {
            return 'lose';
        }

        return 'draw';
    }
}
