<?php

/*
 *  versão do rand2.php melhorada
 */

$rarities = [
    'rare_weapon'      => 150,
    'mythical_weapon'  => 40,
    'legendary_weapon' => 9,
    'ancient_weapon'   => 1
];

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

$items_rarity = [
    'rare_weapon' => [
        'UMP-45' => 1,
        'MP5-SD' => 1,
        'Five-SeveN' => 1
    ],
    'mythical_weapon' => [
        'PP-Bizon' => 1,
        'Galil AR' => 1,
        'P250' => 1
    ],
    'legendary_weapon' => [
        'AUG' => 2,
        'XM1014' => 2,
        'USP-S' => 1
    ],
    'ancient_weapon' => [
        'AK-47' => 3,
        'M4A4' => 3,
        'AWP' => 1
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
$rarity = $array[$random]; // obtém a raridade

$array = [];

foreach ($items_rarity[$rarity] as $weapon => $value)
{
    for ($i = 0; $i < $value; $i++)
    {
        $array[] = $weapon;
    }
}

shuffle($array); // embaralha o array

$length = count($array);
$random = rand(0, $length - 1); // gera um número aleatório
$item = $items[$array[$random]]; // obtém o item

echo "{$rarity} : {$item}\n";