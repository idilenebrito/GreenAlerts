<?php
include ("./../conexao.php");


/*Captura de campos*/ 

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

//procedure de insercao no banco de dados

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

