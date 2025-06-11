<!-- Correções no pe-de-meia.blade.php sem alterar o CSS existente -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portal - noticia 02</title>
    <link rel="stylesheet" href="{{ asset('css/pe.css') }}">
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
        <a href="#">Campi</a>
        <a href="#">Reitoria</a>
        <a href="#">Notícias</a>
    </nav>

    <div class="opcao-pe">
        <p>IFRN adere ao programa Pé-de-Meia Licenciatura e oferece incentivo a futuros professores</p>
    </div>

    <div class="pesquisa">
        <p>Bolsas</p>
        <h1>IFRN adere ao programa Pé-de-Meia Licenciatura e oferece incentivo a futuros professores</h1>
    </div>

    <p class="falha-gov">Estudantes de licenciaturas no IFRN poderão receber bolsa de até R$ 1.050 mensais através do programa do MEC</p>

    <p class="data-publicacao">Publicada por Max Praxedes em 20/01/2025 ― Atualizada em 20 de Janeiro de 2025 às 14:04</p>

    <p class="texto-partiuIF">O Instituto Federal do Rio Grande do Norte (IFRN) aderiu ao programa Pé-de-Meia Licenciatura, uma iniciativa do Ministério da Educação (MEC) que tem como objetivo atrair jovens para os cursos de formação docente, reduzir a evasão e fortalecer a qualificação de professores no Brasil. Através do programa, estudantes de licenciaturas que alcançarem nota mínima de 650 pontos no Enem poderão receber um incentivo financeiro de até R$ 1.050 mensais.</p>

    <p class="texto-partiuIF">Na oferta do Sistema de Seleção Unificada (Sisu) 2025, o IFRN disponibiliza vagas em diversas licenciaturas, incluindo: Biologia, Educação do Campo (habilitações em Matemática e Ciências Humanas), Física, Informática, Letras – Espanhol, Letras – Português, Matemática e Química. Estudantes que se matricularem nesses cursos pelo Sisu poderão solicitar o benefício.</p>

    <p class="texto-partiuIF">O programa prevê o pagamento de R$ 700 mensais diretamente ao estudante, além de R$ 350 depositados em uma poupança, que será liberada após o egresso ingressar na rede pública de ensino em até cinco anos.</p>

    <h2 class="inscricoes">Inscrições</h2>

    <p class="texto-partiuIF-3">As inscrições para o programa devem ser realizadas por meio do Sisu. Informações sobre as licenciaturas ofertadas pelo IFRN estão disponíveis na página do processo seletivo, enquanto os detalhes sobre o programa podem ser consultados em sua página oficial.</p>

    <h2>Critérios de participação e manutenção</h2>

    <p class="texto-partiuIF-3">Para participar do Pé-de-Meia Licenciatura no IFRN, as pessoas candidatas devem:</p>
    <ul class="texto-partiuIF-3">
        <li class="pessoas-candidatas">Ter nota mínima de 650 pontos no Enem;</li>
        <li class="pessoas-candidatas">Estar matriculados em cursos de licenciatura presenciais;</li>
        <li class="pessoas-candidatas">Ingressar pelo Sisu.</li>
    </ul>

    <p class="texto-partiuIF-2">Além disso, para manter o benefício e acessar a poupança, é necessário cursar os créditos obrigatórios por período, obter desempenho satisfatório em 75% das disciplinas a cada semestre e ingressar em uma rede pública de ensino em até cinco anos após a conclusão do curso.</p>

    <h1>Importância do programa</h1>

    <p class="texto-partiuIF-3">O Pé-de-Meia Licenciatura surge como resposta a desafios históricos enfrentados pela formação docente no Brasil. Dados do MEC apontam que a nota média de corte do Enem para licenciaturas (572 pontos) é inferior à de cursos como Direito (637) e Medicina (753). Entre 2018 e 2021, a maioria dos ingressantes em licenciaturas obteve notas abaixo de 600, e as taxas de evasão variam de 53% em Pedagogia a 73% em Física.</p>

    <p class="texto-partiuIF-3">Com o programa, o governo busca atrair estudantes de alto desempenho, reduzir a evasão e fortalecer a presença de professores qualificados na rede pública, promovendo a valorização do magistério.</p>

    <p class="texto-partiuIF-3">Segundo a pró-reitora de Ensino do IFRN, Anna Catharina Dantas, o programa, embora atualmente abrangendo apenas parte das vagas oferecidas pelo Instituto, representa um avanço significativo para a permanência dos estudantes nas licenciaturas, especialmente nas áreas de Ciências da Natureza e Matemática, como Física, Química, Biologia e Matemática: "Essas licenciaturas atendem a uma necessidade urgente de docentes para a educação pública brasileira", enfatizou. Ela também ressaltou que o IFRN dedica 20% de suas ofertas educacionais à formação de professores, sendo boa parte voltada a essas áreas, consideradas prioritárias. Além disso, Anna anunciou que, neste ano, está prevista a revisão das licenciaturas no âmbito do instituto, o que permitirá adequar e fortalecer ainda mais as ofertas educacionais.</p>
</main>

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
