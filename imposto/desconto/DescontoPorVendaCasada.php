<?php

class DescontoPorVendaCasada implements Desconto{
    private $desconto;
    public function desconto(Orcamento $orcamento){
        if($this->existe($orcamento,'LAPIS')&&$this->existe($orcamento,'CANETA')){
            return $orcamento->getValor() * 0.05;
        }
        return $this->proximoDesconto->desconto($Orcamento);        
    }
    public function setProximo(Desconto $proximo){
        $this->proximoDesconto = $proximo;
    }

    private function existe(Orcamento $orcamento ,$nomeDoItem){
        foreach ($orcamento->getItens() as $item) {
            if($item->getNome() == $nomeDoItem){
                return true;
            }
        }
        return false;
    }

}