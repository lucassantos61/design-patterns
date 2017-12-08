<?php
	require 'Orcamento.php';	
	require 'CaculadoraDeImpostos.php';
	require 'CalculadoraDeDesconto.php';
	require 'Imposto.php';
	require 'ISS.php';
	require 'ICMS.php';
	require 'KCV.php';
	require 'ICCC.php';
	require 'Item.php';
	require "Desconto.php";
	require "Desconto5Itens.php";
	require "Desconto500Reais.php";
	require "Desconto300Reais.php";
	require "SemDesconto.php";
	
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

	$reforma->addItem(new Item("Tijolo",250));
	$reforma->addItem(new Item("Cimento de 1kg",250));
	$reforma->addItem(new Item("Cimento de 1kg",250));
	$reforma->addItem(new Item("Cimento de 1kg",250));
	
	echo $CalculadoraDeDesconto->desconto($reforma);

