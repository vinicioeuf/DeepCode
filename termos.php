<!DOCTYPE html>
<html lang="en">
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
    <title>Termos de uso - DeepCode Agência</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  mt-2">
        <div style="width: 80%;" class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ms-3 logo-pc" href="index.php">
                    <img src="images/logos_deepcode_blackl.png" alt="Logo" width="70" class="d-inline-block align-top">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  ms-4">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="index.php">Serviços</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="index.php">Como trabalhamos?</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="index.php">Afiliados</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="index.php">Planos</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="index.php">Suporte</a>
                    </li>
                </ul>
            </div>
            <div>
                <a class="btn btn-primary buttons-nav" href="https://wa.me/5587991974484" role="button">Fale Conosco</a>


            </div>
        </div>
    </nav>

    <br><br>
    <section style="width: 80%; margin: 0 auto; text-align: left;">
    <h1 style="color: #0d4fae; font-weight: bolder;">Termos de Uso</h1>
    
    <p>
        1. <strong>Aceitação dos Termos</strong><br>
        Ao acessar e utilizar o site <a href="https://deepcodeagencia.com.br">https://deepcodeagencia.com.br</a>, você concorda com estes Termos de Uso e com todas as leis e regulamentações aplicáveis. Caso não concorde com os termos aqui apresentados, recomendamos que não utilize nosso site.
    </p>
    
    <p>
        2. <strong>Alteração dos Termos</strong><br>
        A Deepcode reserva-se o direito de alterar ou atualizar os Termos de Uso a qualquer momento, publicando as modificações no site. O uso contínuo do site após a publicação dessas alterações será considerado como aceitação das novas condições.
    </p>
    
    <p>
        3. <strong>Uso do Site</strong><br>
        Ao utilizar o site, você concorda em fazê-lo apenas para fins lícitos e em conformidade com os Termos de Uso. Você não deve:
        <ul>
            <li>Usar o site de forma que cause danos, desative, sobrecarregue ou prejudique sua funcionalidade.</li>
            <li>Tentar obter acesso não autorizado a qualquer parte do site, a contas de outros usuários, sistemas de computador ou redes associadas ao site.</li>
            <li>Reproduzir, duplicar, copiar, vender ou explorar qualquer parte do site sem a permissão expressa da Deepcode.</li>
        </ul>
    </p>
    
    <p>
        4. <strong>Propriedade Intelectual</strong><br>
        Todo o conteúdo disponível no site, incluindo textos, gráficos, logos, ícones, imagens, clipes de áudio, downloads digitais e compilações de dados, pertence à Deepcode ou aos seus fornecedores de conteúdo, e está protegido pelas leis de direitos autorais.
    </p>
    
    <p>
        5. <strong>Privacidade</strong><br>
        O uso do site também é regido por nossa Política de Privacidade, que detalha como coletamos, usamos e protegemos suas informações pessoais.
    </p>
    
    <p>
        6. <strong>Limitação de Responsabilidade</strong><br>
        A Deepcode não será responsável por quaisquer danos diretos, indiretos, incidentais, consequenciais ou punitivos decorrentes do uso ou da incapacidade de usar o site, mesmo que tenha sido informada sobre a possibilidade de tais danos.
    </p>
    
    <p>
        7. <strong>Disposições Gerais</strong><br>
        Estes Termos de Uso são regidos e interpretados de acordo com as leis do Brasil. Qualquer disputa que surja em relação a estes termos será resolvida nos tribunais competentes do Brasil.
    </p>
</section>

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
                        <span>Li e concordo com a <a href="politics.php">Política de Privacidade</a> e os <a href="termos.php">Termos de site</a>.</span>
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
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-envelope"></i>
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
                    <span>Privacidade</span>
                    <span>Termos de uso</span>
                
                </div>
    
                <div  class="about-partners">
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