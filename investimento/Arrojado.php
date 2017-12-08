<?php

class Arrojado implements Investidor{
    public function investir(Investimento $investimento){
        $perc = mt_rand(1,100);
        if($perc < 20){
            return $investimento->getValor() * 0.05;
        }
        if($perc > 50){
            return $investimento->getValor() * 0.006;
        }
        return $investimento->getValor() * 0.03;
    }
}