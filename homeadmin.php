<?php

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
    
     header("location: index.php");
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
    <link rel="stylesheet" href="css/homeadmin.css">
    
    
    <title>Login</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom shadow-sm mb-3">
           
           <div class="container">
               <div class=logo>
                   <img src="img/Nanda(3)(1).png" alt="Logo Image">
                   
                   </div>

                  
       </nav>

<form class="card"method="post">

      <div class="main-login">

       <div class="card-login">
             
       
          
          <button class="btn-login"><a href="adm/listarp.php"> </a>Listar Produtos</button>
          <button class="btn-login"><a href=""></a> Listar Perfis</button>
          <button class="btn-login"><a href="cadastrarc.php"></a> Cadastrar Perfil</button>

         
       </div>

      </div>
</form>
<footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row">
                    <div class=" text center">
                        &copy; 2022 - Nanda Imports <br>
                        Rua Nova Paraíba, 517, América, Acaraju/SE
                    </div>
                </div>

            </div>
        </footer>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>