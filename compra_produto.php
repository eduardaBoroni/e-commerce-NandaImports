<?php
session_start();
include_once ('conexao.php');
$cpf_cliente = $_SESSION['cpf_cliente'] ;

$sql = "SELECT cod_compra FROM compra  WHERE cpf_cliente = $cpf_cliente ";
$result = mysqli_query($conn,$sql);

if(isset($_SESSION["carrinho"])){
    
    $produtos = array_keys($_SESSION["carrinho"]);
    

    foreach($produtos as $cod_produto)
    {
        $qtd = $_SESSION["carrinho"][$cod_produto];
        $sql = "INSERT INTO compra_produto (cod_compra, cod_produto, qt_produto) VALUES ('$result', '$cod_produto','$qtd' )";
      
    }

}

?>