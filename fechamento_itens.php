<?php
session_start();
$cpf_cliente = $_SESSION['cpf_cliente'] ;
if(!empty($_GET['cod_produto'])){
  include_once ('conexao.php');
 /// $cod_produto= $_GET['cod_produto'];
  
 
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
    <title>Carrinho  de Compras</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom shadow-sm mb-3">
           
            <div class="container">
                <div class=logo>
                    <img src="img/Nanda(3)(1).png" alt="Logo Image">
                    </div>

                <a class="navbar-brand" href="/"><b>Confirmar Compra</b></a>
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

echo "  <li class=\"nav-item\">
                <a href=\"carrinho.php\" class=\"nav-link text-white\">
                    <i class=\"bi bi-cart\"></i>
                </a>
            </li>";

  ?>

                        </ul> 
                    </div>
                </div>
            </div>
        </nav>

     <main class="flex-fill">
     <div class="container">

        
        <h3>Confira os itens e clique em <b>Continuar</b> para prosseguir para a 
        <b>seleção do endereço de entrega</b>.</h3>
 
                        
        <ul class="list-group mb-3">

        <?php  

if(isset($_SESSION["carrinho"])){
    $total = 0.0;
    $produtos = array_keys($_SESSION["carrinho"]);
    

    foreach($produtos as $cod_produto)
    {
?>
            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                    <?php
                   
                            $sql = "SELECT * FROM produto WHERE cod_produto = '$cod_produto' ";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){ 
                                $qtd = $_SESSION["carrinho"][$cod_produto];
                                $valor = $qtd*$row['valor_produto'];
                                $total+=$valor;       
                          echo"  <img src=\"adm/upload/".$row['img_produto']."\" class=\"img-thumbnail\">";
                          echo "<span class=\"text-dark\">Valor total por produto: R$".$valor."</span> <br>";
                          
                        ?>  

                        

                       
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left
                    align-self-center">
                   <?php         
                   echo " <h4><b><a href=\"#\" class=\"text-decoration-none text-warning\">".$row['nome_produto']."</a></b></h4>";
                       

                    echo "<h5>".$row['descricao_produto'];
                    echo "<br><b>R$".number_format( $row['valor_produto'], 2, ',', '.' )."<br></b></h5>";
                    
                    ?>
                    
                </div>
                </div>

               

            </li>
            <?php } }?>  
            

     

            <li class="list-group-item pt-3 pb-0">
                <div class="text-end">

                <?php
                    echo "<h4 class=\"text-dark mb-3\">Valor Total: R$".number_format( $total, 2, ',', '.' ). "</h4>";
                    $_SESSION["carrinho"]["total"] = $total;
                     }?> 
                    <a href="carrinho.php" class="btn btn-outline-sucess btn-lg mb-3">
                        Voltar ao Carrinho
                    </a>
                    <a href="fechamento_endereco.php?" class="btn btn-warning btn-lg
                     ms-2 mb-3"> Continuar </a>
                </div>
            </li>
          </ul>
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

<!--$sql = mysqli_query($conn,"INSERT INTO cliente SET cpf_cliente = '$cpf_cliente' ,nome_cliente = '$nome_cliente' ,endereco_cliente = '$endereco_cliente', telefone_cliente = '$telefone_cliente' 
, senha_cliente  = '$senha_cliente', email_cliente = '$email_cliente'");-->

</body>

</html>