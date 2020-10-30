<?php
function main() {
	$num = 0;
	$r       = 0;
	$e      = 0;

	$num = readline("Informe um numero: \n");
	
	while ($num < 0) {
		$num = readline("Informe um numero: \n");
	}

	$e = pow($num, $num);
	$r = sqrt ($num);

	$eFormated = number_format($e, 2);
	echo "Potencia: $eFormated\n";
	echo "A raiz de $num e:  $r";

}

main();