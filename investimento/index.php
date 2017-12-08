<?php
require "Investidor.php";
require "Investimento.php";
require "Arrojado.php";
require "Conservador.php";
require "Moderado.php";
require "RealizadorInvestimento.php";

$investimento = new Investimento(1000);

$investir = new RealizadorInvestimento($investimento);

echo 'Conservador: '.$investir->investir(new Conservador()).'<br>';

echo 'Moderador: '.$investir->investir(new Moderado()).'<br>';

echo 'Arrojado: '.$investir->investir(new Arrojado()).'<br>';