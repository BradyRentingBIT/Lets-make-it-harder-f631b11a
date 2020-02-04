<?php

// Weight variables
$firstWeight  = $argv[1];
$secondWeight = $argv[2];
$arrayWeights = $argv[3];

$weights = array_map('intval', explode(',', $arrayWeights));
rsort($weights);

function checkBalance($firstWeight, $secondWeight, $weights) {
    if ($firstWeight === $secondWeight) {
        echo "In balans" . PHP_EOL;
    } else {
        $difference = abs($firstWeight - $secondWeight);
        $weightList = [];

        foreach ($weights as $weight) {
            if ($weight <= $difference) {
                $weightList[] = $weight;
                $difference = abs($difference - $weight);
            }
        }

        if ($difference !== 0) {
            echo "Niet in balans" . PHP_EOL;
        }
        else {
            sort($weightList);
            echo implode(',', $weightList) . PHP_EOL;
        }
    }
}

checkBalance($firstWeight, $secondWeight, $weights);



