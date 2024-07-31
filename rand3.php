<?php

$rarities = [
    'rare_weapon'      => 150,
    'mythical_weapon'  => 40,
    'legendary_weapon' => 9,
    'ancient_weapon'   => 1
];

$items_rarity = [
    'rare_weapon' => [
        'UMP-45 (StatTrak™) | Instrução (Pouco Usada)',
        'MP5-SD (StatTrak™) | Liquefação (Pouco Usada)',
        'Five-SeveN (StatTrak™) | Teste de Chamas (Pouco Usada)'
    ],
    'mythical_weapon' => [
        'PP-Bizon (StatTrak™) | Gato Espacial (Pouco Usada)',
        'Galil AR (StatTrak™) | Conexão (Pouco Usada)',
        'P250 (StatTrak™) | Proteção Cibernética (Pouco Usada)'
    ],
    'legendary_weapon' => [
        'AUG (StatTrak™) | Syd Mead (Testada em Campo)',
        'XM1014 (StatTrak™) | BJS (Testada em Campo)',
        'USP-S (StatTrak™) | Córtex (Testada em Campo)'
    ],
    'ancient_weapon' => [
        'AWP (StatTrak™) | Aberração Cromática (Testada em Campo)',
        'M4A4 (StatTrak™) | Neo-Noir (Testada em Campo)',
        'AK-47 (StatTrak™) | Legião de Anúbis (Testada em Campo)'
    ]
];

foreach ($rarities as $rarity => $value)
{
    for ($i = 0; $i < $value; $i++)
    {
        $array[] = $rarity;
    }
}

shuffle($array); // embaralha o array

$length = count($array); // conta quantos elementos no array, 200
$random = rand(0, $length - 1); // gera um número aleatório, 0 - 199
$rarity = $array[$random]; // obtém a raridade do item

$length = count($items_rarity[$rarity]); // conta quantos itens existem de acordo com a raridade, 3
$random = rand(0, $length - 1); // gera um número aleatório, 0 - 2
$item = $items_rarity[$rarity][$random]; // obtém o item

echo "{$rarity} : {$item}\n";