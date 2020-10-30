<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$soma = $n1 + $n2;
$sub = $n1 - $n2;
$mult = $n1 * $n2;
$div = $n1 / $n2;

echo "Soma: $soma <br>";
echo "Subtração: $sub <br>";
echo "Multiplicação: $mult <br>";
echo "Divisão: $div <br>";

require "voltar.html";