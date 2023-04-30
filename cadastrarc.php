


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecadastrarc.css">
    <title>Cadastre-se!</title>
</head>
<body>

<nav>
        <div class=logo>
        <img src="img/Nanda(3)(1).png" alt="Logo Image">
        </div>
        

      
        
</nav>

<form action="cliente.php" method="POST" enctype="multipart/form-data"> 

      <div class="main-login">
      
       <div class="card-login">
          
       <div class="form-header">
        <h1> Cadastre-se! </h1>
        </div>
       
       <div class="textfield">
            <label for="nome">Nome</label>
            <input id="nome_cliente" type="varchar" style="color: black;" name="nome_cliente" placeholder="Nome" require>
          </div>

        <div class="input-group">  
                             <div class="textfield">
                                  <label for="cpf">CPF</label>
                                  <input type="text" style="color: black;" placeholder="CPF" require name="cpf_cliente" \
			                              pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \
			                              title="Digite um CPF no formato: xxx.xxx.xxx-xx">
                                  <!--<input id="cpf_cliente" type="int" style="color: black;" name="cpf_cliente" placeholder="CPF" require> -->
                             </div>

                             <div class="textfield">
                                  <label for="telefone">Telefone</label>
                                  <input id="telefone_cliente" type="varchar" style="color: black;" name="telefone_cliente" placeholder="Telefone" require>
                             </div>
        </div>
          <div class="textfield">
            <label for="email">Email</label>
            <input id="email_cliente" type="varchar" style="color: black;" name="email_cliente" placeholder="Email" require>
          </div>

          <div class="textfield">
            <label for="endereco">Endereço</label>
            <input id="endereco_cliente" type="varchar" style="color: black;" name="endereco_cliente" placeholder="Endereço" require>
          </div>

          
          <div class="textfield">
            <label for="senha">Crie uma senha</label>
            <input id="senha_cliente" type="password" name="senha_cliente" style="color: black;" placeholder="Senha" require>
          </div>

          
         
        
          <button class="btn-login"><a href="cliente.php"></a>Cadastrar</button>
          
          
       
      
</form>
      </div>
       </div>
       </form>
</body>
</html>