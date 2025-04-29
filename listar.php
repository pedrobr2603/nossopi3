<?php
include "conexao.php";

$sql = "SELECT * FROM nome_da_tabela";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while($linha = $resultado->fetch_assoc()) {
        echo "ID: " . $linha["id"] . " - Nome: " . $linha["nome"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conexao->close();
?>
