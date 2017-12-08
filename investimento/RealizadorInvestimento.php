<?php


class RealizadorInvestimento{
    private $investimento;
    function __construct(Investimento $investimento){
        $this->investimento = $investimento;
    }
    public function investir($TipoInvestimento){
       $this->investimento->deposita($TipoInvestimento->investir($this->investimento));
       return $this->investimento->getValor();
    }
}