<?php
session_start();
$cpf_cliente = $_SESSION['cpf_cliente'] ;
include_once ('conexao.php');

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
    <title>Fechamento da Compra</title>
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
        <h1>Selecione o Endreço de Entrega</h1>
        <h3 class="mb-4">
            Selecione o endereço de entrega e clique em <b>Continuar</b> para 
            prosseguir para a <b>seção de pagamento</b>.
        </h3>

        <div class="d-flex justify-content-around flex-wrap border rounded-top 
        pt-4 px-3">

        <div class="mb-4 mx-2 flex-even">
            <input type="radio" class="btn-check" name="endereco"
              autocomplete="off" id="end1" >

           <?php  
                 $sql = "SELECT * FROM cliente WHERE cpf_cliente=$cpf_cliente ";
                 $result = mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($result)){ ?>


        <label class="btn btn-outline-warning p-4 h-100 w-100" for="end1">
            <h3>

                <b class="text-dark">Minha Casa</b><br>
                <hr>
                <?php echo "<b>".$row['endereco_cliente']."</b>"; ?>
                
            </h3>
        </label>
    <?php } ?>
        </div>
<!--
        <div class="mb-4 mx-2 flex-even">
            <input type="radio" class="btn-check" name="endereco"
              autocomplete="off" id="end2" >
        <label class="btn btn-outline-warning p-4 h-100 w-100" for="end2">
            <h3>

                <b class="text-dark">Casa da vovó</b><br>
                <hr>
                <b>Maria Boroni</b><br>
                Rua das batatas, 69 <br>
                Getúlio Vargas <br>
                CEP 49740000
            </h3>
        </label>

        </div>

        <div class="mb-4 mx-2 flex-even">
            <input type="radio" class="btn-check" name="endereco"
              autocomplete="off" id="end3" >
        <label class="btn btn-outline-warning p-4 h-100 w-100" for="end3">
            <h3>

                <b class="text-dark">Minha Casa</b><br>
                <hr>
                <b>Maria Boroni</b><br>
                Rua das batatas, 69 <br>
                Getúlio Vargas <br>
                CEP 49740000
            </h3>
        </label>

        </div>
    </div> -->

    <div class="text-end border-top-0 rounded-bottom p-4 pb-0">
        <a href="fechamento_itens.php" class="btn btn-outline-sucess btn-lg mb-4">
            Voltar ao Carrinho
        </a>
        <a href="fechamento_pagamento.php" class="btn btn-warning btn-lg
         ms-2 mb-4"> Continuar </a>
    </div>
     </div>
     </main>

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