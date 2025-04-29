<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM site_pi WHERE nomeUsuario = '$username' AND Senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "Login realizado com sucesso!";
        // Aqui você pode redirecionar com: header("Location: pagina_inicial.php");
    } else {
        echo "Nome de usuario ou senha incorretos.";
    }

    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - RPMNet</title>
<link rel="stylesheet" href="assets/css/login.scss">
</head>
<body>

<div class="navbar">
    <a href="index.php">Início</a>
    <a href="login.php">Login</a>
    <a href="cadastro.php">Cadastro</a>
    <a href="Comparador1.php">Comparador de Carros</a>
    <a href="perfil.php">Perfil</a>
    <a href="sobre.php">Sobre</a>
    
    <!-- Campo de busca com lupa -->
    <div class="search-container">
        <input type="text" placeholder="Buscar...">
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>
</div>

<div class="container">
<div class="background">
<img src="assets/images/imagem-removebg-preview.png" alt="Smartphone" class="phone">
</div>
<div class="form-container">
<h2>RPMNet</h2>
<form>
<label for="username">Digite seu nome de usuário:</label>
<input type="text" id="username" required>

                <label for="password">Digite sua senha:</label>
<input type="password" id="password" required>
<p class="forgot-password">Esqueceu sua senha? <a href="#">Redefina-a</a></p>
<button type="submit">Entrar</button>
</form>
</div>
<div class="register-container">
<p>Você ainda não possui uma conta? <a href="cadastro.php">Crie uma conta</a></p>
</div>
</div>
</body>
</html>

 