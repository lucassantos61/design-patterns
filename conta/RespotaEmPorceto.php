<?php

class RespostaEmPorcento implements IResposta {
    private $outraResposta;

    public function __construct(Resposta $resposta){
      $this->outraResposta = $resposta;
    }
    public function responde(Requisicao $req, Conta $conta) {
      if($req->getFormato() == Formato::$PORCENTO) {
        echo $conta->getTitular() . "%" . $conta->getSaldo();
      }
      else {
        $outraResposta->responde($req, $conta);
      }
    }
  }