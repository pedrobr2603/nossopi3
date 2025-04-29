<?php
$host = "localhost";
$usuario = "pedroka1232";
$senha = "pedrobr1314"; // troque pela senha real que você colocou
$banco = "pedroka1232"; // ex: site_db

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

echo "Conectado com sucesso!";
?>
