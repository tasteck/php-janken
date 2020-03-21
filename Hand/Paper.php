<?php

/**
 * Paperは自分が何に勝てるかを知っている
 */
class Paper extends Hand
{
    public function getValue()
    {
        return 'paper';
    }

    protected function winnableHand()
    {
        return 'rock';
    }

    protected function unwinnableHand()
    {
        return 'scissors';
    }
}
