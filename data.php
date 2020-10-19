<!doctype html>
<html lang="en">
  <head>
    <title>Padaria Rainha Suplicy</title>
    <!-- Required meta tags -->
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/filling-station/277/Bakery-fresh-bread-food-store-shop-512.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/styles_global.css">
    <link rel="stylesheet" href="./styles/styles_data.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include "conexao.php" ?>
  </head>

  
  <body>
    <header><!-- inicio Cabecalho -->
        <nav class="bb navbar navbar-expand-sm navbar-light p-3" id="nav-homepage">
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
                  <a href="form.php" class="nav-link">Fazer pedido</a>
                </li>
                <li class="nav-item">
                  <a href="data.php" class="nav-link activeA">Entrar</a>
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
                        <h1 id="TituloGrande">Acesso exclusivo a funcionários</h1>
                        
                        <form action="" method="post">
                            <div class="form-group">
                              <label for="user">Seu usuário</label>
                              <input type="text" class="form-control" name="nome" id="user" placeholder="Nome de usuário" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Sua senha</label>
                                <input type="password" class="form-control" name="senha" id="password" placeholder="Sua senha" required>
                            </div>
                            <button type="submit" name="button" class="btn btn-secondary mb-2 w-100">Fazer login</button>
                        </form>

                        <?php
                            if(isset($_POST['button'])){
                            
                            $nome = $_POST['nome'];
                            $senha = $_POST['senha'];
                            
                            $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha' ";
                            $result = mysqli_query($conexao, $sql);
                            	if(mysqli_num_rows($result) > 0){
                            		while($res = mysqli_fetch_array($result)){
                            			$senha = $res['senha'];
                                  $nome = $res['nome'];

                            			session_start();
                                
                            			echo "<script language='javascript'> window.location='pedidos.php';</script>";
                            		}
                            	}else{
                            		echo "<p style='color: #ef5350; font-size: 20px; text-align: center';> Dados inválidos, caso o erro persista fale com a administração do site.</p>";	
                            	}
                            }
                        ?>
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
                <a href="form.php">Faça seu pedido</a>
                <a href="data.php" class="activeA">Login</a>
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

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>