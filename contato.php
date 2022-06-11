<?php

	//echo $_GET["nome"];
	//echo "<br />";
	//echo $_GET["email"];
	//echo "<br />";
	//echo $_GET["tipo-contato"];
	//echo $_GET["numero1"] + $_GET["numero2"];
	//var_dump($_GET);
	
	$nome=$_GET["nome"];
	echo "<br />";
	$email=$_GET["email"];
	echo "<br />";
	$tipo_contato=$_GET["tipo-contato"];
	echo "<br />";
	$numero1=$_GET["numero1"];
	echo "<br />";
	$numero2=$_GET["numero2"];
	
	echo $nome;
	echo "<br />";
	echo $email;
	echo "<br />";
	echo $numero1 + $numero2;
	