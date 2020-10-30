<?php

class Titulo
{
    private $tamanho;
    private $cor;
    private $texto;

    public function __construct(String $texto, int $tamanho, String $cor) 
    {
        $this->texto = $texto;
        $this->tamanho = $tamanho;
        $this->cor     = $cor;
        $this->imprime();
    }

    private function leTemplate()
    {
        $arquivo = file_get_contents('titulo.html');
        return $arquivo;
    }

    private function atualizaTexto(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#VALOR#', $this->texto, $arquivo);
        return $arquivoAtualizado;
    }

    private function atualizaTamanho(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#TAMANHO#', $this->tamanho, $arquivo);
        return $arquivoAtualizado;
    }

    private function atualizaCor(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#COR#', $this->cor, $arquivo);
        return $arquivoAtualizado;
    }

    private function imprime()
    {
        $arquivo = $this->leTemplate();  // lendo o arquivo
        $arquivo = $this->atualizaTexto($arquivo); // atualiza o texto
        $arquivo = $this->atualizaTamanho($arquivo); // atualiza o tamanho
        $arquivo = $this->atualizaCor($arquivo); // atualiza o tamanho
        echo $arquivo;
    }
}