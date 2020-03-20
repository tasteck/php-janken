<?php
require 'Janken.php';
require './Player/Player.php';
require './Player/ComputerPlayer.php';
require './Player/RealPlayer.php';
require './Hand/Hand.php';
require './Hand/Paper.php';
require './Hand/Scissors.php';
require './Hand/Rock.php';

$hands = [
    new Paper(),
    new Scissors(),
    new Rock()
];

$player_1 = new RealPlayer('Yamashita', $hands);
$player_2 = new ComputerPlayer('Jiro', $hands);

$janken_app = new Janken($player_1, $player_2);
$janken_app->run();
