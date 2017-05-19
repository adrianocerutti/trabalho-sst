<?php
	
	$url = $_SERVER["SERVER_NAME"];

	if ($url == "localhost") {
		$servidor	= "localhost";
		$usuario	= "root";
		$senha		= "";
		$banco		= "trabalho-sst";
		
		$con = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Não foi possível conectar com o banco de dados");
		
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_query($con,'SET character_set_connection=utf8');
		mysqli_query($con,'SET character_set_client=utf8');
		mysqli_query($con,'SET character_set_results=utf8');
	}else {
		$servidor	= "mysql.hostinger.com.br";
		$usuario	= "u861711222_adm";
		$senha		= "XMS9BmDjaq";
		$banco		= "u861711222_banco";
		
		$con = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Não foi possível conectar com o banco de dados");
		
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_query($con,'SET character_set_connection=utf8');
		mysqli_query($con,'SET character_set_client=utf8');
		mysqli_query($con,'SET character_set_results=utf8');
	}
?>