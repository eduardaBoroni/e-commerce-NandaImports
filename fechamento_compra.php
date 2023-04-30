<?php
session_start();
include_once "conexao.php";

$cpf_cliente = $_SESSION['cpf_cliente'] ;
$total =  $_SESSION["carrinho"]["total"];
if(!empty($_GET['cod_produto'])){
  $cod_produto= $_GET['cod_produto'];
 
}

$sql = "INSERT INTO compra (cpf_cliente, valor_total_compra) VALUES ('$cpf_cliente', '$total')";

if (mysqli_query($conn,$sql)){
    echo "CADASTRADO COM SUCESSO!!";
  }
  else {
    echo "ERRO: ".mysqli_error($conn);
  }
              
                        
  header('Location: fechamento_pedido.php');                 

                        

        
            



 
?>