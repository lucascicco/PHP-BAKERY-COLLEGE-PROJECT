<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuários</title>
<link rel="stylesheet" type="text/css" href="usuarios.css"/>
<?php include "conexao.php";?>

</head>
    <body>
        <div id="box_usuarios">
            <br /><br />
            <?php 
    
            $sql = "SELECT * FROM pedidos WHERE nome != ''";
            $result = mysqli_query($conexao, $sql);
    
            if(mysqli_num_rows($result) == ''){
            	echo "<h2>No momento não existe nenhum pedido cadastrado</h2>";
            }else{
            
            ?>
                <table width="900" border="0">
                  <tr>
            
                    <td><strong>Código:</strong></td>
                    <td><strong>Nome:</strong></td>
                    <td><strong>Email:</strong></td>
                    <td><strong>Telefone:</strong></td>
                    <td><strong>Pedido:</strong></td>
                    <td></td>
                  </tr>
                 <?php
    
            	 while($res_1 = mysqli_fetch_array($result)){ 
            	 $id = $res_1['id'];
            	 $nome = $res_1['nome'];
            	 $email = $res_1['email'];
                 $telefone = $res_1['telefone'];
                 $pedido = $res_1['recado'];
                
            	 ?>
                  <tr>
                    <td><h3><?php echo $id; ?></h3></td>
                    <td><h3><?php echo $nome; ?></h3></td>
                    <td><h3><?php echo $email; ?></h3></td>
                    <td><h3><?php echo $telefone; ?></h3></td>
                    <td><h3><?php echo $pedido; ?></h3></td>
                    <td></td>
                    <td>
                    <a class="a" href="pedidos.php?pg=todos&func=deleta&id=<?php echo $id; ?>"><img title="Excluir pedido" src="img/deleta.jpg" width="18" height="18" border="0"></a>
                
                    </tr>
                  <?php } } ?>
                </table>
                
            <br />
                
                
                
            <! DELETAR PEDIDO >
            <?php if(@$_GET['func'] == 'deleta'){
            
            	$id = $_GET['id'];
            
            	$sql = "DELETE FROM pedidos WHERE id = '$id'";
                mysqli_query($conexao, $sql);
            
            	echo "<script language='javascript'>window.location='pedidos.php';</script>";
            } ?>
    
            <br />
        </div>
    </body>
</html>