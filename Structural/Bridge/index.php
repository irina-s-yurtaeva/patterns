<?php
use Patterns\Structural\Bridge\Castle;
use Patterns\Structural\Bridge\TownHouse;
use Patterns\Scrooge;
use Patterns\Spender;

$Olga = new \Patterns\Decorator\HouseKeeperDecorator(new Scrooge());
$Olga->setName('Olga');

$Nikolay = new \Patterns\Decorator\HouseKeeperDecorator(new Spender());
$Nikolay->setName('Nikolay');

$richCastle = new Castle($Olga);
$richCastle->payTheBuilds();

$townHouse = new TownHouse($Nikolay);
$townHouse->payTheBuilds();