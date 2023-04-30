


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
            <input id="descricao" type="text" name="descricao_produto" placeholder="Fale sobre o produto" required>
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
</body>
</html>