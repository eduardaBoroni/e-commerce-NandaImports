
<?php

include_once "conexao.php";

$nome_usuario = $_POST["nome_usuario"];
$nome_produto = $_POST["nome_produto"];
$descricao_produto = $_POST["descricao_produto"];
$qt_produto_estoque = $_POST["qt_produto_estoque"];
$valor_produto = $_POST["valor_produto"];






$msg = false;

  if(isset($_FILES['img_produto'])){ 
    $img_produto = $_FILES['img_produto'];

    $extensao = strtolower(substr($_FILES['img_produto']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['img_produto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

   
    $sql = "INSERT INTO produto (nome_usuario, nome_produto, descricao_produto, qt_produto_estoque, img_produto,
    valor_produto) VALUES ('$nome_usuario', '$nome_produto', '$descricao_produto', '$qt_produto_estoque', '$novo_nome',
    '$valor_produto')";

if (mysqli_query($conn,$sql)){
  echo "CADASTRADO COM SUCESSO!!";
}
else {
  echo "ERRO: ".mysqli_error($conn);
}

  }

  header("Location: listarp.php");
?>

