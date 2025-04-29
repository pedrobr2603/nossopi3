<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Comparador de Carros</title>
  <link rel="stylesheet" href="assets/css/comparador.scss">
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

  <div class="modelos-container">
    <div class="modelo" onclick="selecionar(this)">
      <h2>Modelo 1</h2>
      <div class="campo">Marca A</div>
      <div class="campo">R$ 75.000,00</div>
      <div class="foto">
        <img src="https://images.unsplash.com/photo-1617332445733-73f2d7f3a07d" alt="Carro 1">
      </div>
      <div class="campo">2022</div>
      <div class="campo">120 cv</div>
      <div class="campo">12 km/l</div>
    </div>

    <div class="modelo" onclick="selecionar(this)">
      <h2>Jetta GLI</h2>
      <div class="campo">Volkswagen</div>
      <div class="campo">R$ 160.000,00</div>
      <div class="foto">
        <img src="https://www.autocerto.com/fotos/3238/2131859/58.jpg" alt="Carro 2">
      </div>
      <div class="campo">2020</div>
      <div class="campo">230 cv</div>
      <div class="campo">10 km/l</div>
    </div>

    <div class="modelo" onclick="selecionar(this)">
      <h2>Civic 2.0 EXL CVT</h2>
      <div class="campo">Honda</div>
      <div class="campo">R$ 119.500,00</div>
      <div class="foto">
        <img src="https://www.webmotors.com.br/wp-content/uploads/2019/08/07154837/WhatsApp-Image-2019-08-07-at-15.47.22.jpeg" alt="Carro 3">
      </div>
      <div class="campo">2020</div>
      <div class="campo">155 cv</div>
      <div class="campo">7,2 km/l</div>
    </div>
  </div>

  <script>
    function selecionar(modeloClicado) {
      const modelos = document.querySelectorAll('.modelo');
      modelos.forEach(m => m.classList.remove('selecionado'));
      modeloClicado.classList.add('selecionado');
    }
  </script>

</body>
</html>
