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
        $hand_1 = $this->player_1->nextHand();
        $hand_2 = $this->player_2->nextHand();

        printf(sprintf("%sは%sを出した！！\n", $this->player_1->getName(), $hand_1->getValue()));
        printf(sprintf("%sは%sを出した！！\n", $this->player_2->getName(), $hand_2->getValue()));

        $this->printResult($hand_1, $hand_2);
    }


    public function printResult(Hand $hand_1, Hand $hand_2): void
    {
        switch ($hand_1->battle($hand_2)) {
            case 'win':
                printf(sprintf("%sの勝利です！\n", $this->player_1->getName()));
                return;
            case 'lose':
                printf(sprintf("%sの勝利です！\n", $this->player_2->getName()));
                return;
            case 'draw':
                printf("ドローです！\n");
                return;
        }
    }
}
