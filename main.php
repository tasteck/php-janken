<?php
require 'ClassLoader.php';

$hands = [
    new Paper(),
    new Scissors(),
    new Rock()
];

$player_1 = new RealPlayer('You', $hands);
$player_2 = new ComputerPlayer('Jiro', $hands);

$janken_app = new Janken($player_1, $player_2);
$janken_app->run();
