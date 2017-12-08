<?php

class Investimento{
    private $valor;
     function __construct($NovoNalor){
        $this->valor = $NovoNalor;
    }
    public function deposita($value){
        $this->valor += $value; 
    }
    
    public function getValor(){
        return $this->valor;
    }
}