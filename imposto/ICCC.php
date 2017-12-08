<?php

class ICCC implements Imposto{
    public function calcula(Orcamento $Orcamento){
        $valor = $Orcamento->getValor();
        if($valor < 1000){
         return ($valor * 0.07);   
        }
        if($valor > 3000){
            return ($valor * 0.08)+30;
        }
        return $valor *0.08;
        
    }
}

