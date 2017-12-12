<?php

class CalculadoraDeDesconto{
    public function desconto(Orcamento $Orcamento){
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $desconto300Reais = new Desconto300Reais();
        $descontoPorVendaCasada =  new DescontoPorVendaCasada();
        $semDesconto = new SemDesconto();
        
        $desconto5Itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($descontoPorVendaCasada);
        $descontoPorVendaCasada->setProximo($desconto300Reais);
        $desconto300Reais->setProximo($semDesconto);

        $valorDesconto = $desconto5Itens->desconto($Orcamento);

        return $valorDesconto;
    }
}