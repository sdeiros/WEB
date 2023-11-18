<!-- ALT + SGIFT + F = Organiza -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novas Raízes</title>

    <link rel="stylesheet" type="text/css" href="css/Styles.css" />
    <link rel="stylesheet" type="text/css" href="css/Reset.css" />
    <link rel="stylesheet" type="text/css" href="css/responsivo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@1,700&display=swap"
        rel="stylesheet">

    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="60x60" href="./Imagens/FavIcon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Imagens/FavIcon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Imagens/FavIcon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="./Imagens/FavIcon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <nav id="menu">
        <img src="./Imagens/Logo.png" class="logo-nav" alt="LogoNovas Raízes">

        <ul>
            <li><a class="inform" href="#">Informações</a></li>
            <li><a class="sobre" href="#">Sobre nós</a></li>
        </ul>
        <a href="/WEB/cadastro.php"><button class="cadastrar">Cadastrar</button></a>

        <?php
            session_start();
            if(!isset($_SESSION["usuario"])){
                echo "<li class='nav-item'>
                <a href='/WEB/login.php'><button class='login' aria-current='page'>Login</button></a>";
            }else {
                $user=$_SESSION["usuario"];
                echo "<li class='nav-tem'>
                <a class='nav-link active' aria-current='page' href='#'>".
                    $user."</li>";
            }
        ?>
    </nav>

    <div class="fundo"></div>

    <h1 class="titulo">Novas Raízes</h1>

    <div class="image-slideshow">
        <div><img class="image fade" src="Imagens/povos2.png"></div>
        <div><img class="image fade" src="Imagens/povos03.png"></div>
        <div><img class="image fade" src="Imagens/povos05.png"></div>
        <div><img class="image fade" src="Imagens/povos07.png"></div>
        <div><img class="image fade" src="Imagens/povos09.png"></div>
        <div><img class="image fade" src="Imagens/povos11.png"></div>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade"><img class="photo fade" src="Imagens/povos1.png"></div>
        <div class="mySlides fade"><img class="photo fade" src="Imagens/povos04.png"></div>
        <div class="mySlides fade"><img class="photo fade" src="Imagens/povos06.png"></div>
        <div class="mySlides fade"><img class="photo fade" src="Imagens/povos08.png"></div>
        <div class="mySlides fade"><img class="photo fade" src="Imagens/povos10.png"></div>
        <div class="mySlides fade"><img class="photo fade" src="Imagens/povos12.png"></div>
    </div>
    <script src="main.js"></script>
    <script src="main2.js"></script>

    <div><img class="linha" src="Imagens/linha.png"></div>

    <main>
        <h2 class="titulo-main">Ultimas Informações</h2>

        <img class="star01-main" src="Imagens/Star1.png" alt="Estrela">
        <img class="star" src="Imagens/Star2.png" alt="Estrela">

        <div id="card01-main">
            <img class="img-card1" src="Imagens/ftcard01.png">

            <h2 class="titulo-card1">Lorem ipsum dolor sit amet.</h2>
            <h6 class="subtitulo-card1">Ut quae enim aut tempore facere et laudantium provident ea pariatur
                exercitationem qui provident quasi. Nam ducimus fugit est voluptas laboriosam eos optio quae sit rerum
                rerum aut quibusdam aliquam et praesentium velit est assumenda inventore. Sit quis explicabo id
                perspiciatis quos et laboriosam facere in autem alias...</h6><a href="">
                <p>Ler Mais</p>
            </a>

            <h6 class="data">Data: 24/03/2023</h6>
            <h6 class="hora">Horário: 13:35</h6>

            <div class="sobreposição"></div>
        </div>

        <button class="v-mais">Ver mais</button>

        <div class="sobre-main">
            <div class="fundo-degrade"></div>
            <div class="circle"></div>
            <div class="circle2"></div>
            <h2 class="titulo-sobre">Conheça o Brasil<br>e a sua Cultura</h2>
            <p class="txt01">A cultura do Brasil é rica e diversa, resultado da mistura de diferentes tradições
                indígenas, africanas e europeias. A música, culinária, artesanato, literatura e danças folclóricas são
                aspectos importantes. O Carnaval é uma festa popular conhecida mundialmente. Para os refugiados, o
                Brasil pode oferecer uma experiência cultural única, com oportunidades de aprendizado e imersão em
                diferentes tradições.</p>
            <p class="txt02">O país tem uma das maiores e mais diversificadas economias da América Latina, oferecendo
                oportunidades de trabalho e desenvolvimento. Além disso, o Brasil tem uma política de refúgio
                reconhecida internacionalmente, que garante a proteção e os direitos dos refugiados. O país também tem
                uma cultura acolhedora e diversa, com muitas comunidades de imigrantes e refugiados que oferecem apoio e
                solidariedade.</p>
            <img class="feira-main" src="Imagens/pexels-felipe-kirejian-9867200 1.png"
                alt="Imagem de uma feira com frutas típica no Brasil">

        </div>

        <div class="Candido">
            <div class="slide-obra">
            <div class="obra"><img class="obra-candido" src="Imagens/3FFz5caVWlPQT5P5XkQ2m3qpZS4sva8O 1.png" alt="Quadro: Os Retirantes de Candido Portinari de 1944"></div>
            
            </div>
            <script src="main3.js"></script>

            <div class="pelicula"></div>
            <div class="fundo-nome"></div>

            <h3 class="obra-titulo">Os Retirantes</h3>
            <h3 class="obra-ano">(1944)</h3>
            <h1 class="nome-candido">Candido</h1>
            <h1 class="sobrenome-candido">Portinari</h1>
            <p class="ano">1903-1962</p>


            <P class="txt01-candido">Candido Portinari (1903-1962) foi um dos mais importantes artistas plásticos
                brasileiros do século XX. Nasceu em Brodowski, uma cidade do interior do estado de São Paulo, em uma
                família de imigrantes italianos. Desde a infância, mostrou talento para a pintura e recebeu incentivo do
                pai para estudar arte.</P>

            <P class="txt02-candido">Foi um defensor dos direitos dos refugiados. Durante a Segunda Guerra Mundial, ele
                se envolveu em movimentos antifascistas e chegou a ser preso por suas opiniões políticas. Em 1943, ele e
                sua família emigraram para o Uruguai para escapar da perseguição política no Brasil. Lá, ele fez parte
                do movimento de artistas antifascistas e se tornou amigo de muitos refugiados europeus que haviam fugido
                do nazismo.</P>

            <P class="txt03-candido">Candido Portinari faleceu em 1962, deixando um legado de obras que são apreciadas
                até hoje por sua beleza, técnica e crítica social. Suas obras podem ser vistas em museus e coleções
                particulares em todo o mundo.</P>


            <h2 class="sobre-candido">Sobre</h2>
            <p class="brasil-candido">Brasileiro</p>
            <p class="paisrefugiados">Pais Refugiados</p>
            <p class="artistacandido">Artista Plástico</p>
        </div>
    </main>
</body>

</html>