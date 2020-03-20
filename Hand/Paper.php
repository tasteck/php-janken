<?php

/**
 * Paperは自分が何に勝てるかを知っているが
 * 相手が何かは知らない
 */
class Paper extends Hand
{
    protected function winnableHand()
    {
        return 'rock';
    }

    protected function unwinnableHand()
    {
        return 'scissors';
    }

    protected function drawHand()
    {
        return $this->getValue();
    }

    public function getValue()
    {
        return 'paper';
    }
}
