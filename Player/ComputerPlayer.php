<?php

/**
 * Playerはhandsの中から手を出せる事は知っているが
 * 何をだせるかは知らない
 */
class ComputerPlayer implements Player
{
    private $hands;
    private $name;
    private $phrase;

    public function __construct(string $name, array $hands, $phrase = 'ワタシノカチダ')
    {
        $this->name = $name;
        $this->hands = $hands;
        $this->phrase = $phrase;
    }

    public function nextHand(): Hand
    {
        return $this->randomHand();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function signaturePhrase(): string
    {
        return $this->phrase;
    }

    public function randomHand(): Hand
    {
        return $this->hands[array_rand($this->hands)];
    }
}
