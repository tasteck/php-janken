<?php

/**
 * Playerはhandsの中から手を出せる事は知っているが
 * 何をだせるかは知らない
 */
class RealPlayer implements Player
{
    private $hands;
    private $name;
    private $phrase;

    public function __construct(string $name, array $hands, string $phrase = 'やったぜ！')
    {
        $this->name = $name;
        $this->hands = $hands;
        $this->phrase = $phrase;
    }

    public function nextHand(): Hand
    {
        return $this->inputHand();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function signaturePhrase(): string
    {
        return $this->phrase;
    }

    private function inputHand(): Hand
    {
        foreach ($this->hands as $index => $hand) {
            print(sprintf("%d: %s\n", $index, $hand->getValue()));
        }
        print("ジャン...!!ケン...!!: ");

        // 入力を受け取る
        $input = trim(fgets(STDIN));
        return $this->hands[$input];
    }
}
