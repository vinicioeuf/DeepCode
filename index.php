<?php
//Load Composer's autoloader
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
// echo "Recuperar o ambiente: " . $_ENV['APP_ENV'] . "<br>";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icon.ico">
    <link rel="stylesheet" href="styles.css">
    <title>DeepCode - Agência</title>
</head>

<body>

    <main style="
    position: relative;
    background-image: url('./images/background_home.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-color: black;
    margin-top: 0;
    box-shadow: 0px 30px 10px 3px rgba(0, 0, 0, 1);
    
">

        <!-- Div para aplicar a sombra -->
        <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: inset 0 -20px 50px -3px rgba(0, 0, 0, 1);
        pointer-events: none;
    "></div>

        <nav class="navbar navbar-expand-lg navbar-dark mt-2">
            <div style="width: 90%;" class="container-fluid">
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand ms-3 logo-pc" href="#">
                        <img src="images/deepcode_black.png" alt="Logo" width="100" class="d-inline-block align-top">
                    </a>
                    <a class="navbar-brand ms-3 logo-sp" href="#">
                        <img src="images/deepcode_black_2.png" alt="Logo" width="150" class="d-inline-block align-top">
                    </a>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav fs-6 text-black">
                        <li class="nav-item  ms-4">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link" href="#">Como trabalhamos?</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link" href="#">Sobre Nós</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link" href="#">Suporte</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary buttons-nav" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
                    
                </div>
            </div>
        </nav>

        <center>
            <div class="home-main">
                <div class="home-desc">
                    <strong>Desenvolvimento de Sites e Aplicativos</strong>
                    <hr>
                    <span>Uma agência de desenvolvimento digital focada na criação de sites e aplicativos
                        personalizados,
                        combinando design moderno com soluções tecnológicas eficientes.
                        Entendemos as necessidades de cada cliente e transformamos ideias em experiências digitais de
                        impacto.
                    </span>
                    <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
                    <div class="icons-home">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-whatsapp"></i>
                        <i class="bi bi-envelope"></i>

                    </div>
                </div>
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <dotlottie-player src="https://lottie.host/18270812-adf8-4256-ba36-607990bb4d62/YXWtXdpvct.json" class="service-img-1" background="transparent" speed="1" style="width:35%;" loop autoplay></dotlottie-player>
                
            </div>
        </center>
    </main>



    <div class="titles" >
        <h1 style="color: #0d4fae; font-weight: bold;">Serviços</h1>
        <h6 style="color: white;">Tudo que sua empresa precisa em um só lugar</h5>
        <hr style="width: 200px; background-color: #0d4fae; height: 4px;">
</div>


    <center style="background-color: rgb(0, 0, 0)" class="mt-5">
        <div class="service-main-1">
            <img class="service-img-1" width="35%" src="images/service-1-img.png" alt="">
            <div class="service-desc-1">
                <strong>Sites rápidos, responsivos e profissionais
                </strong>
                <hr>
                <span>Desenvolvemos sites otimizados para oferecer a melhor experiência ao usuário,
                    com design responsivo que se adapta perfeitamente a qualquer dispositivo. Nossos sites combinam
                    estética moderna com funcionalidade,
                    proporcionando uma presença digital que destaca sua marca de forma profissional e eficiente.
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
            </div>
        </div>
    </center>

    <center style="background-color: rgb(246, 246, 246); margin-top: 10px;">
        <div class="service-main-2">
            <div class="service-desc-2">
                <strong>Aplicativos com a melhor fluidez e compatibilidade
                </strong>
                <hr>
                <span>Criamos aplicativos que proporcionam uma experiência de uso suave e intuitiva, 
                    independentemente da plataforma. Com foco em desempenho e usabilidade, 
                    entregamos aplicativos que são rápidos, responsivos e preparados para atender às necessidades dos seus usuários de forma eficaz e eficiente.
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
            </div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <dotlottie-player src="https://lottie.host/8d714a46-89b0-4dcd-a817-74c831a16aec/NS0Gn5pIXD.json" class="service-img-2" background="transparent" speed="1" style="width: 35%" loop autoplay></dotlottie-player>
        </div>
    </center>

    <center>
        <div class="titles-2" >
            <h1 style="color: #0d4fae; font-weight: bold;">Como trabalhamos?</h1>
            <h6 style="color: white;">Acompanhe nosso processo de desenvolvimento da sua plataforma</h5>
            <hr style="width: 200px; background-color: #0d4fae; height: 4px;">
        </div>

        <div class="work-main">
            <div class="work-exemple">
                <img width="90" src="/images/icon-briefing.png" alt="">
                <strong>Briefing</strong>
                <span>Para iniciar, você preencherá um formulário para nos contar melhor sobre você e sua empresa. Após isso, teremos uma reunição para destacar as necessidades e preferências</span>
            </div>

            <div class="work-exemple">
                <i class="bi bi-code-slash"></i>
                <strong>Desenvolvimento</strong>
                <span>Ao pegar suas informações, o desenvolvimento da sua plataforma será executado</span>
            </div>

            <div class="work-exemple">
                <i class="bi bi-globe"></i>
                <strong>Publicação</strong>
                <span>Após o a conslusão do desenvolvimento da plataforma, será publicado a mesma em sua devida hospedagem e domínio</span>
            </div>

            <div class="work-exemple">
                <img width="100" src="/images/icon-support.png" alt="">
                <strong>Acompanhamento</strong>
                <span>Em caso de  pequenas ou grandes alterações, estaremos aqui para você!</span>
            </div>
        </div>
        <script>
            document.querySelectorAll('.work-exemple').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const { offsetWidth: width, offsetHeight: height } = card;
        const { offsetX: x, offsetY: y } = e;
        const xRotation = ((y / height) - 0.5) * 30; // 30 é o máximo ângulo de rotação
        const yRotation = ((x / width) - 0.5) * -30; // -30 é o máximo ângulo de rotação
        card.style.transform = `rotateX(${xRotation}deg) rotateY(${yRotation}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'rotateX(0deg) rotateY(0deg)';
    });
});

        </script>
    </center>

<center style="background-color: rgb(246, 246, 246); margin-top: 10px;">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</center>

    <center>
        <div class="titles-2" >
            <h1 style="color: #0d4fae; font-weight: bold;">Suporte</h1>
            <h6 style="color: white;">Descubra mais sobre nós! Nos envie um e-mail e tire qualquer dúvida</h5>
            <hr style="width: 200px; background-color: #0d4fae; height: 4px;">
        </div>

        <div class="about-main">
            <div class="about-desc">
                
                <img width="100" src="images/deepcode_black.png" alt="Descrição da imagem">
                <span>Agência de desenvolvimento de sites e aplicativos</span>
                <div class="about-icons">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
            </div>
        
            <div class="about-partners">
                <strong>Parceiros</strong>
                <img width="100" src="images/cloudez_partner.png" alt="Imagem dos parceiros">
            </div>
        
            <form class="about-contact" action="sendmail.php" method="post">
                <strong>Entre em Contato</strong>
                <input type="text" placeholder="Seu nome" name="nome">
                <input type="text" placeholder="Seu E-mail" name="email">
                <textarea placeholder="Sua mensagem" name="message"></textarea>
                <button class="btn buttons" type="submit" name="submit">Enviar</button>
            </form>
        </div>
        
        <h5 style="color: gray; margin-top: 100px;">Copyright&copy; 2024 DeepCode &reg; 
        </h5>
    </center>



</body>

</html>