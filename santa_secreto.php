<?php
error_reporting(0);
$players = [
   'Erlin Herrera',
   'Daniel Mercado',
   'Julian Mercado',
   'Erika Perez',
   'Valentina Herrera',
   'Geraldin Perez'
    ];
	
$playersAsigned = [];

$result = [];

foreach($players as $player) {
	do{
		$asigned = $players[array_rand($players)];
		$result[$player] = $asigned;
		
	}while(($player == $asigned) || in_array($asigned , $playersAsigned) || ($result[$player] == $asigned && $result[$asigned] == $player));
	
	$playersAsigned[] = $asigned;
}


echo "<pre>";
print_r($result);
echo "</pre>";
