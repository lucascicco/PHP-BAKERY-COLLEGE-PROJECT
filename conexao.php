<!CONEXAO LOCAL>

<?php 
    function conectar(){
    	$servidor = "localhost";
    	$usuario = "root";
    	$senha = "";
    	$bd = "padaria";
    
    	$con = new mysqli($servidor, $usuario, $senha, $bd);
    	return $con;
    }
    
    $conexao = conectar(); 
?>


