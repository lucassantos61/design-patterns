<?php

class SemDesconto implements Desconto{
    private $proximoDesconto;
    public function desconto(Orcamento $Orcamento){
        return 0;
    }
    public function setProximo(Desconto $proximo){
       
    }
}