<?php

$nome = "Anderson";
$idade = 43;
$peso = 76.87;

if(is_string($nome)){
    print "É string - 1<br>";
}

if(is_string("magdalenna")){
    print "É string - 2<br>";
}

if(is_string($peso)){
    print "É string - 3";
}
else
{
    echo "Não é string - 4" ;
}