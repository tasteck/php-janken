<?php

/**
 * Rockは自分が何に勝てるかを知っているが
 * 相手が何かは知らない
 */
class Rock extends Hand
{
    protected function winnableHand()
    {
        return 'scissors';
    }

    protected function unwinnableHand()
    {
        return 'paper';
    }

    protected function drawHand()
    {
        return $this->getValue();
    }

    public function getValue()
    {
        return 'rock';
    }
}
