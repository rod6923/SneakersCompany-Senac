<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sneakers Company
              </title><link rel="icon" 
              type="image/jpg" 
              href="img/logo.png.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
      rel="stylesheet"
    />

<style>
  .btn#hover{
    color: rgb(83, 2, 2);
  }
</style>
</head>
<body>
  <!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand me-2 mb-1 d-flex align-content-start" href="#">
      <img
        src="img/logo.png.png"
        height=""
        alt="MDB Logo"
        loading="lazy"
        style="width: 33px;height: 30px;margin-left: 15px"
      />
      <a class="navbar-brand" href="index2.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Sneakers Company</a>
    </a>
  <div class="container-fluid justify-content-end">
    
      <div class="d-flex">
        <!-- Brand -->
      
   
         
        
      <!-- Left elements -->
  
      <!-- Center elements -->
      
      <ul class="navbar-nav flex-row d-none d-md-flex">
        <li class="nav-item me-3 me-lg-1 active">
          <a class="nav-link" href="index2.php">
            <span><i class="fas fa-home fa-lg"></i></span>
         
          </a>
        </li>
       
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link" href="flag.php">
            <span><i class="fas fa-flag fa-lg"></i></span>
          </a>
        </li>
  
        
  
        
       
            <li class="nav-item me-3 me-lg-1 active">
            <a class="nav-link bnt-login" href="login.php">
              <span><i class="fas fa-arrow-right-to-bracket fa-lg"></i></span>
           
            </a>
          </li>
      </ul>
      <!-- Center elements -->
  
      <!-- Right elements -->
      
         
    
      </ul>
      <!-- Right elements -->
      <!-- Search form -->
      <form  class="input-group w-auto my-auto d-none d-sm-flex justify-content-end">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder="Search"
          style="min-width: 125px;"
        />
        <span class="input-group-text border-0 d-none d-lg-flex"
          ><i class="fas fa-search"></i
        ></span>
      </form>
    </div>
    </div>
  </nav>
  <!-- Navbar -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row  row-cols-9  gx-lg-5 align-items-center">
                <div class="col-md-6">
                  <div class="col"><img class="card-img-top mb-5 mb-md-0" src="icons/Chicago/chicago.png" alt="..." /></div>
                  
                 </div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder"> Air Jordan 2 Retro OGChicago </h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">R$ 2299,99</span>
                        <span>R$ 1988,80</span>
                    </div>
                    <p class="lead">Comemore o 35º aniversário do AJ2 com esta edição retrô imaculada. Feito com as mesmas especificações do original, você obtém todos os detalhes icônicos, como pele falsa de lagarto, sem Swoosh e os logotipos Nike Air e Wings originais. Estiloso o suficiente para usar em um casamento, confortável o suficiente para usar na quadra - a única questão é com o que você vai combiná-los.</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <a href="cart.php"><button class="btn btn-outline-dark flex-shrink-0 butao" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Adicionar no Carrinho
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">
              Produtos relacionados</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="icons3/Air Jordan 13 Court Purple/asfahfb.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"> Air Jordan 13 Court Purple</h5>
                                <!-- Product price-->
                                 R$1999,99
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="purple.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="icons3/Air Jordan 4 Thunder/abidas1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Air Jordan 4 Thunder</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">R$ 2999,99</span>
                                R$ 2799,99
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="thunder.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="icons3/Air Jordan 13 Black Flint/abidas1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Air Jordan 13 Black Flint</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through"> R$ 2599,76</span>
                                R$ 2299,76
                            </div>      
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="fint.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="icons3/Air Jordan 1 Mid SE Flight Club/abidas2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Air Jordan 1 Mid SE Flight Club</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    
                                </div>
                                <!-- Product price-->
                                R$ 1521,93
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="mid.php">Comprar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Nos siga em nossas redes sociais:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class></i>Sneakers Company
            </h6>
            <p>
              Siga-nos nas redes sociais para ficar atualizado sobre os últimos lançamentos e eventos exclusivos. E lembre-se, os tênis raros não são apenas sapatos, são obras de arte que elevam o seu estilo a um novo patamar.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
           
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
         
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
            <p><i class="fas fa-home me-3"></i> Sesc, Senac Umuarama Paraná</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              sneakerscompany@gmail.com
            </p>
            
            
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
   
  </footer>
  <!-- Footer -->
</body>
</html>