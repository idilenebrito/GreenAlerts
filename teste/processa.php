<?php

include("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";

$procSalvar = ""