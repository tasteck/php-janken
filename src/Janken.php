<?php

/**
 * 実際にジャンケンを行うクラス
 * Jankenクラスはは参加しているプレイヤーがCPなのか人間なのかは知らない
 */
class Janken
{
    private $player_1;
    private $player_2;

    public function __construct(Player $player_1, Player $player_2)
    {
        $this->player_1 = $player_1;
        $this->player_2 = $player_2;
    }

    public function run(): void
    {
        $winner = $this->winner();

        if ($winner) {
            printf(sprintf("%sの勝利です！\n", $winner->getName()));
            printf(sprintf("%s「%s」\n", $winner->getName(), $winner->signaturePhrase()));
            return;
        }

        printf("ドローです！\n");
    }

    public function winner(): ?Player
    {
        $hand_1 = $this->player_1->nextHand();
        $hand_2 = $this->player_2->nextHand();

        printf(sprintf("%sは%sを出した！！\n", $this->player_1->getName(), $hand_1->getValue()));
        printf(sprintf("%sは%sを出した！！\n", $this->player_2->getName(), $hand_2->getValue()));

        $result = $hand_1->battle($hand_2);

        if ($result === 'win') {
            return $this->player_1;
        }
        if ($result === 'lose') {
            return $this->player_2;
        }
        return null;
    }
}
