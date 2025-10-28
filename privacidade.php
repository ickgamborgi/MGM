<!DOCTYPE html>
<html lang="pt-BR">

<?php
require_once('includes/connect.php');
?>

<!-- Heading -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta Descriptions -->
    <meta name="description" content="O escritório Matos & Gamborgi Menezes Advocacia oferece soluções jurídicas em Direito Empresarial, Imobiliário, Civil, Trabalhista e Eleitoral. Atuação ética, transparente e eficiente em Lages e Florianópolis. Agende sua consulta.">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Matos & Gamborgi Menezes Advocacia">
    <meta property="og:description" content="O escritório Matos & Gamborgi Menezes Advocacia oferece soluções jurídicas em Direito Empresarial, Imobiliário, Civil, Trabalhista e Eleitoral. Atuação ética, transparente e eficiente em Lages e Florianópolis. Agende sua consulta.">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Matos & Gamborgi Menezes Advocacia">
    <meta name="twitter:description" content="O escritório Matos & Gamborgi Menezes Advocacia oferece soluções jurídicas em Direito Empresarial, Imobiliário, Civil, Trabalhista e Eleitoral. Atuação ética, transparente e eficiente em Lages e Florianópolis. Agende sua consulta.">
    <meta name="twitter:image" content="">

    <!-- Ubuntu Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Font awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./images/iv_icone_azul.svg">

    <!-- Script tags -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> <!-- link to greensock main library and scroll plugin -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script type="module" src="js/main.js"></script>

    <!-- Link CSS -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- Document Title -->
    <title>MGM Advocacia</title>
</head>
<!-- Body -->
<body>
    <h1 class="hidden">Matos & Gamborgi Menezes Advocacia</h1>
    <!-- Main Content -->
    <main> 
        <!-- Header -->
        <div id="sticky-nav-con">
            <h2 class="hidden">Header</h2>
            <header>
                <!-- Main Navigation -->
                <nav class="navbar-header grid-con">
                    <h3 class="hidden">Navegação Principal</h3>

                    <div class="logo-header col-start-1">
                        <a href="index.html"><img src="./images/logo-min-white.svg" alt="MGM Minified Logo"></a>
                    </div>

                    <button id="burger-button"></button>

                    <div class="links-header">
                        <h4 class="hidden">Links Cabeçalho</h4>
                        <ul>
                            <li><a href="index.html" class="nav-item"><h5>Início</h5></a></li>
                            <li><a href="index.html#areas" class="nav-item"><h5>Áreas</h5></a></li>
                            <li><a href="index.html#profissionais" class="nav-item"><h5>Profissionais</h5></a></li>
                            <li><a href="index.html#contato" class="nav-item"><h5>Contato</h5></a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>

        <!-- Main Hero -->
        <section id="hero-privacy" class="full-width-grid-con">
            <h2 class="hidden">Hero</h2>
            <div id="blue-overlay" class="col-span-full">
                <h3 class="hidden">Degradê do Banner Principal</h3>
            </div>
            <h3 class="hero-title-2">Política de Privacidade</h3>
        </section>

        <section id="privacy-policy" class="grid-con">
            <div class="col-span-full privacy-title">
                <h2>Transparência e Proteção de Dados.</h2>
                <p>Última atualização em 28.10.2025</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>1. Introdução</h2>
                <p>A presente Política de Privacidade do escritório Matos & Gamborgi Menezes Advocacia estabelece de forma objetiva e transparente como são coletados, utilizados, armazenados e compartilhados os dados pessoais de usuários que acessam nosso site. Ao navegar em nossas páginas, você concorda com as práticas aqui descritas.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>2. Dados Pessoais Coletados</h2>
                <p>Podemos coletar as seguintes informações:<br>
                    <br>- Informações fornecidas voluntariamente: nome, e-mail, telefone e demais dados enviados por meio de formulários de contato ou cadastro.
                    <br>- Informações de navegação: endereço IP, tipo de navegador, páginas acessadas, tempo de permanência, localização aproximada e dados técnicos do dispositivo.
                    <br>- Cookies e tecnologias semelhantes: utilizados para melhorar a experiência de navegação, personalizar conteúdo e analisar métricas de uso. O usuário pode configurar seu navegador para recusar cookies, ciente de que isso pode limitar algumas funcionalidades.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>3. Finalidades do Tratamento</h2>
                <p>Os dados coletados são utilizados para:<br>
                <br>- Prestação e aprimoramento dos serviços jurídicos e de comunicação com clientes e visitantes;
                <br>- Responder solicitações e demandas encaminhadas pelo site;
                <br>- Cumprimento de obrigações legais ou regulatórias;
                <br>- Envio de informativos e materiais institucionais, quando autorizado pelo usuário;
                <br>- Análise de métricas de acesso e melhoria da experiência do usuário.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>4. Compartilhamento de Dados</h2>
                <p>Não comercializamos dados pessoais. O compartilhamento poderá ocorrer apenas:<br>
                <br>- Para cumprimento de obrigações legais ou ordens de autoridades;
                <br>- Para proteger direitos, segurança e propriedade do escritório e de terceiros;
                <br>- Com prestadores de serviços contratados que auxiliem nas operações do escritório, sempre em conformidade com a LGPD.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>5. Armazenamento e Segurança</h2>
                <p>Adotamos medidas técnicas e administrativas adequadas para proteger os dados pessoais contra acessos não autorizados, perda, alteração ou uso indevido. Contudo, nenhum sistema de transmissão ou armazenamento eletrônico é totalmente seguro, razão pela qual não é possível garantir segurança absoluta.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>6. Direitos dos Titulares</h2>
                <p>Nos termos da Lei Geral de Proteção de Dados (Lei nº 13.709/2018), os titulares podem:<br>
                <br>- Confirmar a existência de tratamento;
                <br>- Acessar seus dados;
                <br>- Solicitar correção, atualização ou exclusão;
                <br>- Solicitar portabilidade;
                <br>- Revogar consentimentos anteriormente concedidos.<br>
                <br>Tais solicitações podem ser feitas por meio da plataforma de contato constante no site.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>7. Retenção de Dados</h2>
                <p>Os dados serão mantidos apenas pelo período necessário ao cumprimento das finalidades do tratamento ou enquanto perdurar obrigação legal de guarda. Após esse prazo, serão eliminados de forma segura.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>8. Transferência Internacional de Dados</h2>
                <p>Caso seja necessário transferir dados para fora do Brasil, garantiremos que o tratamento seguirá os mesmos padrões de segurança e proteção previstos na legislação brasileira.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>9. Alterações da Política</h2>
                <p>Esta Política de Privacidade poderá ser revisada a qualquer tempo. As atualizações entrarão em vigor a partir de sua publicação no site, recomendando-se a consulta periódica pelo usuário.</p>
            </div>
            <div class="col-span-full privacy-con">
                <h2>10. Contato</h2>
                <p>Em caso de dúvidas ou solicitações relacionadas a esta Política, o titular poderá entrar em contato por meio da plataforma de contato constante no site.</p>
            </div>
        </section>

    </main>
    <!-- Footer -->
    <footer class="grid-con">
        <h2 class="hidden">Rodapé</h2>
        <div class="footer-con col-span-full">
            <div class="footer-1">
                <a href="index.html"><img src="./images/logo-footer.svg" alt="MGM Minified Logo"></a>
                <div class="footer-nav">
                    <a href="index.html">Página Principal</a>
                    <a href="index.html#contato">Contato</a>
                    <a href="#">Política de Privacidade</a>
                </div>
            </div>
            <div class="footer-2">
                <img src="./images/icon-whats.svg" alt="Ícone WhatsApp">
                <p>2025 &copy; Matos & Gamborgi Menezes <br>Todos os Direitos Reservados</p>
            </div>
        </div>
    <p id="website-designer" class="col-span-full">Website desenvolvido por <a href="https://www.henriquegamborgi.com/br" target="_blank">Henrique Gamborgi Design</a></p>
    </footer>
</body>
</html>