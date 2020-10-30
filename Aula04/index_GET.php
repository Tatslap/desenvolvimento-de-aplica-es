<?php

$number = $_GET['number'];
if ($number > 0) {
    if($number % 2 == 0){
        echo '<br> O número é par!';
    } else {
        echo '<br> O número é impar!';
    }
} else{
    echo "Digite em sua URL o final: '?number=(valor)' !";
}