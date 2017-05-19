<?php
	include("../include/conexao.php");

	$excluir = $_REQUEST['excluir'];

	foreach($excluir as $item){
		$sql = "delete from requisitos WHERE id='$item' ";
		$rs = mysqli_query($con, $sql);
	}
	header("Location: ../visualiza-extintor.php");
?>