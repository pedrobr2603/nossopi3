<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - RPMNet</title>
  <link rel="stylesheet" href="assets/css/cadastro.css">
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
      <img src="assets/images/red_bmw_m340i_xdrive_2022_car_4k_hd_cars-2560x1440-removebg-preview.png" alt="Carro Esportivo" class="car car-front">
      <img src="assets/images/Camaro_vermelho-removebg-preview.png" alt="Carro Luxo" class="car car-back">
      <img src="assets/images/imagem-removebg-preview.png" alt="Smartphone" class="phone">
    </div>

    <div class="form-container">
      <h2>RPMNet</h2>
      <form action="index.html" method="GET">
        <label for="username">Digite seu nome de usuário:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Digite sua senha:</label>
        <input type="password" id="password" name="password" required>

        <label for="dob">Sua data de nascimento:</label>
        <input type="date" id="dob" name="dob">

        <label for="state">Seu estado:</label>
        <select id="state" name="state">
          <option value="">Escolha</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Parana</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janerio</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantis</option>
          
        </select>

        <button type="submit"><a href="index.php"></a>Cadastrar</button>
      </form>

      <p>Você já possui uma conta? <a href="login.php">Deseja logar nela?</a></p>
    </div>
  </div>
</body>
</html>

<?php
include 'conexao.php'; // sua conexão com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nomeUsuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nasc'];
    $estado = $_POST['estado'];

    // Opcional: criptografar a senha
    // $senha = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO site_pi (nomeUsuario, Email, Senha, Data_Nasc, Estado)
            VALUES ('$nome', '$email', '$senha', '$data_nasc', '$estado')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
}
?>
