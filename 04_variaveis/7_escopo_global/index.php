<?php

$teste = "asd";

echo "$teste global1<br>";

if(5 > 2){
    $teste = "dsa<br>";
    echo"$teste";
}

echo "$teste";

function funcao(){

    $teste = 18101978;
    echo"$teste local<br>";
}

funcao();


function testandoGlobal(){
    global $teste; //utilizando a palavra global antes de uma variável podemos utiliza-la dentro da função

    echo "$teste global função<br>";
}

testandoGlobal();