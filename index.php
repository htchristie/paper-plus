<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaperPlus | Papelaria e Escritório</title>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon/site.webmanifest">

    <!-- BOOSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

</head>
<body>

  <!-- BARRA DE NAVEGAÇÃO -->

  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container-fluid px-sm-5">
    <a class="navbar-brand" href="index.php">
      <img src="/PaperPlus/imgs/logo-100.png" alt="Logo PaperPlus" width="160px" height="auto">
    </a>
    <div class="carrinho order-lg-last mx-3">
      <a class="carrinho" href="carrinho.html" data-bs-toggle="tooltip" title="Carrinho">
        <i class="bi bi-cart3"></i>
      </a>
    </div>
    <button class="navbar-toggler ms-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <i class="bi bi-list"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="mynavbar">

      <form class="d-flex input-group mx-lg-5" action="pesquisa.php" method="GET">
        <button class="btn btn-primary" type="submit">
          <i class="bi bi-search text-muted"></i>
        </button>
        <input type="text" name="search" class="form-control border-0" placeholder="O que você procura?">
      </form>

      <ul class="d-flex navbar-nav align-items-center">
        <li class="nav-item mx-2">
          <a class="nav-link active" href="categorias.html">Categorias</a>
        </li>
        <li class="nav-item mx-2 text-nowrap dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Minha conta</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </li> 
        <li class="nav-item mx-2">
          <a class="nav-link active" href="contato.html">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
  <!-- BANNERS PROMOCIONAIS -->

  <div class="container-fluid hero">
    <img src="/PaperPlus/imgs/homepage/taxi-art-supplies.png" alt="Canvas amarelo" class="hero-img img-fluid">
    <div class="hero-content">
      <h2>ATÉ <span class="discount">30% </span> DE DESCONTO</h2>
      <h1>
        <span>Feira de</span>
        <span>Inauguração</span>
      </h1>
      <button class="btn-hero btn btn-primary">Aproveite!</button>
    </div>
  </div>

  <!-- MAIS VENDIDOS -->
  <section class="mais-vendidos container-fluid px-5 pt-5">
    <div class="title">
      <h4>Mais Vendidos</h4>
    </div>
    <div class="container-carousel d-flex mx-auto">
      <div class="owl-carousel owl-theme px-5">
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EM PROMOÇÃO -->
  <section class="semelhantes container-fluid px-5 pt-5">
    <div class="title">
      <h4>Em Promoção</h4>
    </div>
    <div class="container-carousel d-flex mx-auto">
      <div class="owl-carousel owl-theme px-5">
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LANÇAMENTOS -->
  <section class="lancamentos container-fluid px-5 pt-5">
    <div class="title">
      <h4>Lançamentos</h4>
    </div>
    <div class="container-carousel d-flex mx-auto">
      <div class="owl-carousel owl-theme px-5">
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>        
        <div class="card m-2">
          <img class="card-img-top" src="/PaperPlus/imgs/produto.png" alt="Produto" width="175px" height="175px">
          <div class="card-body m-0 p-2">
            <span class="mb-2">Nome do produto aqui nome do produto aqui</span>
            <a class="card-title stretched-link" href="detalhes-produto.html">R$ 99,99</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SOBRE NÓS -->

  <section class="about container-fluid p-5 my-5">
    <div class="row">
      <div class="col">
        <img src="/PaperPlus/imgs/homepage/clip-my-father-is-an-artist.png" alt="Canvas azul" class="about-img img-fluid" width="auto" height="auto">
      </div>
      <div class="about-content col">
        <h2 class="about-title">
          Sobre nós
        </h2>
        <p class="about-text-1 mt-4 pe-5">
          PaperPlus é um projeto de desenvolvimento de website para e-commerce de uma papelaria, realizado por alunos do quinto semestre do curso Bacharelado em Sistemas de Informação da instituição FMU como critério para aprovação na disciplina Desenvolvimento de Software para Web, lecionada pelo Professor Mestre Silvio Rogerio de Lucia no segundo semestre de 2021.
        </p>
        <p class="about-text-2 mb-5 pe-5">
          <span class="fw-bold">Linguagens e tecnologias utilizadas:</span><br>
          HTML | CSS | Javascript | PHP | Bootstrap | Owl Carousel | GSAP
        </p>
        <a class="btn-about btn btn-primary" href="https://github.com/htchristie/PaperPlus">Repositório Github</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

  <footer>
    <div class="container-fluid footer text-black px-5 text-center">
      <div class="d-flex flex-column justify-content-between align-items-center">
        <ul class="redes-sociais list-group list-group-horizontal mt-3">
          <li class="list-group-item">
            <a href="https://api.whatsapp.com/">
              <i class="bi bi-whatsapp"></i>
            </a>
          </li>
          <li class="list-group-item mx-4">
            <a href="https://www.facebook.com/">
              <i class="bi bi-facebook"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://www.instagram.com/">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
        </ul>
        <ul class="links-uteis list-group list-group-horizontal mt-1 mb-3">
          <li class="list-group-item px-2">
            <a href="">Termos de Serviço</a>
          </li>
          <li class="list-group-item px-2">
            <a href="">Política de Privacidade</a>
          </li>
          <li class="list-group-item px-2">
            <a href="">Mapa do Site</a>
          </li>
        </ul>
        <address>
          <span class="fst-italic">PaperPlus SA - CNPJ: 00.000.000/0000-00 - Endereço: Avenida Paulista, 000 - São Paulo, SP - CEP: 00000-000
        </address>
      </div>
    </div>
  </footer>

    <!-- SCRIPTS -->

    <script src="js/jquery.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

