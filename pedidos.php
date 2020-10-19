<!doctype html>
<html lang="en">
  <head>
    <title>Padaria Rainha Suplicy</title>
    <!-- Required meta tags -->
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/filling-station/277/Bakery-fresh-bread-food-store-shop-512.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/styles_global.css">
    <link rel="stylesheet" href="./styles/styles_pedidos.css">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include "conexao.php"?>
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
                      <a href="data.php" class="nav-link">Sair</a>
                    </li>
                  </ul>
                </div>
  
                </div>
            </nav>
      </header><!--/fim Cabecalho -->

        <section class="m-5">
                <?php 

                $sql = "SELECT * FROM pedidos WHERE nome != ''";
                $result = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($result) == ''){
                    echo "<h2 class='text-center display-4'>No momento não existe nenhum pedido cadastrado</h2>";
                }else{
                
                ?>
                <h1 class="display-4">Pedidos feitos</h1>

                <table id="example" class="table" cellspacing="0" width="100%" role="grid" style="width: 100%;table-layout:fixed">
                    <thead class="thead-dark"> 
                          <th scope="col"><h2>Código</h2></td>
                          <th scope="col"><h2>Nome</h2></td>
                          <th scope="col"><h2>Email</h2></td>
                          <th scope="col"><h2>Telefone</h2></td>
                          <th scope="col"><h2>Pedido</h2></td>
                          <th scope="col"><h2>Deletar pedido</h2></td>
                    </thead>

                        <?php
                           while($res_1 = mysqli_fetch_array($result)){ 
                           $id = $res_1['id'];
                           $nome = $res_1['nome'];
                           $email = $res_1['email'];
                           $telefone = $res_1['telefone'];
                           $pedido = $res_1['recado'];
                        ?>

                        <tr id="tr">
                          <td><h2><?php echo $id; ?></h2></td>
                          <td><?php echo $nome; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $telefone; ?></td>
                          <td><?php echo $pedido; ?></td>
                          <td style="vertical-align:middle; text-align: center; "><a class="a" href="pedidos.php?pg=todos&func=deleta&id=<?php echo $id; ?>"><img title="Excluir pedido" src="./img/deleta.png" width="50" height="50" border="0"></a></td>
                        </tr>

                  <?php } } ?>
                </table>
                    <! DELETAR PEDIDO >
                    <?php if(@$_GET['func'] == 'deleta'){
                    
                        $id = $_GET['id'];
                    
                        $sql = "DELETE FROM pedidos WHERE id = '$id'";
                        mysqli_query($conexao, $sql);
                    
                        echo "<script language='javascript'>window.location='pedidos.php';</script>";
                    } ?>
            </section>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>