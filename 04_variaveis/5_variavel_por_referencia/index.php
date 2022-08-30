<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 220;

echo $x;
echo "<br>";
echo $y;
echo "<br>";


$nome1 =  "magdalena";
$nome2 =& $nome1;

echo $nome1;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "fernanda";

echo $nome1;
echo "<br>";
echo $nome2;
echo "<br>";

