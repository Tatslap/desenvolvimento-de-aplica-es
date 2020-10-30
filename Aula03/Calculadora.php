  
<?php 
//Class Calculadora
class Calculadora 
{
    //atributo
    public $operacao;

    //metodo
    public function __construct($operacao)
    {
        $this->operacao = $operacao;
    }

    public function acao()
    {
        $this->operacao->calculo(); //chamando o metodo calculo da operacao
        echo "resultado: " . $this->operacao->resultado; //Mostrando Resultado
    }


}