<?php

$id = $_POST["id"];
$patrimonio = $_POST['patrimonio'];
$lacre = $_POST['lacre'];
$inmetro = $_POST['inmetro'];
$tipo = $_POST['tipo'];
$lt_kg = $_POST['lt_kg'];
$data_recarga = $_POST['data_recarga'];
$prox_recarga = $_POST['prox_recarga'];
$localizacao = $_POST['localizacao'];
$validade_extintor = $_POST['validade_extintor'];
$sinalizacao = $_POST['sinalizacao'];
$placas = $_POST['placas'];

$data_recarga = implode("-",array_reverse(explode("/",$data_recarga)));
$prox_recarga = implode("-",array_reverse(explode("/",$prox_recarga)));
$validade_extintor = implode("-",array_reverse(explode("/",$validade_extintor)));

if (!($patrimonio) || !($lacre) || !($inmetro) || !($tipo) || !($lt_kg) || !($data_recarga) || !($prox_recarga) || !($localizacao) || !($validade_extintor) || !($sinalizacao) || !($placas)){
    print "Preencha todos os campos!"; exit();
}

include("../include/conexao.php");

//Utilizando o  mysqli_real_escape_string voce se protege o seu código contra SQL Injection.
$id = mysqli_real_escape_string($con,$id);
$patrimonio = mysqli_real_escape_string($con,$patrimonio);
$lacre = mysqli_real_escape_string($con,$lacre);
$inmetro = mysqli_real_escape_string($con,$inmetro);
$tipo = mysqli_real_escape_string($con,$tipo);
$lt_kg = mysqli_real_escape_string($con,$lt_kg);
$data_recarga = mysqli_real_escape_string($con,$data_recarga);
$prox_recarga = mysqli_real_escape_string($con,$prox_recarga);
$localizacao = mysqli_real_escape_string($con,$localizacao);
$validade_extintor = mysqli_real_escape_string($con,$validade_extintor);
$sinalizacao = mysqli_real_escape_string($con,$sinalizacao);
$placas = mysqli_real_escape_string($con,$placas);

$update = mysqli_query($con, "UPDATE requisitos SET patrimonio='$patrimonio',lacre='$lacre',inmetro='$inmetro',tipo='$tipo',lt_kg='$lt_kg',data_recarga='$data_recarga',prox_recarga='$prox_recarga',localizacao='$localizacao',validade_extintor='$validade_extintor',sinalizacao='$sinalizacao',placas='$placas' WHERE id = '$id' ");
if($update) {
    print "Cadastro Alterado!";
}else {
    print "Erro ao Alterar!";
}
?>