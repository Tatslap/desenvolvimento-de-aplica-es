<?php


//File Imports
require "Cliente.php";
require "ClienteFisico.php";
require "ClienteJuridico.php";

// Criando Objetos
$cli                = new Cliente();
$cliFisico          = new ClienteFisico();
$cliJuridico        = new ClienteJuridico('72242621000192');


//Visualizando os conteudos
echo '<pre>';
var_dump($cli);
var_dump($cliFisico);
var_dump($cliJuridico);
echo '</pre>';

//destruir o cliente Juridico
$clienteJuridico->__destruct();
echo '<hr>';
echo '<pre>';
var_dump($cli);
var_dump($cliFisico);
var_dump($cliJuridico);
echo '</pre>';