<?php

/**
 * Rockは自分が何に勝てるかを知っている
 */
class Rock extends Hand
{
    public function getValue()
    {
        return 'rock';
    }
    protected function winnableHand()
    {
        return 'scissors';
    }

    protected function unwinnableHand()
    {
        return 'paper';
    }
}
