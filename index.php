<!doctype html>
<html lang="en">
  <head>
    <title>Padaria Rainha Suplicy</title>
    <!-- Required meta tags -->
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/filling-station/277/Bakery-fresh-bread-food-store-shop-512.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/styles_global.css">
    <link rel="stylesheet" href="./styles/styles_index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <header><!-- inicio Cabecalho -->
        <nav class="navbar navbar-expand-sm navbar-light p-3" id="nav-homepage">
          <div class="container">
            
            <a href="#" class="navbar-brand d-none d-md-block">
              <img src="https://cdn2.iconfinder.com/data/icons/filling-station/277/Bakery-fresh-bread-food-store-shop-512.png" width="50" height="50">
            </a>
            
            <h3 class="display-4 text-center">Padaria Rainha Suplicy</h3>
       
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <span class="navbar-toggler-icon"></span>
              </button>
    
            <div class="collapse navbar-collapse" id="nav-principal">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="index.php" class="nav-link activeA">Home</a>
                </li>
                <li class="nav-item">
                  <a href="form.php" class="nav-link">Fazer pedido</a>
                </li>
                <li class="nav-item">
                  <a href="data.php" class="nav-link">Entrar</a>
                </li>
              </ul>
            </div>
  
          </div>
        </nav>
      </header><!--/fim Cabecalho -->

      <section class="d-flex" id="home">       
          <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex mt-2">
                        <div class="align-self-center">

                            <h1 class="display-4" id="TituloGrande">Sobre nós</h1>

                            
                            <p class="pWhite">
                                A nossa padaria tem sempre algo especial para você. 
                            </p>
                            <p class="pWhite">
                                Nossa equipe trabalha diariamente para garantir qualidade desde seu café da manhã até sua janta. 
                                Temos uma diversidade de alimentos que estão já feitos ao abrirmos as portas e sempre quentinhos para a clientela.
                                Nos localizamos em umas das travessas da Av. Suplicy, de esquina com uma pizzaria. Temos um pequeno estacionamento e também
                                recentemente criamos uma parte externa, dando conforto ao cliente quando ele se sente a vontade de ficar num ambiente aberto.
                            </p>
                            <p class="pWhite">
                                Nosso horário de funcionamento vai das 6:00 às 23:00 de segunda a sábado.
                            </p>
                            <p class="pWhite"> 
                                Que tal vir nos visitar? Estamos na espera! Não se esqueça de conferir o endereço no mapa.
                            </p>

                            <p class="pWhite">
                                Av. Suplicy, 564 - Jardim Santa Mena, Guarulhos - SP, 07096-000
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14641.34307324432!2d-46.539033!3d-23.44835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19f474a2da142cdf!2sPadaria%20Rainha%20da%20Suplicy!5e0!3m2!1spt-BR!2sbr!4v1603023113092!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:1px solid black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>  
          </div>
      </section>

      <section class="d-flex">       
        <div class="container">
              <div class="row">
                  <div class="col-md-12 d-flex mt-2">
                      <div class="produtosDiv align-self-center">
                          <h1 class="display-4" id="TituloGrande">Nossos produtos</h1>

                          <p>
                            Nossos produtos são feitos com muita aptidão pelos nossos cozinheiros.
                            Dê uma conferida no nosso cardápio logo abaixo!
                          </p>
                          
                          <div class="row justify-content-center" id="productImages">

                            <div class="col-md-3 ">
                                <img src="./img/img1.jpg" width="200" height="200"> 
                                <img src="./img/img4.jpg" width="200" height="200">
                             </div>
                        
                            <div class="col-md-3">
                                <img src="./img/img2.PNG" width="200" height="200">

                                <img src="./img/img5.PNG" width="200" height="200">
                            </div>

                                 
                            <div class="col-md-3">
                                <img src="./img/img3.PNG" width="200" height="200">

                                <img src="./img/img6.jpg" width="200" height="200">
                            </div>
                          </div>
                         
                      </div>
                      </div>
                  </div>
              </div>  
        </div>
    </section>

    <footer class="mt-4">
        <div class="container">
          <div class="row">
            <div class="col-md-8 d-flex align-items-end">
                <p>
                    <a href="index.php" class="activeA">Home</a>
                    <a href="form.php">Faça seu pedido</a>
                    <a href="data.php">Login</a>
                </p>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-items-end">
                <p id="telefone">(11)2459-3907</p>
                <img src="https://cdn2.iconfinder.com/data/icons/filling-station/277/Bakery-fresh-bread-food-store-shop-512.png" width="50" height="50">    
            </div>
          </div>
        </div>
      </footer>

    <!-- Optional JavaScript -->
    <script src="bundle.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>