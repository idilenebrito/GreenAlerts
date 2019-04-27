<?php
include ("./../conexao.php");


/*Captura de campos*/ 




// $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
// $nomeEmpresa = filter_input(INPUT_POST, 'razaoSocial', FILTER_SANITIZE_STRING);
// $nomeFantasia = filter_input(INPUT_POST, 'nomeFantasia', FILTER_SANITIZE_STRING);
// $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
// $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
// $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
// $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
// $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
// $uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
// $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
// $telefoneOpc = filter_input(INPUT_POST, 'telefoneOpc', FILTER_SANITIZE_STRING);
// $descAtv = filter_input(INPUT_POST, 'descAtv', FILTER_SANITIZE_STRING);
// $responsavel = filter_input(INPUT_POST, 'responsavel', FILTER_SANITIZE_STRING);
// $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
// $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
// $confSenha = filter_input(INPUT_POST, 'confSenha', FILTER_SANITIZE_STRING);



$nomeEmpresa =  $_POST ['nomeEmpresa'];
$nomeFantasia =  $_POST ['nomeFantasia'];
$cnpj = $_POST ['cnpj'];
$numInscricao = $_POST ['numInscricao'];
$email =  $_POST ['email'];
$responsavel=  $_POST ['responsavel'];
$telefone =  $_POST ['telefone'];
$telefoneOpc =  $_POST ['telefoneOpc'];
$descAtv =  $_POST ['descAtv'];
$endereco =  $_POST ['endereco'];
$numero =  $_POST ['numero'];
$bairro =  $_POST ['bairro'];
$cidade =  $_POST ['cidade'];
$cep =  $_POST ['cep'];
$uf =  $_POST ['uf'];
$senha =  $_POST ['senha'];
$confSenha =  $_POST ['confSenha'];
/* Teste */
// "$cnpj, $nomeEmpresa, $nomeFantasia ,$endereco ,$bairro, $cidade ,$cep ,$uf ,$telefone";


/* nesse trecho vou colocar a chamada da procedure 
ruaEndereço_empresa,
numeroEndereço_empresa,
bairroEndereço_empresa,
cidadeEndereço_empresa,
cepEndereco_empresa,
ufEndereco_empresa,

*/

$insert_empresa = "CALL `green_alert`.`PROC_IN_EMPRESA`('$nomeEmpresa','$nomeFantasia','$cnpj',
'$numInscricao','$email','$responsavel','$telefone','$telefoneOpc','$descAtv','$endereco',
$numero,'$bairro','$cidade','$cep','$uf','$senha','$confSenha');";





//mysqli_query($conexao,$result_empresa);
$result_empresa = mysqli_query ($conexao, $insert_empresa);




// function verifique() //função verifica se o dado foi inserido
// {
    if ($result_empresa = '') {
        echo 'Erro ao salvar!';
    } else {
        echo 'Salvo com Sucesso!';
    };
// }


?>

