<?php

class RespostaEmXML implements IRespota{
    private $outraResposta;
    public function responde(Requisicao $req, Conta $conta){
        if($req->getFormato() == Formato::$xml){
            echo "<conta><titular>".$conta->getNome()."</titular><saldo>".$conta->getSaldo()."</saldo></conta>";
        }else{
            $outraResposta->respota($req,$conta);
        }


    }
    public function setProxima(Resposta $resposta){
        $this->outraResposta = $resposta;
    }
}