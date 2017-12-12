<?php

Interface Desconto{
    public function desconto(Orcamento $Orcamento);
    public function setProximo(Desconto $proximo);
}