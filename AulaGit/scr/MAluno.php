<?php

$aluno = "a";
$n1 = 0;
$n2 = 0;
$n3 = 0;
$mf = 0;
	
$aluno = readline("Informe seu nome: ");
$n1 = readline("Informe a nota da 1 prova: ");
$n2 = readline("Informe a nota da 2 prova: ");
$n3 = readline("Informe a nota da 3 prova: ");
$mf = ($n1 + $n2 + $n3) / 3;

$mformated = number_format($mf, 2);
echo "\n";
echo "Aluno: $aluno\n";
echo "Sua media no semestre foi de: $mformated";
echo "\n";