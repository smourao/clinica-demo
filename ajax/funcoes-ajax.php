<?php
include_once("../class/clinica.class.php");

$prof = new Clinica();

if($_POST['funcao']=='selecionaProfissional') {
	$dados['retorno'] = $prof->profissional($_POST['especialidade_id']);
}

echo json_encode($dados);
?>