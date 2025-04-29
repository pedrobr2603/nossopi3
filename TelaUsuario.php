<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Usuários</title>
    <link rel="stylesheet" href="assets/css/telausuario.css">
</head>
<body>
    <div class="container">
        <div class="user-box">
            <div class="circle"></div>
            <div class="username">Usuário 2424</div>
            <div class="carousel">
                <img src="assets/images/Camaro_vermelho-removebg-preview.png" class="active" alt="Foto do carro 1">
                <img src="assets/images/red_bmw_m340i_xdrive_2022_car_4k_hd_cars-2560x1440-removebg-preview.png" alt="Foto do carro 2">
                <img src="image3.jpg" alt="Foto do carro 3">
            </div>
            <div class="icons">
                <span>❤️</span>
                <span>⭐</span>
            </div>
        </div>
        <div class="arrow" onclick="prevSlide()">&#x3C;</div>
        <div class="arrow" onclick="nextSlide()">&#x3E;</div>
    </div>
    <div class="bottom-right-text">@Nomedaloja</div>

    <script>
        let index = 0;
        const images = document.querySelectorAll(".carousel img");

        function showSlide(n) {
            images[index].classList.remove("active");
            index = (n + images.length) % images.length;
            images[index].classList.add("active");
        }

        function nextSlide() {
            showSlide(index + 1);
        }

        function prevSlide() {
            showSlide(index - 1);
        }
    </script>
</body>
</html>
