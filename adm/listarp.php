<?php
include_once ('conexao.php');

$sql = "SELECT * FROM produto ORDER By cod_produto DESC ";
$result = mysqli_query($conn,$sql);
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
   <link rel="stylesheet" href="css/records.css">
   <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/style.css">
   
  <!--  <script src="main.js" defer></script> -->
    <script src="principal.js" defer></script>
    <title>Gerenciar produtos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom shadow-sm mb-3">
           
           <div class="container">
              

              
        
           </div>
       </nav>
    <main>
         <!--<a  class="nav-link active" href="">Listar Pedidos</a>-->
        <button type="button" class="button blue mobile" id="cadastrarCliente">Cadastrar Produto</button>
        
        
        
        <table class="records">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Usuário</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>

                  <?php
                  while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td><img src=\"upload/".$row['img_produto']."\" height='100' alt=''</td>";
                    echo "<td>".$row['nome_produto']."</td>";
                    echo "<td>".$row['qt_produto_estoque']."</td>";
                    echo "<td>R$".number_format( $row['valor_produto'], 2, ',', '.' )."</td>";       
                    echo "<td>".$row['descricao_produto']."</td>";
                    echo "<td>".$row['nome_usuario']."</td>";
                    echo "<td> <button type='button' class='button red' ><a href=\"apagar.php?cod_produto=".$row['cod_produto']."\">Apagar</a></button>
                    <button type='button' class='button green' ><a href=\"editar.php?cod_produto=".$row['cod_produto']."\">Editar</a></button></td>";
                    
                    
                    echo "</tr>";
                   

                  }
                  ?>
                    
                   
            </tbody>
        </table>
       
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <div class="form-image">
                <img src="img/Nanda(3)(1).png">
                </div>
                <div class="form">
        <form action="produto.php" method="POST" enctype="multipart/form-data">
          <div class="form-header">
              <div class="title">
                  <h1>Cadastrar produto</h1>
              </div>
             
          </div>
          <div class="input-box">
            <label for="firstname">Nome do usuário</label> 
            <input id="firstname" type="text" name="nome_usuario" placeholder="Digite seu nome" required>
          </div>
          <div class="input-group1">
              


              <div class="input-box">
                <label for="productname">Nome do produto</label> 
                <input id="productname" type="text" name="nome_produto" placeholder="Digite o nome do produto" required>
              </div>

              <div class="input-box">
                <label for="qtproduto">Quantidade</label> 
                <input id="qtproduto" type="int" name="qt_produto_estoque" placeholder="Digite a quantidade" required>
              </div>

              <div class="input-box">
                <label for="valorproduto">Valor</label> 
                <input id="valorproduto" type="float" name="valor_produto" placeholder="xxx,xx" required>
              </div>
          </div>
          <div class="input-box">
            <label for="descricao">Descrição</label> 
            <input id="descricao" minlength="40" maxlength="100" type="text" name="descricao_produto" placeholder="Fale sobre o produto, min 60 caracteres" required>
          </div>
        
          
           <!--  Inserir imagem-->
          <div class="drag-area">

        <div class="input-file">
       
        <label for='selecao-arquivo'>Selecione uma foto</label>
        <input id='selecao-arquivo' type='file' name="img_produto" >
        </div>
          
  
          </div>
          
          <script src="script.js"></script>

          <!--  Termina aqui-->

          <div class="continue-button">
          <button><a href="produto.php"></a>Cadastrar Produto</button>
          </div>
          </form>

    </div>


   
    
  </div>
</div>
</body>
</html>