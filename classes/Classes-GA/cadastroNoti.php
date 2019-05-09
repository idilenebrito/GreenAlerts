<?php
include ("./../conexao.php");


/*Captura de campos*/ 
$selEmpresa =  $_POST ['selEmpresa'];
$urlDoc =  $_POST ['urlDoc'];
$nomeDoc =  $_POST ['nomeDoc'];
$dataVenc =  $_POST ['dataVenc'];
$obs =  $_POST ['obs'];
$dataNoti =  $_POST ['dataNoti'];


//procedure de insercao no banco de dados

$insert_notificacao = "CALL `green_alert`.`PROC_IN_NOTI`('id_empresaFK', '$nomeDoc', '$urlDoc', '$dataVenc', $dataNoti, '$obs');";

//mysqli_query($conexao,$result_empresa);
$result_noti = mysqli_query ($conexao, $insert_notificacao);

if ($result_empresa = '') {
    echo 'Erro ao salvar!';
} else {
    echo 'Salvo com Sucesso!';
};

//teste echo $insert_notificacao;

require_once ("./Email/PHPMailerAutoload.php");

//configuracao de ambiente 
$mail = new PHPMailer();
$mail -> IsSMTP();
$mail -> SMTPDebug = 2;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = "tls";
$mail ->HOST = "smtp.live.com";
$mail ->Port = 587;

//de quem vai o email
$mail ->Username = 'greenalert-suporte@hotmail.com';
$mail ->Password = 'GreenAlert$uporte';
$mail ->Sender = "greenalert-suporte@hotmail.com";
$mail ->From = "greenalert-suporte@hotmail.com";
$mail ->FromName = "Green Alert - Sistema de controle de datas";


//pra quem vai 
//colocar variavel

$mail ->AddAddress ('greenalert-suporte@hotmail.com', ' '); 
$mail ->IsHTML (true);
$mail ->CharSet = 'utf-8';
$mail ->Subject = "E-mail para lembrete de documento";
$mail ->Body = "email, documento";

$mail-> ClearAllRecipients();


?>
