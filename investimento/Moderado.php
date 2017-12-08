<?php
class Moderado implements Investidor{
    public function investir(Investimento $investimento){
        $perc = mt_rand(1,100) > 50;
        if($perc){
            return $investimento->getValor() * 0.025;
        }
            return $investimento->getValor() * 0.07;
    }        
}