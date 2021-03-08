<?php

require '../../../vendor/autoload.php';

use Ouxsoft\LuckByDice\Factory\TurnFactory;

$turn = TurnFactory::getInstance();

$turn->setNotation('10d10');

$fp = fopen('data.csv', 'w');

// add column headings
$fields = [
    'Roll',
    'Outcome',
    'Luck'
];
fputcsv($fp, $fields);

// add rows
for($i = 1; $i <= 100000; $i++){
    $fields = [
        $i,
        $turn->roll(),
        $turn->getLuck()
    ];
    fputcsv($fp, $fields);
}

fclose($fp);