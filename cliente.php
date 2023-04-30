<?php
session_start();
include_once "conexao.php";

  if(isset($_POST['cpf_cliente'])){
            
    include_once ('conexao.php');
    $cpf_cliente = $_POST["cpf_cliente"];
    $nome_cliente = $_POST["nome_cliente"];
    $endereco_cliente = $_POST["endereco_cliente"];
    $telefone_cliente = $_POST["telefone_cliente"];
    $senha_cliente = $_POST["senha_cliente"];
    $email_cliente = $_POST["email_cliente"];
/*
$sql = "Select count(*) as total from cliente where cpf_cliente = '$cpf_cliente'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
  $_SESSION['usuario_existe'] = TRUE;
  header('Location: cadastrarc.php');
  exit;
}*/

$sql = mysqli_query($conn,"INSERT INTO cliente SET cpf_cliente = '$cpf_cliente' ,nome_cliente = '$nome_cliente' ,endereco_cliente = '$endereco_cliente', telefone_cliente = '$telefone_cliente' 
, senha_cliente  = '$senha_cliente', email_cliente = '$email_cliente'");
header('Location: loginc.php');
/*$sql = "INSERT INTO cliente (cpf_cliente, nome_cliente, endereco_cliente, telefone_cliente, senha_cliente,
 email_cliente) VALUES ('$cpf_cliente', '$nome_cliente', '$endereco_cliente', '$telefone_cliente', '$senha_cliente',
    '$email_cliente')";*/
/*
if($conn->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = TRUE;
}

if (mysqli_query($conn,$sql)){
  echo "CADASTRADO COM SUCESSO!!";
}
else {
  echo "ERRO: ".mysqli_error($conn);
}
$conn->close();

  exit;*/
  }
 
?>