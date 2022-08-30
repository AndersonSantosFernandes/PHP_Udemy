<?php

class Pessoal{

    function falar(){
        echo "Olá mundo";
    }


}

$anderson = new Pessoal();
$anderson->nome ="Anderson";

echo $anderson->nome;
echo"<br>";

$anderson->falar();

?>