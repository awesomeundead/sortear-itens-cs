<?php

$items_ratity = [
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

for ($i= 1; $i <= 160; $i++)
{
    $array[$i] = 'rare_weapon'; //80% = 160
}

for ($i= 161; $i <= 194; $i++)
{
    $array[$i] = 'mythical_weapon'; // 17% = 34
}

for ($i= 195; $i <= 199; $i++)
{
    $array[$i] = 'legendary_weapon'; // 2,5% = 5
}

$array[200] = 'ancient_weapon'; // 0,5% = 1

shuffle($array); // embaralha o array

$random = rand(0, 199); // gera um número aleatório
$ratity = $array[$random]; // obtém a raridade do item

$length = count($items_ratity[$ratity]); // conta quantos itens existem de acordo com a raridade

$random = rand(0, $length - 1); // gera um número aleatório
$item = $items_ratity[$ratity][$random]; // obtém o item

echo "{$ratity} : {$item}\n";