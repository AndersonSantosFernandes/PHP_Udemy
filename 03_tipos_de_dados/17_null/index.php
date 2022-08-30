<?php

echo NULL;

$nome = NULL;

if(is_null($nome))
{
    echo"O valor é nulo<br>";
}

$nome = "a";
if(is_null($nome))
{
    echo"O valor é nulo";
}
else
{
    echo"O valor não é nulo";
}