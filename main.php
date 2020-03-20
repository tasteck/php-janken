<?php
require 'Janken.php';
require 'Player.php';
require './Hand/Paper.php';
require './Hand/Scissors.php';
require './Hand/Rock.php';

$hands = [
    new Paper(),
    new Scissors(),
    new Rock()
];

$player_1 = new Player('Taro', $hands);
$player_2 = new Player('Jiro', $hands);

$janken_app = new Janken($player_1, $player_2);
$janken_app->run();
