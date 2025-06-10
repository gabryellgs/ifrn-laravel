<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFRN - Página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" rel="stylesheet" />

</head>
<body>

   <header class="header">
        <div class="container">
            <div class="foto-logo">
                <img src="{{ asset('images/ifrn-logo.png') }}" alt="Logo do IFRN">
                <div class="slogan">
                    <p>Educação, Ciência, Cultura e Tecnologia em todo o Rio Grande do Norte</p>
                </div>

            </div>
        </div>
        <ul class="social">
            <li><a href="https://www.instagram.com/ifrnoficial/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/IFRN_" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/school/ifrn/" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.youtube.com/@ifrnoficial" title="YouTube"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://open.spotify.com/user/ifrn" title="Spotify"><i class="fab fa-spotify"></i></a></li>
            <li class="social-divider"></li>
            <li><a href="#" id="btn-contraste" title="Alto Contraste"><i class="fas fa-adjust"></i></a></li>
            <li><a href="#" id="btn-dark" title="Modo Escuro"><i class="fas fa-moon"></i></a></li>
        </ul>
          <form class="busca" action="#" method="get">
            <button type="submit" title="Buscar"><i class="fas fa-search"></i></button>
            <input type="text" placeholder="Buscar" name="q" />
          </form>
   </header>

   <nav class="menu-navegacao">
    <ul>
      <li><a href="#">Processos Seletivos</a></li>
      <li><a href="#">Cursos</a></li>
      <li><a href="#">Campi</a></li>
      <li><a href="#">Institucional</a></li>
      <li><a href="#">Acesso à Informação</a></li>
      <li><a href="#">Eventos</a></li>
      <li><a href="#">Serviços</a></li>
    </ul>
  </nav>

  <section class="cards-section">
    <div class="card">
      <a href="{% url 'noticia01' %}">
        <img src="{{ asset('images/jogos-estudantis.png') }}" alt="ProITEC">
        <div class="card-nome">Acesse a página dos jogos</div>   
      </a>
    </div>
    <div class="card">
      <img src="{{ asset('images/Modo-Aviao.png') }}" alt="Modo Avião">
      <div class="card-nome">Saiba mais</div>
    </div>
    <div class="card">
      <img src="{{ asset('images/Programa_PartiuIF.png') }}" alt="#Partiu">
      <div class="card-nome">confira o resultado</div>
    </div>
    <div class="card">
      <img src="{{ asset('images/pe_de_meia.png') }}" alt="Pé-de-Meia">
      <div class="card-nome">confira os detalhes</div>
    </div>

  </section>
  <section class="noticias">
      <div class="section-title-container">
        <h2 class="title">Notícias</h2>
        <a href="#" class="todas-noticias">Todas as notícias <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="noticias-grid">
        <!-- Notícia 1 -->
        <div class="noticia-card">
          <img src="{{ asset('images/funcern.png') }}" alt="parceria do ifrn">
          <p class="categoria">Parceria</p>
          <h3 class="titulo">IFRN e Funcern se reúnem com Neoenergia Cosern</h3>
          <p class="descricao">Encontro discutiu futuras parcerias entre as duas instituições</p>
          <p class="tempo">Há 10 horas, 55 minutos</p>
        </div>
  
        <!-- Notícia 2 -->
        <div class="noticia-card">
          <a href="{% url 'noticia02' %}">
            <img src="{{ asset('images/extensao.png') }}" alt="projeto de extensão">
          </a>
          <p class="categoria">Articulação social</p>
          <h3 class="titulo">Extensão: divulgados resultados de sete editais</h3>
          <p class="descricao">Seleções definiram iniciativas que promoverão a integração entre o IFRN e a sociedade em 2025<p>
          <p class="tempo">Há 7 horas, 44 minutos</p>
        </div>
  
        <!-- Notícia 3 -->
        <div class="noticia-card">
          <img src="{{ asset('images/lato-sensu.png') }}" alt="Projeto de pesquisa">
          <p class="categoria">Lato Sensu</p>
          <h3 class="titulo">IFRN abre seleção para cursos de especialização com ingresso no segundo semestre de 2025</h3>
          <p class="descricao">Oferta contempla sete campi; inscrições acontecem até 30 de junho</p>
          <p class="tempo">Há 18 horas, 35 minutos</p>
        </div>
  
        <!-- Notícia 4 -->
        <div class="noticia-card">
          <img src="{{ asset('images/cultura.png') }}" alt="internaciolização">
          <p class="categoria">Cultura</p>
          <h3 class="titulo">Ministério da Cultura realiza I Encontro Regional de Agentes Territoriais de Cultura do Nordeste em Natal</h3>
          <p class="descricao">Em parceria com IFRN, evento faz parte do Programa Nacional dos Comitês de Cultura para fortalecer redes nos estados da região</p>
          <p class="tempo">Há 18 horas, 35 minutos</p>
        </div>
      </div>
       <div class="section-title-container-2">
        <h2>IFRN em números</h2>
      </div>
      <p class="descricao-ifrn">Em uma instituição centenária, os números tendem a ser superlativos. No IFRN, esse conceito é levado ao extremo, sempre com foco na qualidade dos serviços prestados à sociedade. Somos:</p>
    
      <div class="numeros-grid">
  <div class="numeros-card">
    <span class="material-symbols-sharp icon">domain</span>
    <div class="numeros-info">
      <strong>22</strong>
      <p>Campi (Unidades de Ensino)</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">view_module</span>
    <div class="numeros-info">
      <strong>222</strong>
      <p>Ofertas de Cursos</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">school</span>
    <div class="numeros-info">
      <strong>35.275</strong>
      <p>Estudantes matriculados</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">group</span>
    <div class="numeros-info">
      <strong>2.978</strong>
      <p>Servidores Públicos</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">storefront</span>
    <div class="numeros-info">
      <strong>9</strong>
      <p>Incubadoras</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">computer</span>
    <div class="numeros-info">
      <strong>6</strong>
      <p>Núcleos de Tecnologia</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">work</span>
    <div class="numeros-info">
      <strong>423</strong>
      <p>Projetos de Extensão em andamento</p>
    </div>
  </div>

  <div class="numeros-card">
    <span class="material-symbols-sharp icon">science</span>
    <div class="numeros-info">
      <strong>722</strong>
      <p>Projetos de Pesquisa em andamento</p>
    </div>
  </div>
</div>

    </div>
  </section>

  <footer class="rodape">
    <div class="rodape-container">
      <div class="rodape-logo-contato">
        <img src="{{ asset('images/rodape-ifrn.png') }}" alt="IFRN Logo" class="rodape-logo">
        <div class="rodape-texto">
          <h3>Instituto Federal de Educação, Ciência e Tecnologia do Estado do Rio Grande do Norte</h3>
          <p>Rua Dr. Nilo Bezerra Ramalho, 1692, Tirol</p>
          <p>CEP: 59015-300</p>
          <p>E-mail: comunicacao.reitoria@ifrn.edu.br</p>
          <p>Telefone: (84) 4005-0890</p>
            <div class="rodape-redes">
              <div><a href="https://www.instagram.com/ifrnoficial/" title="Instagram"><i class="fab fa-instagram"></i></a></div>
              <div><a href="https://twitter.com/IFRN_" title="Twitter"><i class="fab fa-x-twitter"></i></a></div>
              <div><a href="https://www.linkedin.com/school/ifrn/" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></div>
              <div><a href="https://www.youtube.com/@ifrnoficial" title="YouTube"><i class="fab fa-youtube"></i></a></div>
              <div><a href="https://open.spotify.com/user/ifrn" title="Spotify"><i class="fab fa-spotify"></i></a></div>
            </div>
      </div>
  
      <div class="rodape-mec">
        <img src="{{ asset('images/mec.png') }}" alt="QR Code MEC">
      </div>
    </div>

  </footer>
  <div class="rodape-direitos">
      <p>Copyright © 2025 | Instituto Federal de Educação, Ciência e Tecnologia do Estado do Rio Grande do Norte</p>
    </div>
    
</body>
</html>