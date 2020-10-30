<?php 

//classe Operacao

class Operacao
{   
  public $num1;
  public $num2;
  public $resultado;
  public $tipo;

  //Metodo construtor
  public function __construct($tipo,$num1,$num2)
  {
    $this-> tipo = $tipo;
    $this-> num2 = $num2;
    $this-> num1 = $num1;
  }
    
    //Verifica o tipo do calculo
    public function calculo()
    {
      switch ($this->tipo)
      {
        case 'soma':
          $this->soma();
          break;
        case 'subtracao':
          $this->subtracao();
          break;
        case 'divisao':
          $this->divisao();
          break;
        case 'multiplicacao':
          $this->multiplicacao();
          break;
        default:
          $this->tipoinvalido();
          break;
      }    

    }
 
    //Regra das operacoes
    public function soma()
    {
        $this ->resultado = $this ->num1 + $this->num2;
    }

    public function subtracao()
    {
        $this ->resultado = $this ->num1 - $this->num2;
    }

    public function divisao()
    {
        $this ->resultado = $this ->num1 / $this->num2;
    }

    public function multiplicacao()
    {
        $this ->resultado = $this ->num1 * $this->num2;
    }  

    public function tipoinvalido()
    {
        $this ->resultado = ('Tipo invalido!' . PHP_EOL);
    }  
}