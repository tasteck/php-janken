<?php

/**
 * Playerのインターフェイス
 * PC操作のプレイヤーや人間が操作するプレイヤーを抽象化したもの
 */
Interface Player
{
    public function nextHand(): Hand;
    public function getName(): string;
    public function signaturePhrase(): string;
}
