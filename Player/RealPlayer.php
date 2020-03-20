<?php

/**
 * Playerはhandsの中から手を出せる事は知っているが
 * 何をだせるかは知らない
 */
class RealPlayer implements Player
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
        return $this->choseHand();
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function choseHand(): Hand
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
