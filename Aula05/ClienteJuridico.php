<?php

class ClienteJuridico extends Cliente{
    public $cnpj;

    public function __construct(String $valor){
        $this->cnpj = $valor;
    }
    
    public function __destruct(){
        echo 'Destruindo Objeto';
    }
}