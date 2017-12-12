<?php
	require 'imposto/Orcamento.php';	
	require 'imposto/CaculadoraDeImpostos.php';
	require 'desconto/CalculadoraDeDesconto.php';
	require 'imposto/Imposto.php';
	require 'imposto/ISS.php';
	require 'imposto/ICMS.php';
	require 'imposto/KCV.php';
	require 'imposto/ICCC.php';
	require 'imposto/Item.php';
	require "desconto/Desconto.php";
	require "desconto/Desconto5Itens.php";
	require "desconto/Desconto500Reais.php";
	require "desconto/Desconto300Reais.php";
	require "desconto/DescontoPorVendaCasada.php";
	require "desconto/SemDesconto.php";
	
	$reforma = new Orcamento(301);

	$calculadora = new CalculadoraDeImpostos();

	echo $calculadora->calcula($reforma,new ICMS());
	echo '<br/>';

	echo $calculadora->calcula($reforma,new ISS());
	echo '<br/>';

	echo $calculadora->calcula($reforma,new KCV());
	echo '<br/>';

	echo $calculadora->calcula($reforma,new ICCC());
	echo '<br/>';

	//Descontos


	echo "Teste de descotos</br>";

	$CalculadoraDeDesconto = new CalculadoraDeDesconto();

	echo "Desconto</br>";

	$reforma->addItem(new Item("LAPIS",50));
	$reforma->addItem(new Item("CANETA",50));
	echo $CalculadoraDeDesconto->desconto($reforma);

