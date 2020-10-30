<?php

require "Operacao.php";
require "Calculadora.php";

$num1 = readline('Digite o primeiro número: ');
$num2 = readline('Digite o segundo número: ');
$tipo = readline('Informe o tipo da operação [multiplicacao, subtracao, soma, divisao]: ');


$op = new Operacao($tipo,$num1,$num2); //operacao
$Calculadora = new Calculadora($op);


$Calculadora->acao();