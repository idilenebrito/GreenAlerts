<?php
include("./../conexao.php");


/*Captura de campos*/ 
$id;
$cnpj = filter_input(INPUT_POST, 'cnpjIn', FILTER_SANITIZE_STRING);
$nomeEmp = filter_input(INPUT_POST, 'nomeEmpIn', FILTER_SANITIZE_STRING);
$nomeFant = filter_input(INPUT_POST, 'nomeFanIn', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'enderecoIn', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairroIn', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidadeIn', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cepIn', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'ufIn', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefoneIn', FILTER_SANITIZE_STRING);
$telefoneOpc = filter_input(INPUT_POST, 'telefoneOpcIn', FILTER_SANITIZE_STRING);
$descAtv = filter_input(INPUT_POST, 'descricaoIn', FILTER_SANITIZE_STRING);
$responsavel = filter_input(INPUT_POST, 'responsavelIn', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'emailIn', FILTER_SANITIZE_EMAIL);
$nEnd = filter_input(INPUT_POST, 'nEndIn', FILTER_SANITIZE_STRING);


/* Teste */
/*echo "$cnpj, $nomeEmpresa, $nomeFantasia ,$endereco ,$bairro, $cidade ,$cep ,$uf ,$telefone";*/


/* nesse trecho vou colocar a chamada da procedure 


*/
$result_empresa = "INSERT INTO clienteempresa
(nomeEmpresa_empresa,
nomeFantasia_empresa,
descr_empresa,
cnpj_empresa,
ruaEndereço_empresa,
numeroEndereço_empresa,
bairroEndereço_empresa,
cidadeEndereço_empresa,
cepEndereco_empresa,
ufEndereco_empresa,
email_empresa,
responsavel_empresa,
telefone_empresa,
telefoneOpc_emoresa
)
VALUES
($nomeEmp,
$nomeFant,
$descAtv,
$cnpj,
$endereco,
$nEnd,
$bairro,
$cidade,
$cep,
$uf,
$email,
$responsavel,
$telefone,
$telefoneOpc
);";
$resultado_empresa = mysqli_query($mysqli, $result_empresa);

echo "funfou acho.";


?>

