<?php
include ("conexao.php");

$id;
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$nomeEmpresa = filter_input(INPUT_POST, 'nomeEmpresa', FILTER_SANITIZE_STRING);
$nomeFantasia = filter_input(INPUT_POST, 'nomeFantasia', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$telefoneOpc = filter_input(INPUT_POST, 'telefoneOpc', FILTER_SANITIZE_STRING);
$descAtv = filter_input(INPUT_POST, 'descAtv', FILTER_SANITIZE_STRING);
$responsavel = filter_input(INPUT_POST, 'responsavel', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$confSenha = filter_input(INPUT_POST, 'confSenha', FILTER_SANITIZE_STRING);

$Con_Emp = 'CALL Proc_in_CadEmp()';

if (mysqli)

?>

