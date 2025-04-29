<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="assets/css/paginainicial.scss">
    <!-- Adicionando o ícone da lupa com Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

<div class="content">
    <h1>Bem-vindo ao RPMNet</h1>

    <div class="feed">
        <div class="card">
            <img src="assets/images/Celta.jpg" alt="Imagem 1">
            <div class="card-content">
                <h3>BuzziKauazk</h3>
                <p>Deu ruim fml #deu #ruim #fml #acidente #celtinha #triste</p>
            </div>
        </div>

        <div class="card">
            <img src="assets/images/mustang.jpg" alt="Imagem 2">
            <div class="card-content">
                <h3>MiguelzinhodoGrau</h3>
                <p>Olha essa máquina que encontrei no evento 🔥🔥🔥</p>
            </div>
        </div>

        <div class="card">
            <img src="assets/images/ferrari.jpg" alt="Imagem 3">
            <div class="card-content">
                <h3>AchadosdoBrasil</h3>
                <p>Essa é a Ferrari 296 GTS modelo de 2024, para mais informações, link na bio</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
