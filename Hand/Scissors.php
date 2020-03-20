<?php

/**
 * Scissorsは自分が何に勝てるかを知っているが
 * 相手が何かは知らない
 */
class Scissors extends Hand
{
    protected function winnableHand()
    {
        return 'paper';
    }

    protected function unwinnableHand()
    {
        return 'rock';
    }

    protected function drawHand()
    {
        return $this->getValue();
    }

    public function getValue()
    {
        return 'scissors';
    }
}
