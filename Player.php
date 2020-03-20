<?php
require './Hand/Hand.php';

/**
 * Playerはhandsの中から手を出せる事は知っているが
 * 何をだせるかは知らない
 */
class Player
{
    private $hands = [];
    private $name;

    public function __construct(string $name, array $hands)
    {
        $this->name = $name;
        $this->hands = $hands;
    }

    public function nextHand(): Hand
    {
        return $this->hands[array_rand($this->hands)];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
