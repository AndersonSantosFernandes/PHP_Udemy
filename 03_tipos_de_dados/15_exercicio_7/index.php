<?php

$pessoa = ['nome' => 'Anderson', 
'altura' => 1.78,
 'peso' => 78,
  'idade' => 19
];

$nome = $pessoa['nome'];
$altura = $pessoa['altura'];
$peso = $pessoa['peso'];
$idade = $pessoa['idade'];


if($idade >= 18){
    echo "$nome tem $altura de altura, pesa $peso e tem $idade de idade.<br> Portanto é maior de idade";
}
else
{
    echo "$nome tem $altura de altura, pesa $peso e tem $idade anos de idade.<br> Portanto não é maior de idade";
}

