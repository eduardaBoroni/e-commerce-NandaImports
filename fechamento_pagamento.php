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
    <title>Pagamento</title>
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
        <h1>Forma de pagamento</h1>
        

       
          
           

                    <div class="d-flex justify-content-center col-md-6 flex-even w-50">
                   <input type="radio" class="btn-check" name="pagamento"
                    autocomplete="off" id="pag1" >
                     <label class="btn btn-outline-warning p-4 h-100 w-100" for="pag1">
                     <h3>

                <b class="text-dark">Escolha sua forma de pagamento</b><h3>
                <hr>
                <form action="">


                <div class="form-floating mb-3">
                
               <select id="Pagamento" class="form-select">
                        <option value="1" selected>Escolha</option>
                        <option value="2">Dinheiro</option>
                        <option value="3">Cartão</option>
                        <option value="4">Pix</option>
               </select>
               
               </div>

                <div class="form-floating mb-3">
                <p class="text">Em caso de dinheiro, quer troco para quanto? </p>
                <input type="text" id="txtNome"
                class="form-control" placeholder=" " autofocus>
                
                </div>
            
                </form>
                </div>
       



    <div class="text-end border-top-0 rounded-bottom p-4 pb-0">
        <a href="fechamento_endereco.php" class="btn btn-outline-sucess btn-lg mb-4">
            Voltar aos Endereços
        </a>
        <a href="fechamento_compra.php" class="btn btn-warning btn-lg
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