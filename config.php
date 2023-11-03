<?php

$host = 'localhost';
$bancodedados = 'login';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($host, $usuario, $senha, $bancodedados);

if($mysqli->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada";
}

?>