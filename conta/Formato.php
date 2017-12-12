<?php

class Formato{
    public static $XML = 1;
    public static $CSV = 2;
    public static $PORCENTO = 3;
}

class Requisicao{
    private $formato;
    public function __costruct($formato){
        $this->formato = strtoupper($formato);
    }

    public function getFormato(){
        if($this->formato == 'XML'){
            return $XML;
        }
        if($this->formato == 'CSV'){
            return $CSV;
        }
        return $PORCENTO;
            
    }
}