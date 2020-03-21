<?php

/**
 * Playerはhandsの中から手を出せる事は知っているが
 * 何をだせるかは知らない
 */
class ComputerPlayer implements Player
{
    private $hands;
    private $name;

    public function __construct(string $name, array $hands)
    {
        $this->name = $name;
        $this->hands = $hands;
    }

    public function nextHand(): Hand
    {
        return $this->randomHand();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function randomHand(): Hand
    {
        return $this->hands[array_rand($this->hands)];
    }
}
