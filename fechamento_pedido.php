<?php
session_start();
include_once ('conexao.php');
$cpf_cliente = $_SESSION['cpf_cliente'];
 $sql_code = "SELECT cod_compra FROM compra WHERE cpf_cliente = '$cpf_cliente' ";
 $result_compra = $conn->query($sql_code) or die("Falha na execução do código SQL:". $conn->error);

 while($row=mysqli_fetch_array($result_compra)){  
   $cod_compra =$row['cod_compra'];
 }

 $produtos = array_keys($_SESSION["carrinho"]);

 foreach($produtos as $cod_produto){

        
        $qtd = $_SESSION["carrinho"][$cod_produto];
        $sql = "INSERT INTO compra_produto (cod_compra, cod_produto, qt_produto) VALUES ('$cod_compra', '$cod_produto','$qtd')";
        $result = $conn->query($sql) or die("Falha na execução do código SQL: ". $conn->error);
}

?>


<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/css/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Nanda Imports</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom shadow-sm mb-3">
           
            <div class="container">
                <div class=logo>
                    <img src="img/Nanda(3)(1).png" alt="Logo Image">
                    </div>

                <a class="navbar-brand" href="/"><b>Nanda Imports</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="indexc.php">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.php">Contato</a>
                        </li>
                    </ul>

                    <div class="align-self-end">
                        
                       <ul class="navbar-nav">

                       <?php
                       $sql_code = "SELECT * FROM cliente WHERE cpf_cliente = '$cpf_cliente'";
    $result_cliente = $conn->query($sql_code) or die("Falha na execução do código SQL:". $conn->error);

    while($row=mysqli_fetch_array($result_cliente)){  
      $_SESSION['nome_cliente'] =$row['nome_cliente'];
    }
    $nome_cliente = $_SESSION['nome_cliente'];           
  echo   "<li class=\"nav-item\">
  <p  class=\"nav-link active\" >Olá, $nome_cliente </p>                
</li>" ;



  ?>

                        </ul> 
                    </div>
                </div>
            </div>
        </nav>

     <main class="flex-fill">
     <div class="container">
                <h3 >
                    <br>
                    Seu pedido foi cadastrado! Dentro das próximas horas será entregue <br> em seu endereço.
                    Agradecemos a preferência e siga-nos nas redes sociais! 
                </h3>   
     </div>
     </main>

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row">
                    <div class=" text center">
                        &copy; 2022 - Nanda Imports <br>
                        Rua das cebolas, em frente ao CEASA, Acaraju/SE,
                        CNPJ 69
                    </div>
                </div>

            </div>
        </footer>
    </div>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>