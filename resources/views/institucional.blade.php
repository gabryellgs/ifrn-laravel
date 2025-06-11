<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portal - noticia 01</title>
    <link rel="stylesheet" href="{{ asset('css/institucional.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
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

  <main class="conteudo-noticia">
    <nav class="opcao-noticia">
      <a href="#">Inicio</a>
      <a href="#">Acesso à Informação</a>
      <a href="#">Intitucional</a>
    </nav>
      <h1 class="titulo-noticia">Institucional</h1>
   
    <p class="texto-partiuIF">Segundo as orientações do Guia de Transparência Ativa da Controladora-Geral da União, aqui estão disponibilizadas informações instituicionais e organizacionaisdo IFRN, compreendendo suas funções, competências, estrutura organizacional, relação de autoridades (quem é quem), agenda de autoridades, horários de atendimento e legislação do instituto.</p>

    <h3 class="titulo-noticia-2">estrutura organizacional</h3>
    <p class="texto-partiuIF">A administração geral do IFRN é feita por seus orgãos colecionados deliberados e por seus orgãos executivos, nos niveis da administração geral e da administração ee cada Campus, em que se  desdobra a sua estrutura organizacional, objetivando a integração e a articulação dos diversos órgãos situados em cada niveis. Assim, a instituição tem a seguinte organização geral: órgãos colecionados; órgão executivos de administração geral (Reitoria, Campi e polo Currais Novos) e órgãos de apoio à governança.</p>

    <p class="texto-partiuIF">Acessando os links a seguir, você terá acesso à estrutura organizacional do IFRN e poderá conhecer um pouco mais sobre as estruturas de Governança do IFRN.</p>

    <h2 class="titulo-noticia-2">PartiuIF</h2>

    <p class="texto-partiuIF-3">Aqui são apresentados os ocupantes de cargos e funções, até o quinto nivel hierárquico, no âmbito do IFRN, o setor o qual pertence, cargo ou função ocupada, telefone, e-mail e curriculo.<p>

    <p class="texto-partiuIF-3">Caso você precise ter acesso aos endereços dos campi e Reitoria do IFRN, onde trabalham os titulares dos cargos e funções relacionados, você deverá acessar o endereço eletrênico: <a href="https://portal.ifrn.edu.br/campus/">https://portal.ifrn.edu.br/campus/</a>.</p>
  </main>

  
  <footer class="rodape">
    <div class="rodape-container">
      <div class="rodape-logo-contato">
        <img src="{`{ asset'images/rodape-ifrn.png' }}" alt="IFRN Logo" class="rodape-logo">
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
        <img src="{% static 'img/mec.png' %}" alt="QR Code MEC">
      </div>
    </div>

  </footer>
  <div class="rodape-direitos">
      <p>Copyright © 2025 | Instituto Federal de Educação, Ciência e Tecnologia do Estado do Rio Grande do Norte</p>
    </div>
    

</body>
</html>
