<?php
	$servidor	= "localhost";
	$usuario	= "root";
	$senha		= "";
	$banco		= "trabalho-sst";
	
	$con = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Não foi possível conectar com o banco de dados");
	
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,'SET character_set_connection=utf8');
	mysqli_query($con,'SET character_set_client=utf8');
	mysqli_query($con,'SET character_set_results=utf8');
?>