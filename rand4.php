<?php

$rarities = [
    'rare_weapon'      => 74, // 75%
    'mythical_weapon'  => 18,  // 20%
    'legendary_weapon' => 6, // 4,5%
    'ancient_weapon'   => 2 // 0,5%
];

foreach ($rarities as $rarity => $value)
{
    for ($i = 0; $i < $value; $i++)
    {
        $array[] = $rarity;
    }
}

$length = count($array); // conta quantos elementos no array, 200

function loop($array, $length)
{
    shuffle($array); // embaralha o array
    $random = rand(0, $length - 1); // gera um número aleatório, 0 - 199
    return $array[$random]; // obtém a raridade do item
};

$probability = [
    'rare_weapon'      => 0,
    'mythical_weapon'  => 0,
    'legendary_weapon' => 0,
    'ancient_weapon'   => 0
];

for ($i = 0; $i < 100; $i++)
{
    $rarity = loop($array, $length);

    $probability[$rarity] += 1;
}

print_r($probability);