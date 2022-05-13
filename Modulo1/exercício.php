<?php
// $lista = [
//     'nome' => 'Guilherme',
//     'idade' => 28,
//     'atributos' => [
//         'forca' => 60,
//         'agilidae'=> 80,
//         'destreza' => 50
//     ],
//     vida = 1000
//     mana = 928    
// ];

// echo "NOME: ".$lista['nome']."<>br/>";
// echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
// echo "VIDA: ".$lista['vida'];



$lista = [
    'nome' => 'Guilherme',
    'idade' => 28,
    'atributos' => [
        'forca' => 60,
        'agilidae'=> 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928    
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida'];