<?php 

class Conta {
    private $titular;
    private $saldo;
    public function __construct($titular,$saldo){
        $this->$titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getNome(){
        return $this->nome;
    }
}