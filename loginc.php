<?php
session_start();
$conn = mysqli_connect("localhost", "root","", "nanda");

if(isset($_POST['cpf_cliente']) || isset($_POST['senha_cliente'])){

  

   if(strlen($_POST['cpf_cliente']) == 0){
    echo"Preencha seu cpf";
   }else if(strlen($_POST['senha_cliente']) == 0){
    echo"Preencha sua senha";
   } else {

    $cpf_cliente = $conn ->real_escape_string($_POST['cpf_cliente']);
    $senha_cliente = $conn ->real_escape_string($_POST['senha_cliente']);

    $sql_code = "SELECT * FROM cliente WHERE cpf_cliente = '$cpf_cliente' AND senha_cliente = '$senha_cliente'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL:". $conn->error);

     
    $quantidade = $sql_query->num_rows;
    if($quantidade ==1){

    $usuario = $sql_query->fetch_assoc();
    if(!isset($_SESSION)){
        session_start();
    }

     $_SESSION['codigo'] = $usuario['codigo'];
     $_SESSION['cpf_cliente'] = $cpf_cliente;
   
    
     header("location: indexc.php");
    }else{
      
      echo "falha ao logar! usuário ou senha incorretos!";  
    }
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Login</title>
</head>
<body>

<nav>
        <div class=logo>
        <img src="img/Nanda(3)(1).png" alt="Logo Image">
        </div>
        

        
</nav>

<form class="card"method="post">

      <div class="main-login">

       <div class="card-login">
             
       <div class="form-header">
        <h1>Entre ou Cadastre-se!</h1>
        </div>
                
          <div class="textfield">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf_cliente" placeholder="Usuário">
          </div>

          <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha_cliente" placeholder="Senha">
          </div>

          <button class="btn-login">Entrar</button>

          <p class="mt-3">
                Novo por aqui? <a href="cadastrarc.php">Cadastre-se</a>
                <br>
            </p>

            <p class="mt-3">
                 <a href="cadastrarc.php">Esqueci minha senha</a>
            </p>
       </div>

      </div>
</form>
</body>
</html>