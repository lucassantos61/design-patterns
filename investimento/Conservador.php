<?php

class Conservador implements Investidor{
    public function investir(Investimento $investimento){
        return $investimento->getValor() * 0.008;
    }
}