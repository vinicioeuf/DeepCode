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
    <nav class="navbar navbar-expand-lg  mt-2">
        <div style="width: 80%; padding: 0;" class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ms-3 logo-pc" href="#">
                    <img style="margin-left: 0 ;" src="images/logos_deepcode_blackl.png" alt="Logo" width="70" class="d-inline-block align-top">
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
                        <a class="nav-link" href="#afiliados">Afiliados</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#planos">Planos</a>
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

    <center id="home">
        <div class="home-main" id="home">
            <div class="home-desc">
                <strong>Desenvolvimento de <font style="color: #0d4fae;">Sites</font> e <font style="color: #0d4fae;">Aplicativos</font></strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>

                <span>Junte-se a nós e transforme suas ideias em resultados! Somos uma agência especializada em criar sites e aplicativos personalizados que fazem seu negócio crescer. Oferecemos soluções tecnológicas eficientes e design moderno, sempre focados nas suas necessidades. Com nossa parceria, você terá uma presença digital de impacto que atrai clientes e impulsiona suas vendas. Vamos criar experiências que elevem seu sucesso no mundo online!
                </span>
                <div>
                    <a class="btn buttons mb-1" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
                    <a class="btn mb-1 btn-primary buttons-nav-alter" href="#servicos" role="button">Nossos Serviços</a>

                </div>

            </div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player class="home-img" src="https://lottie.host/a8c5ffc9-82ed-4ba2-9379-7119214f66a5/gUDoGKKgBI.json" background="transparent" speed="1" loop autoplay></dotlottie-player>



        </div>
    </center>



    <center id="servicos">
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
                <strong>
                    <font style="color: #0d4fae;">Sites</font> rápidos, responsivos e profissionais
                </strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span>Crie um site que vai além da estética! Desenvolvemos plataformas otimizadas para gerar conversões e engajamento, com design responsivo que se adapta perfeitamente a qualquer dispositivo. Dê à sua marca uma presença digital moderna e funcional, que realmente faça diferença e atraia clientes.
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>
            </div>
        </div>
    </center>

    <center>
        <div class="service-main-2">
            <div class="service-desc-2">
                <strong>
                    <font style="color: #0d4fae;">Aplicativos</font> com a melhor fluidez e compatibilidade
                </strong>
                <div style="display: flex; gap: 10px;">
                    <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                    <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
                </div>
                <span>Desenvolva aplicativos que encantam seus usuários! Focamos em usabilidade e desempenho, criando experiências intuitivas e rápidas. Seja qual for a plataforma, ofereça um aplicativo que não só funciona, mas encanta seus clientes.
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

        <section class="process-main">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

            <dotlottie-player src="https://lottie.host/2e020470-2e36-48f2-aa5e-eaa2ea6c1d46/8hIhyVHLLn.json" background="transparent" speed="1" class="home-img process-img" loop autoplay></dotlottie-player>
            <div class="work-main">
                <div class="work-exemple">
                    <i class="bi bi-info-circle-fill"></i>
                    <strong>Briefing</strong>
                    <span>Para iniciar, teremos uma reunião para destacar as necessidades.</span>
                    <button class="btn buttons"><a style="text-decoration: none; color: white;" href="https://wa.me/5587991974484">Fale Conosco</a></button>

                </div>

                <div class="work-exemple">
                    <i class="bi bi-code-slash"></i>
                    <strong>Desenvolvimento</strong>
                    <span>Ao coletar suas informações, o desenvolvimento da sua plataforma será executado.</span>
                    <button class="btn buttons"><a style="text-decoration: none; color: white;" href="https://wa.me/5587991974484">Fale Conosco</a></button>

                </div>

                <div class="work-exemple">
                    <i class="bi bi-globe"></i>
                    <strong>Publicação</strong>
                    <span>Após o a conclusão do desenvolvimento da plataforma, será publicado a mesma em sua devida hospedagem e domínio.</span>
                    <button class="btn buttons"><a style="text-decoration: none; color: white;" href="https://wa.me/5587991974484">Fale Conosco</a></button>

                </div>

                <div class="work-exemple">
                    <i class="bi bi-kanban"></i>
                    <strong>Acompanhamento</strong>
                    <span>Em caso de pequenas ou grandes alterações, estaremos aqui para você!</span>
                    <button class="btn buttons"><a style="text-decoration: none; color: white;" href="https://wa.me/5587991974484">Fale Conosco</a></button>

                </div>
            </div>
        </section>
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

    <div id="afiliados" class="titles-2">
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
                <span>Quer lucrar com a gente? Conheça nossos serviços e planos de performance! Ganhe uma porcentagem sobre o valor do projeto e uma taxa mensal com assinaturas. É fácil: clique no botão e comece a lucrar conosco!
                </span>
                <a class="btn buttons" href="https://wa.me/5587991974484" role="button">Ser afiliado</a>
            </div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

            <dotlottie-player src="https://lottie.host/c3155bf3-2718-4f0b-8994-d4e9d0d6cea3/Sr3uRIzxmF.json" class="home-img" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
    </center>

    <center>
        <div id="planos" class="titles">
            <h1 style="font-weight: bold;">Conheça nossos planos</h1>
            <div style="display: flex; gap: 10px;">
                <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
            </div>
            <span style="color: gray;">Fornecemos todas as configurações, suportes e melhorias para a sua aplicação a partir dos nossos planos de performance</span>

        </div>

    </center>

    <section class="planos-main">

        <div class="planos-exemple">
            <h2>Presença digital</h2>
            <center>
                <h6>Recomendado para: <br><br>
                    <font style="color: black;">Landing pages<br>Sites institucionais <br> Portfólios pessoais</font>
                </h6>
            </center>
            <ul>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Domínio próprio:</strong> Tenha um endereço único e exclusivo para sua marca.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>Hospedagem dedicada (Cloud):</strong> Seu site hospedado de forma segura e com alta performance.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Certificado SSL (HTTPS):</strong> Navegação segura e confiável para seus usuários.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Backup mensal:</strong> Proteção constante dos seus dados com backups regulares.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>Suporte via Email:</strong> Respostas rápidas para qualquer necessidade ou problema.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>CDN:</strong> Acelere o carregamento do seu site em qualquer lugar do mundo.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>PageSpeed:</strong> Otimização para garantir a navegação mais rápida possível.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Manutenção mensal:</strong> Atualizações e ajustes periódicos para manter tudo funcionando bem.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>E-mails corporativos:</strong> E-mails personalizados com o seu nome de domínio.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>Implementação de técnicas de performance e estratégias de SEO:</strong> Melhor desempenho e maior visibilidade nos buscadores.</span></li>


            </ul>


        </div>

        <div class="planos-exemple">
            <h2>Performance Pro</h2>
            <center>
                <h6>Recomendado para: <br><br>
                    <font style="color: black;">Blogs<br>Portal de notícias <br> Sistema de pedidos</font>
                </h6>
            </center>
            <ul>
            <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Domínio próprio:</strong> Tenha um endereço único e exclusivo para sua marca.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Hospedagem dedicada (Cloud):</strong> Seu site hospedado de forma segura e com alta performance.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Certificado SSL (HTTPS):</strong> Navegação segura e confiável para seus usuários.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Backup quinzenal:</strong> Proteção constante dos seus dados com backups regulares.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Suporte via Email:</strong> Respostas rápidas para qualquer necessidade ou problema.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>CDN:</strong> Acelere o carregamento do seu site em qualquer lugar do mundo.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>PageSpeed:</strong> Otimização para garantir a navegação mais rápida possível.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Manutenção quinzenal:</strong> Atualizações e ajustes regulares para manter tudo funcionando bem.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>E-mails corporativos:</strong> E-mails personalizados com o seu nome de domínio.</span></li>
                <li><i style="color: red;" class="bi bi-x-circle-fill"></i><span><strong>Implementação de técnicas de performance e estratégias de SEO:</strong> Melhor desempenho e maior visibilidade nos buscadores.</span></li>

            </ul>


        </div>

        <div class="planos-exemple">
            <h2>Máxima Performance</h2>
            <center>
                <h6>Recomendado para: <br><br>
                    <font style="color: black;">E-commerce<br>Aplicativos <br> Sistema de gestão</font>
                </h6>
            </center>
            <ul>
            <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Domínio próprio:</strong> Tenha um endereço único e exclusivo para sua marca.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Hospedagem dedicada (Cloud):</strong> Seu site hospedado de forma segura e com alta performance.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Certificado SSL (HTTPS):</strong> Navegação segura e confiável para seus usuários.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Backup semanal:</strong> Proteção constante dos seus dados com backups regulares.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Suporte via Email:</strong> Respostas rápidas para qualquer necessidade ou problema.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>CDN:</strong> Acelere o carregamento do seu site em qualquer lugar do mundo.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>PageSpeed:</strong> Otimização para garantir a navegação mais rápida possível.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Manutenção semanal:</strong> Atualizações e ajustes constantes para manter tudo funcionando bem.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>E-mails corporativos:</strong> E-mails personalizados com o seu nome de domínio.</span></li>
                <li><i style="color: green;" class="bi bi-check-circle-fill"></i><span><strong>Implementação de técnicas de performance e estratégias de SEO:</strong> Melhor desempenho e maior visibilidade nos buscadores.</span></li>


            </ul>


        </div>
    </section>


    <center>
        <div id="suporte" class="titles">
            <h1 style="font-weight: bold;">Suporte</h1>
            <div style="display: flex; gap: 10px;">
                <hr style="height: 9px; width: 70px; border: none; background-color: #0d4fae; opacity: 1; border-radius:10px">
                <hr style="height: 9px; width: 50px; border: none; background-color: gray; border-radius:10px">
            </div>
            <span style="color: gray;">Descubra mais sobre nós! Nos envie um e-mail e tire qualquer dúvida</span>

        </div>

    </center>

    <center>
        <section class="suporte-main">
            <img src="images/suporte.jpg" alt="">
            <form action="sendmail.php" method="post">
                <h3>Fale conosco</h3>
                <span style="color: gray;">Nos diga quem você é, sua empresa e suas necessidades</span>
                <div class="suport-inputs">
                    <input type="text" placeholder="Nome" name="nome" required>
                    <input type="number" placeholder="WhatsApp" name="whats">
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="text" placeholder="Empresa" name="empresa">
                    <select name="necessidade" id="" required>
                        <option value="" disabled selected>Qual a necessidade da sua empresa?</option>
                        <option value="Preciso de um site para alcançar meu espaço no digital">Preciso de um site para alcançar meu espaço no digital</option>
                        <option value="Já tenho site! Quero alavancar o alcance para mais pessoas">Já tenho site! Quero alavancar o alcance para mais pessoas</option>
                        <option value="Quero ser afiliado da Deepcode">Quero ser afiliado da Deepcode</option>
                        <option value="Outros">Outros</option>
                    </select>

                    <div>
                        <input style="width: 10px; height:10px" type="checkbox" required>
                        <span>Li e concordo com a <a href="politics.php">Política de Privacidade</a> e os <a href="termos.php">Termos de uso</a> do site.</span>
                    </div>
                    <button style="width: 100%;" class="buttons btn">Enviar mensagem</button>
                </div>
            </form>
        </section>
    </center>

    <center style="background-color: black; margin: 0 auto;
   position: relative;">
        <div class="about-main">
            <div class="about-home">
                <img width="100" src="images/deepcode_black.png" alt="">
                <span align="left">Agência de desenvolvimento de sites e aplicativos</span>
                <div class="about-home-icons">
                    <a href="https://www.instagram.com/agenciadeepcode/"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/5587991974484"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/company/deepcode-ag%C3%AAncia/"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="about-service">
                <h3>Serviços</h3>
                <span>Criação de sites</span>
                <span>Criação de aplicativos</span>
                <span>Afiliação</span>
                <span>Planos de performance</span>

            </div>

            <div class="about-politic">
                <h3>Políticas</h3>
                <span><a href="politics.php" style="text-decoration: none; color: gray;">Privacidade</a></span>
                <span><a href="termos.php" style="text-decoration: none; color: gray;">Termos de uso</a></span>

            </div>

            <div class="about-partners">
                <h3>Parceiros</h3>
                <img width="100" src="images/cloudez_partner.png" alt="">
            </div>
        </div>

        <br><br>
        <div style="width: 100%;">
            <span style="text-align: center; color:white; margin-bottom: 10px;">Copyright 2024 &copy; DeepCode</span>
        </div>
    </center>



    <a href="https://wa.me/5587991974484" target="_blank" class="whatsapp-button">
        <i class="bi bi-whatsapp"></i>
    </a>

    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: black;
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
            background-color: gray;
            color: black;
            text-decoration: none;
        }
    </style>


</body>

</html>