const rarities = {
    rare_weapon:      150,
    mythical_weapon:  40,
    legendary_weapon: 9,
    ancient_weapon:   1
};

const items_rarity = {
    rare_weapon: [
        'UMP-45 (StatTrak™) | Instrução (Pouco Usada)',
        'MP5-SD (StatTrak™) | Liquefação (Pouco Usada)',
        'Five-SeveN (StatTrak™) | Teste de Chamas (Pouco Usada)'
    ],
    mythical_weapon: [
        'PP-Bizon (StatTrak™) | Gato Espacial (Pouco Usada)',
        'Galil AR (StatTrak™) | Conexão (Pouco Usada)',
        'P250 (StatTrak™) | Proteção Cibernética (Pouco Usada)'
    ],
    legendary_weapon: [
        'AUG (StatTrak™) | Syd Mead (Testada em Campo)',
        'XM1014 (StatTrak™) | BJS (Testada em Campo)',
        'USP-S (StatTrak™) | Córtex (Testada em Campo)'
    ],
    ancient_weapon: [
        'AWP (StatTrak™) | Aberração Cromática (Testada em Campo)',
        'M4A4 (StatTrak™) | Neo-Noir (Testada em Campo)',
        'AK-47 (StatTrak™) | Legião de Anúbis (Testada em Campo)'
    ]
};

array = [];

Object.entries(rarities).forEach(entry =>
{
    const [key, value] = entry;

    for (let i = 0; i < value; i++)
    {
        array.push(key);
    }
});

function rand(min, max)
{
    min = Math.ceil(min);
    max = Math.floor(max);

    return Math.floor(Math.random() * (max - min) + min);
}

array = array.sort(() => Math.random() - 0.5); // embaralha o array

random = rand(0, array.length - 1); // gera um número aleatório, 0 - 199
rarity = array[random]; // obtém a raridade do item

random = rand(0, items_rarity[rarity].length - 1); // gera um número aleatório, 0 - 2
item = items_rarity[rarity][random]; // obtém o item

console.log(`${rarity} : ${item}`);
