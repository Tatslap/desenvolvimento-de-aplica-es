<?php

require "Operacao.php";
require "Calculadora.php";

$num1 = $_GET['num1']; //recebe num1
$num2 = $_GET['num2'];
$tipo = $_GET['tipo']; //Informe o tipo da operação [multiplicacao, subtracao, soma, divisao]

if ($num1>0){
    $op = new Operacao($tipo,$num1,$num2); //operacao
    $Calculadora = new Calculadora($op);

    $Calculadora->acao();   
} else{
    echo "<br> Informe na URL os parametros de Calculo: 'num1= <valor>&num2=<valor>&tipo= <valor> soma/subtracao/multiplicacao/divisao' <br>";
}