<?php
/*// $conexao = mysql_connect('localhost', 'GreenAlert', " ");
// if (!$conexao) {
//     die('Erro ao conectar ao banco: ' . mysql_error());
// }
// echo 'Conectado com sucesso';
// mysql_close($conexao);

// mysql

try{ 
    
    $conexao = new PDO ('mysql:host=localhost; dbname=GreenAlert', 'root', ' ');

} catch (Exception $e){
    echo 'Erro ao tentar conectar ao Banco de Dados!';
    echo  $e-> getMessage();
}*/

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "ambientecpfc";


/* Criando variavel de conexão */
$mysqli = new mysqli($host, $usuario, $senha, $bd);

/* Verificação de erro na conexao */
if($mysqli->connect_errno)
    echo "Falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_errno ;

?>