<!doctype html>
<html lang="en">
  <head>
    <title>Padaria Rainha Suplicy</title>
    <!-- Required meta tags -->
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/filling-station/277/Bakery-fresh-bread-food-store-shop-512.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/styles_global.css">
    <link rel="stylesheet" href="./styles/styles_form.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include "conexao.php"?>
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
                  <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="form.php" class="nav-link activeA">Fazer pedido</a>
                </li>
                <li class="nav-item">
                  <a href="data.php" class="nav-link">Entrar</a>
                </li>
              </ul>
            </div>
  
          </div>
        </nav>
      </header><!--/fim Cabecalho -->

      <section class="pb-5" id="home">       
          <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 d-flex mt-2">
                        <div class="w-100">
                            <h1 class="display-4" id="TituloGrande">Faça seu pedido aqui</h1>
                            
                            <form name="form" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="email">Seu email</label>
                                  <input type="email" class="form-control" name="email" placeholder="name@example.com" required maxlength="50" >
                                </div>
                                <div class="form-group">
                                    <label for="nome">Seu nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Nome completo" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="celular">Seu telefone</label>
                                    <input type="text" class="form-control" name="telefone" placeholder="(11) 92525-2525" required  maxlength="20">
                                </div>

                                <div class="form-group">
                                  <label for="pedido">Pedido</label>
                                  <textarea class="form-control" name="recado" rows="3" placeholder="Escreva o que deseja comprar e mais tarde retornaremos você com uma ligação." required maxlength="255"></textarea>
                                </div>

                                <button type="submit" name="button" class="btn btn-secondary mb-2 w-100">Fazer Pedido</button>
                            </form>
        
                            <?php if(isset($_POST['button'])){
                            	$nome = $_POST['nome'];
                            	$email = $_POST['email'];
                            	$telefone = $_POST['telefone'];
                              $pedido = $_POST['recado'];
                            
                            
                              $sql = "INSERT INTO pedidos (email, nome, telefone, recado) VALUES ('$email', '$nome', '$telefone', '$pedido')";
                              $cadastra = mysqli_query($conexao, $sql);
                            
                              if($cadastra == ''){
                              	echo "<p style='color: #ef5350; font-size: 20px; text-align: center';> Ocorreu um erro no cadastro, lamentados.</p>";	
                              }else{
                                echo "<p style='color: #4caf50; font-size: 20px; text-align: center';> Sucesso ao cadastrar seu pedido, aguarde o retorno da nossa equipe.</p>";	
                            }}?>
                    </div>
                </div>  
          </div>
      </section>

    
    <footer class="fixed-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-8 d-flex align-items-end">
                <p>
                    <a href="index.php">Home</a>
                    <a href="form.php" class="activeA">Faça seu pedido</a>
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