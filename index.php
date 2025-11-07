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
    <meta property="og:image" content="https://advocaciamgm.com.br/images/intro.webp">
    <meta property="og:url" content="https://advocaciamgm.com.br">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Matos & Gamborgi Menezes Advocacia">
    <meta name="twitter:description" content="O escritório Matos & Gamborgi Menezes Advocacia oferece soluções jurídicas em Direito Empresarial, Imobiliário, Civil, Trabalhista e Eleitoral. Atuação ética, transparente e eficiente em Lages e Florianópolis. Agende sua consulta.">
    <meta name="twitter:image" content="https://advocaciamgm.com.br/images/intro.webp">

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
                        <a href="index.php"><img src="./images/logo-min-white.svg" alt="MGM Minified Logo"></a>
                    </div>

                    <button id="burger-button"></button>

                    <div class="links-header">
                        <h4 class="hidden">Links Cabeçalho</h4>
                        <ul>
                            <li><a href="index.php" class="nav-item"><h5>Início</h5></a></li>
                            <li><a href="index.php#areas" class="nav-item"><h5>Áreas</h5></a></li>
                            <li><a href="index.php#profissionais" class="nav-item"><h5>Profissionais</h5></a></li>
                            <li><a href="index.php#contato" class="nav-item"><h5>Contato</h5></a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>

        <!-- Main Hero -->
        <section id="hero" class="full-width-grid-con">
            <h2 class="hidden">Hero</h2>
            <div id="blue-overlay" class="col-span-full">
                <h3 class="hidden">Degradê do Banner Principal</h3>
            </div>
            <img src="./images/logo-type-white.svg" alt="MGM Logotipo" class="col-span-full hero-image">
        </section>

        <!-- Introduction Section -->
        <section id="introduction" class="grid-con">
            <h2 class="hidden">Introdução</h2>
            <img src="./images/intro.webp" alt="Trabalhando com o Escritório Matos & Gamborgi Menezes" class="introduction-image col-span-full m-col-start-1 m-col-end-7">
            <div class="introduction-con col-span-full m-col-start-7 m-col-end-13">
                <h3 class="hidden">Título Introdutório</h3>
                <div class="introduction-title-con">
                    <h4 class="introduction-subtitle">Sobre Nós</h4>
                    <h5 class="introduction-title">Profissionalismo e Confiança</h5>
                </div>
                <div class="introduction-body-con">
                    <h4 class="hidden">Texto Introdutório</h4>
                    <p class="introduction-body-text">O escritório Matos & Gamborgi Menezes Advocacia conta com ampla experiência em Direito Empresarial, Imobiliário, Civil, Trabalhista e Eleitoral, atuando tanto na consultoria quanto na representação judicial.</p>
                    <p class="introduction-body-text">Nossa missão é gerar resultados concretos, oferecendo soluções jurídicas que atendam às necessidades de cada cliente, sempre explicando de forma clara e objetiva o caminho jurídico proposto.</p>
                    <p class="introduction-body-text">Nos guiamos pelos princípios de competência e especialização, oferecendo estratégias jurídicas eficazes; ética e transparência, garantindo integridade e clareza em todas as orientações; e agilidade e proatividade, antecipando riscos e assegurando a melhor proteção jurídica para nossos clientes.</p>
                </div>
                <a class="button" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20legal!" target=_blank>
                    <h4>Agendar Consulta ></h4>
                </a>
            </div>
        </section>

        <!-- Areas Section -->
        <section id="areas" class="grid-con">
            <h2 class="hidden">Áreas de Atuação</h2>
            <div class="areas-title-con col-span-full">
                <h3 class="areas-subtitle">Áreas de Atuação</h3>
                <h4 class="areas-title">Trabalhamos Com</h4>
            </div>
            <div class="areas-cards-con col-span-full">
                <h3 class="hidden">Cards de Áreas de Atuação</h3>
                <!-- Civil -->
                <a class="areas-card" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20com%20Direito%20Civil!" target=_blank>
                    <img class="areas-card-image" src="./images/icon_civil.svg" alt="Direito Civil">
                    <div class="areas-card-title-con">
                        <h4 class="areas-card-subtitle">Direito</h4>
                        <h4 class="areas-card-title">Civil</h4>
                    </div>
                </a>
                <!-- Empresarial -->
                <a class="areas-card" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20com%20Direito%20Empresarial!" target=_blank>
                    <img class="areas-card-image" src="./images/icon_empresarial.svg" alt="Direito Empresarial">
                    <div class="areas-card-title-con">
                        <h4 class="areas-card-subtitle">Direito</h4>
                        <h4 class="areas-card-title">Empresarial</h4>
                    </div>
                </a>
                <!-- Imobiliário -->
                <a class="areas-card" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20com%20Direito%20Imobili%C3%A1rio!" target=_blank>
                    <img class="areas-card-image" src="./images/icon_imobiliario.svg" alt="Direito Imobiliário">
                    <div class="areas-card-title-con">
                        <h4 class="areas-card-subtitle">Direito</h4>
                        <h4 class="areas-card-title">Imobiliário</h4>
                    </div>
                </a>
                <!-- Administrativo -->
                <a class="areas-card" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20com%20Direito%20Administrativo!" target=_blank>
                    <img class="areas-card-image" src="./images/icon_administrativo.svg" alt="Direito Administrativo">
                    <div class="areas-card-title-con">
                        <h4 class="areas-card-subtitle">Direito</h4>
                        <h4 class="areas-card-title">Administrativo</h4>
                    </div>
                </a>
                <!-- Trabalhista -->
                <a class="areas-card" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20com%20Direito%20Trabalhista!" target=_blank>
                    <img class="areas-card-image" src="./images/icon_trabalhista.svg" alt="Direito Trabalhista">
                    <div class="areas-card-title-con">
                        <h4 class="areas-card-subtitle">Direito</h4>
                        <h4 class="areas-card-title">Trabalhista</h4>
                    </div>
                </a>
                <!-- Eleitoral -->
                <a class="areas-card" href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20com%20Direito%20Eleitoral!" target=_blank>
                    <img class="areas-card-image" src="./images/icon_eleitoral.svg" alt="Direito Eleitoral">
                    <div class="areas-card-title-con">
                        <h4 class="areas-card-subtitle">Direito</h4>
                        <h4 class="areas-card-title">Eleitoral</h4>
                    </div>
                </a>
            </div>
        </section>

        <!-- Team Section -->
        <section id="profissionais" class="grid-con">
            <h2 class="hidden">Profissionais</h2>
            <div class="team-title-con col-span-full">
                <h3 class="team-subtitle">Profissionais</h3>
                <h4 class="team-title">Advogados</h4>
            </div>
            <div class="team-cards-con col-span-full">
                <h3 class="hidden">Cards de Profissionais</h3>
                <!-- Leonardo Matos -->
                <a class="team-member" id="leo" href="https://www.linkedin.com/in/leonardomluz/" target=_blank>
                    <div class="team-image">
                      <img src="./images/leonardo-matos.webp" alt="Leonardo Matos da Luz">
                      <div class="team-image-overlay"></div>
                    </div>
                    <div class="team-content">
                      <h2 class="member-name"><span>Leonardo</span> Matos da Luz</h2>
                      <div class="member-oab">
                        <i class="fa-brands fa-linkedin"></i>
                        <h3>OAB/SC 64.850</h3>
                      </div>
                      <div class="member-index">
                        <p>Bacharel em Direito pela Universidade Federal de Santa Catarina (UFSC)</p>
                        <p>Pós-graduado em Direito Societário e Contratos Empresariais pela PUC/PR</p>
                      </div>
                      <div class="member-text">
                        <p>Experiência em assessoria empresarial, com ênfase na estruturação e reorganização societária, gestão de relações trabalhistas e condução de defesas administrativas, incluindo atuação estratégica em direito eleitoral.</p>
                      </div>
                    </div>
                </a>
                <!-- Matheus Gamborgi -->
                <a class="team-member" id="matt" href="https://www.linkedin.com/in/matheus-gamborgi-menezes-345016144/" target=_blank>
                    <div class="team-image">
                      <img src="./images/matheus-gamborgi.webp" alt="Matheus Gamborgi Menezes">
                      <div class="team-image-overlay"></div>
                    </div>
                    <div class="team-content">
                      <h2 class="member-name"><span>Matheus</span> Gamborgi Menezes</h2>
                      <div class="member-oab">
                        <i class="fa-brands fa-linkedin"></i>
                        <h3>OAB/SC 58.869</h3>
                      </div>
                      <div class="member-index">
                        <p>Bacharel em Direito pela Faculdade CESUSC</p>
                        <p>Pós-graduado em Direito Público: Constitucional, Administrativo e Tributário pela PUC/RS</p>
                        <p>Mestrando em Direito pela UFSC</p>
                      </div>
                      <div class="member-text">
                        <p>Experiência em direito civil, com ênfase em responsabilidade civil, contratos e estruturação de operações imobiliárias, além de atuação em direito administrativo e ambiental.</p>
                      </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Offices Section -->
        <section id="escritorios" class="grid-con">
            <h2 class="hidden">Escritórios</h2>
            <div class="office-title-con col-span-full">
                <h3 class="office-subtitle">Localização</h3>
                <h4 class="office-title">Escritórios</h4>
            </div>
            <div class="office-cards-con col-span-full">
                <h3 class="hidden">Cards de Escritórios</h3>
                <!-- Lages -->
                <a class="office-card" href="https://www.google.com/maps/search/Av.+Beliz%C3%A1rio+Ramos+n%C2%BA+3735,+Ed.+Number+One,+Sagrado+Cora%C3%A7%C3%A3o+De+Jesus/"  target=_blank id="lages">
                    <div class="office-card-con">
                        <h4 class="office-city">Lages</h4>
                        <h4 class="office-state">Santa Catarina</h4>
                    </div>
                    <p class="office-address">Av. Belizário Ramos nº 3735, Ed. Number One, Sagrado Coração De Jesus</p>
                    <img class="office-icon" src="./images/icon-loc.svg" alt="Ícone Localização">
                </a>
                <!-- Florianópolis -->
                <a class="office-card" href="https://maps.app.goo.gl/bdgpeojFyu9TRTc96" target=_blank id="florianopolis">
                    <div class="office-card-con">
                        <h4 class="office-city">Florianópolis</h4>
                        <h4 class="office-state">Santa Catarina</h4>
                    </div>
                    <p class="office-address">Rua Jerônimo Coelho nº 280, sala 207, Ed. Sudameris, Centro</p>
                    <img class="office-icon" src="./images/icon-loc.svg" alt="Ícone Localização">
                </a>
            </div>
        </section>

        <section id="contato" class="grid-con">
            <h2 class="hidden">Sessão de Contato</h2>
            <div class="contact-text-con col-span-full">
                <div class="office-title-con col-span-full">
                <h3 class="office-subtitle">Contato</h3>
                <h4 class="office-title">Como podemos ajudar?</h4>
            </div>
                <p class="contact-text">Ao enviar este formulário, você demonstra estar ciente e concorda com nossa <a href="privacidade.php" target=_blank><span>Política de Privacidade</span></a></p>
            </div>
            <div class="contact-form-con col-span-full ">
                <h3 class="hidden">Formulário de Contato</h3>
                <!-- Form -->
                <form class="form" method="post" action="sendmail.php">
                    <input name="name" type="text" placeholder="Seu nome...">
                    <input name="email" type="email" placeholder="Seu e-mail...">
                    <input name="phone" type="phone" placeholder="Seu celular...">
                    <input name="message" type="text"  placeholder="Sua demanda...">

                    <!-- Honeypot Field (Hidden from Users) -->
                    <input type="text" name="honeypot" id="honeypot">

                    <!-- Math Question -->
                    <input type="number" id="math-answer" name="math_answer" placeholder="1 + 1 = ?">
                    <input type="hidden" id="math-expected" name="math_expected">
                    
                    <button class="button" name="submit" type="submit" value="Send"><span>Enviar ></span></button>
                </form>

                <div id="feedback" class="col-span-full"><p>Por favor, preencha todos os campos</p></div>
            </div>

        </section>

    </main>
    <!-- Footer -->
    <footer class="grid-con">
        <h2 class="hidden">Rodapé</h2>
        <div class="footer-con col-span-full">
            <div class="footer-1">
                <a href="index.php"><img src="./images/logo-footer.svg" alt="MGM Minified Logo"></a>
                <div class="footer-nav">
                    <a href="index.php">Página Principal</a>
                    <a href="index.php#contato">Contato</a>
                    <a href="privacidade.php" target=_blank>Política de Privacidade</a>
                </div>
            </div>
            <div class="footer-2">
                <a href="https://api.whatsapp.com/send?phone=5548999368405&text=Ol%C3%A1,%20encontrei%20o%20n%C3%BAmero%20via%20website%20e%20preciso%20de%20ajuda%20legal!" target=_blank>
                    <img src="./images/icon-whats.svg" alt="Ícone WhatsApp">
                </a>
                <p>2025 &copy; Matos & Gamborgi Menezes <br>Todos os Direitos Reservados</p>
            </div>
        </div>
    <p id="website-designer" class="col-span-full">Website desenvolvido por <a href="https://www.henriquegamborgi.com/br" target="_blank">Henrique Gamborgi Design</a></p>
    </footer>
</body>
</html>