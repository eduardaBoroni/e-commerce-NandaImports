<?php
session_start();

if(!empty($_GET['cod_produto'])){
  include_once ('conexao.php');

  $cod_produto= $_GET['cod_produto'];
  $sql = "SELECT * FROM produto WHERE cod_produto=$cod_produto ";
  $result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_assoc($result))
        {
            $cod_produto = $row['cod_produto']; 
            $nome_usuario = $row["nome_usuario"];
            $nome_produto = $row["nome_produto"];
            $descricao_produto = $row["descricao_produto"];
            $qt_produto_estoque = $row["qt_produto_estoque"]  ;
            $valor_produto = $row["valor_produto"];
            $img_produto = $row["img_produto"];
            
           
        
        }

}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/input.css">
</head>

<body>
    <div class= "container">
    <div class="form-image">
    <img src="img/Nanda(3)(1).png">
    </div>
    <div class="form">
        <form action="update.php" method="POST" enctype="multipart/form-data">
          <div class="form-header">
              <div class="title">
                  <h1>Cadastrar produto</h1>
              </div>
             
          </div>
          <div class="input-box">
            <label for="firstname">Nome do usuário</label> 
            <input id="firstname" type="text" name="nome_usuario" value="<?php echo $nome_usuario?>" required>
          </div>
          <div class="input-group1">
              


              <div class="input-box">
                <label for="productname">Nome do produto</label> 
                <input id="productname" type="text" name="nome_produto" value="<?php echo $nome_produto?>"  ?> required>
              </div>

              <div class="input-box">
                <label for="qtproduto">Quantidade</label> 
                <input id="qtproduto" type="int" name="qt_produto_estoque" value="<?php echo $qt_produto_estoque?>" required>
              </div>

              <div class="input-box">
                <label for="valorproduto">Valor</label> 
                <input id="valorproduto" type="float" name="valor_produto" value="<?php echo $valor_produto?>" required>
              </div>
          </div>
          <div class="input-box">
            <label for="descricao">Descrição</label> 
            <input id="descricao" minlength="40" maxlength="100" type="text" name="descricao_produto" value="<?php echo $descricao_produto?>" required>
          </div>
        
          
           <!--  Inserir imagem-->
          <div class="drag-area">

        <div class="input-file">
       
       <label for='selecao-arquivo'>Selecione uma foto</label>
        
        <input id='selecao-arquivo' type='file' name="img_produto" >
        <input  name="nome_img" type= 'hidden' value="<?php echo $img_produto?>" >

       
        </div>
          
  
          </div>

          
          
          <script src="script.js"></script>

          <!--  Termina aqui-->
          <input type="hidden" name="cod_produto" value="<?php echo $cod_produto?>">
          <div class="continue-button">
          <button name="update"><a href="update.php"></a>Editar Produto</button>
          </div>
          </form>
          

          
      

    </div>
    </div>
</body>
</html>