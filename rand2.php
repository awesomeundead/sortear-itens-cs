<?php

$items = [
    'UMP-45'     => 'UMP-45 (StatTrak™) | Instrução (Pouco Usada)',
    'MP5-SD'     => 'MP5-SD (StatTrak™) | Liquefação (Pouco Usada)',
    'Five-SeveN' => 'Five-SeveN (StatTrak™) | Teste de Chamas (Pouco Usada)',
    'PP-Bizon'   => 'PP-Bizon (StatTrak™) | Gato Espacial (Pouco Usada)',
    'Galil AR'   => 'Galil AR (StatTrak™) | Conexão (Pouco Usada)',
    'P250'       => 'P250 (StatTrak™) | Proteção Cibernética (Pouco Usada)',
    'AUG'        => 'AUG (StatTrak™) | Syd Mead (Testada em Campo)',
    'XM1014'     => 'XM1014 (StatTrak™) | BJS (Testada em Campo)',
    'USP-S'      => 'USP-S (StatTrak™) | Córtex (Testada em Campo)',
    'AK-47'      => 'AK-47 (StatTrak™) | Legião de Anúbis (Testada em Campo)',
    'M4A4'       => 'M4A4 (StatTrak™) | Neo-Noir (Testada em Campo)',
    'AWP'        => 'AWP (StatTrak™) | Aberração Cromática (Testada em Campo)'
];

$items_ratity = [
    'rare_weapon' => [
        'UMP-45' => 50,
        'MP5-SD' => 25,
        'Five-SeveN' => 25
    ],
    'mythical_weapon' => [
        'PP-Bizon' => 50,
        'Galil AR' => 25,
        'P250' => 25
    ],
    'legendary_weapon' => [
        'AUG' => 40,
        'XM1014' => 40,
        'USP-S' => 20
    ],
    'ancient_weapon' => [
        'AK-47' => 35,
        'M4A4' => 35,
        'AWP' => 30
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

$array = [];

foreach ($items_ratity[$ratity] as $weapon => $percentage)
{
    for ($i = 0; $i < $percentage; $i++)
    {
        $array[] = $weapon;
    }
}

shuffle($array);

$random = rand(0, 99); // gera um número aleatório
$weapon = $array[$random];
$item = $items[$weapon]; // obtém o item

echo "{$ratity} : {$item}\n";