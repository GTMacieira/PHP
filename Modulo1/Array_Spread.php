<?php
$bolo1 = [
    'Açucar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento'
];

$bolo2 = [
    'Limão',
    ...$bolo1,
    'Corante'
];

echo "O primeiro ingrediente é ".$bolo2[0]."<br/>";
echo "O segundo ingrediente é ".$bolo2[3]."<br/>";
echo "O terceiro ingrediente é ".$bolo2[6]."<br/>";

print_r($bolo2);