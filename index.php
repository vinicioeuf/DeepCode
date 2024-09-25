<?php
//Load Composer's autoloader
//require 'vendor/autoload.php';
//$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
//$dotenv->load();
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
    <nav class="navbar navbar-expand-lg  mt-2">
        <div style="width: 80%;" class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ms-3 logo-pc" href="#">
                    <img src="images/logos_deepcode_blackl.png" alt="Logo" width="70" class="d-inline-block align-top">
                </a>
                <a class="navbar-brand ms-3 logo-sp" href="#">
                    <img src="images/deepcode_black_2.png" alt="Logo" width="150" class="d-inline-block align-top">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  ms-4">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#como-trabalhamos">Como trabalhamos?</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#carouselExampleIndicators">Afiliados</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#carouselExampleIndicators">Planos</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#suporte">Suporte</a>
                    </li>
                </ul>
            </div>
            <div>
                <a class="btn btn-primary buttons-nav" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
                

            </div>
        </div>
    </nav>

    <center>
        <div class="home-main" id="home">
            <div class="home-desc">
                <strong>Desenvolvimento de <font style="color: #0d4fae;">Sites</font> e <font style="color: #0d4fae;">Aplicativos</font></strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>

                <span>Uma agência de desenvolvimento digital focada na criação de sites e aplicativos
                    personalizados,
                    combinando design moderno com soluções tecnológicas eficientes.
                    Entendemos as necessidades de cada cliente e transformamos ideias em experiências digitais de
                    impacto.
                </span>
                <div>
                    <a class="btn buttons mb-1" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
                    <a class="btn mb-1 btn-primary buttons-nav-alter" href="https://wa.me/5587991974484" role="button">Nossos Serviços</a>

                </div>

            </div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
            <dotlottie-player class="home-img" src="https://lottie.host/a8c5ffc9-82ed-4ba2-9379-7119214f66a5/gUDoGKKgBI.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
            


        </div>
    </center>



<center>
    <div id="servicos" class="titles">
        <h1 style="font-weight: bold;">Serviços</h1>
        <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
        <span style="color: gray;">Tudo que sua empresa precisa em um só lugar</span>
        
    </div>

</center>


    <center class="mt-5">
        <div class="service-main-1">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<dotlottie-player src="https://lottie.host/e97f443a-596e-4043-8f11-bbdce8b386af/8qazOHdz2c.json" background="transparent" speed="1" class="home-img" loop autoplay></dotlottie-player>
            <div class="service-desc-1">
                <strong><font style="color: #0d4fae;">Sites</font> rápidos, responsivos e profissionais
                </strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span>Desenvolvemos sites otimizados para oferecer a melhor experiência ao usuário,
                    com design responsivo que se adapta perfeitamente a qualquer dispositivo. Nossos sites combinam
                    estética moderna com funcionalidade,
                    proporcionando uma presença digital que destaca sua marca de forma profissional e eficiente.
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
            </div>
        </div>
    </center>

    <center>
        <div class="service-main-2">
            <div class="service-desc-2">
                <strong><font style="color: #0d4fae;">Aplicativos</font> com a melhor fluidez e compatibilidade
                </strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span>Criamos aplicativos que proporcionam uma experiência de uso suave e intuitiva,
                    independentemente da plataforma. Com foco em desempenho e usabilidade,
                    entregamos aplicativos que são rápidos, responsivos e preparados para atender às necessidades dos seus usuários de forma eficaz e eficiente.
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
            </div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/8d714a46-89b0-4dcd-a817-74c831a16aec/NS0Gn5pIXD.json" class="home-img" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
    </center>

    <center>
        <center id="como-trabalhamos">
            <div class="titles-2">
                <h1 style=" font-weight: bold;">Como trabalhamos?</h1>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span style="color: gray;">Acompanhe nosso processo de desenvolvimento da sua plataforma</span>
                
            </div>

        </center>

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
                <span>Em caso de pequenas ou grandes alterações, estaremos aqui para você!</span>
            </div>
        </div>
        <script>
            document.querySelectorAll('.work-exemple').forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const {
                        offsetWidth: width,
                        offsetHeight: height
                    } = card;
                    const {
                        offsetX: x,
                        offsetY: y
                    } = e;
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

    <div class="titles-2">
                <h1 style=" font-weight: bold;">Afiliados</h1>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span style="color: gray;">Veja como você pode ganhar dinheiro conosco</span>
                
            </div>
    <center>
        <div class="service-main-2">
            <div class="service-desc-2">
                <strong>Seja nosso <font style="color: #0d4fae;">afiliado</font> e ganhe até 20% de <font style="color: #0d4fae;">comissão</font>
                </strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span>Gostaria de ganhar dinheiro conosco? Claro que sim, não é? Conheça nossos serviços e valores e ganhe uma porcentagem no valor da aplicação + uma taxa mensal em caso de assinatura de um dos planos de performance.
                     Quer saber como fazer isso? Basta clicar no botão abaixo.
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Ser afiliado</a>
            </div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <dotlottie-player src="https://lottie.host/c3155bf3-2718-4f0b-8994-d4e9d0d6cea3/Sr3uRIzxmF.json" class="home-img" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
    </center>

    <center>
        <div class="titles-2" id="suporte">
            <h1 style="color: #0d4fae; font-weight: bold;">Suporte</h1>
            <h6 style="color: white;">Descubra mais sobre nós! Nos envie um e-mail e tire qualquer dúvida</h5>
                <hr style="width: 200px; background-color: #0d4fae; height: 4px;">
        </div>

        <div class="about-main">
            <div class="about-desc">

                <img width="100" src="images/deepcode_black.png" alt="Descrição da imagem">
                <span>Agência de desenvolvimento de sites e aplicativos</span>
                <div class="about-icons">
                    <a href="https://www.instagram.com/agenciadeepcode/" style="color: white;"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/deepcode-ag%C3%AAncia/" style="color: white;"><i class="bi bi-linkedin"></i></a>
                    <a href="https://wa.me/5587991974484" style="color: white;"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <div class="about-partners">
                <strong>Parceiros</strong>
                <a href="https://cloudez.io/br?utm_campaign=partner-deepcodeagencia-deep-code-badge&utm_medium=badge&utm_source=partner&utm_content=partner&utm_term="><img alt="" width="220" height="60" src="https://files.cloudez.io/stamp/partner-sm.svg"></a>
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

    <a href="https://wa.me/5587991974484" target="_blank" class="whatsapp-button">
        <i class="bi bi-whatsapp"></i>
    </a>

    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color:#0d4fae;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }

        .whatsapp-button:hover {
            background-color: #128c7e;
            color: white;
            text-decoration: none;
        }
    </style>


</body>

</html>