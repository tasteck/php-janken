<?php

/**
 * Scissorsは自分が何に勝てるかを知っている
 */
class Scissors extends Hand
{
    public function getValue()
    {
        return 'scissors';
    }
    protected function winnableHand()
    {
        return 'paper';
    }

    protected function unwinnableHand()
    {
        return 'rock';
    }
}
