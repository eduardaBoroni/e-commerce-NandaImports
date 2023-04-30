<?php
session_start();
$cpf_cliente = $_SESSION['cpf_cliente'] ;
if(!empty($_GET['cod_produto'])){
  include_once ('conexao.php');
  $cod_produto= $_GET['cod_produto'];
 
  

  

  if(!isset($_SESSION["carrinho"]))
    $_SESSION["carrinho"] = array();

    if(isset($_SESSION["carrinho"][$cod_produto]))
        $_SESSION["carrinho"][$cod_produto]++;
        else
            $_SESSION["carrinho"][$cod_produto] = 1;
        //header("location: carrinho.php") ;
  
  
}
?>
<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/css/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Carrinho  de Compras</title>
</head>

<body>
    <div class="d-flex flex-column wrapper ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom shadow-sm mb-3">
           
            <div class="container">
                <div class=logo>
                    <img src="img/Nanda(3)(1).png" alt="Logo Image">
                    </div>

                <a class="navbar-brand" href="/"><b>Carrinho de Compras</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="index.php">Principal</a>
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
       <!-- Primeiro produto -->
        <ul class="list-group mb-3">
           
                        
                        <?php  

                

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
                            $result= $conn->query($sql) ;
                            while($row=mysqli_fetch_array($result)){ 

                          echo"  <img src=\"adm/upload/".$row['img_produto']."\" class=\"img-thumbnail\">";
                        ?>    
                        
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left
                    align-self-center">
                    <h4>
                    <?php echo "<b><a href=\"#\" class=\"text-decoration-none text-warning\">".$row['nome_produto']."</a></b>";
                        ?></h4>
                    
                    <?php echo "<h5>".$row['descricao_produto']."</h5>"; ?>
                       
                   
                </div>
                <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4
                            offset-md-8 col-lg-3 offset-lg-0 col-xl-2
                            align-self-center mt-3">

                           
                              <div class="text-end mt-2">
                              <?php echo "<small class=\"text-secondary\">R$".$row['valor_produto']."</small> <br>";?>
                                  
                              <?php echo "<span class=\"text-dark\">Valor Item: R$".$row['valor_produto']."</span> <br>";
                              
                              $qtd = $_SESSION["carrinho"][$cod_produto];
                              $valor = $qtd*$row['valor_produto'];
                              $total+=$valor;
                              ?>

                                <div class="input-group">
                                <button class="btn btn-outline-dark btn-sm"
                                type="button">
                                <i class="bi bi-caret-down" style="font-size: 16px;
                                line-height: 16px;"></i>
                            </button>
                                <input type="text" class="form-control text-center
                                border-dark" value=<?php echo $qtd; ?>> 
                                <button class="btn btn-outline-dark btn-sm" 
                                type="button">
                                <i class="bi bi-caret-up" style="font-size: 16px;
                                line-height: 16px;"></i>
                                </button>
                                <button class="btn btn-outline-danger border-dark
                                btn-sm" type="button">
                                <i class="bi bi-trash" style="font-size: 16px;
                                line-height: 16px;"></i>
                                
                            </button>
                              </div>

                                 <!-- <span class="text-dark"> Valor Item: R$4,50 </span> -->
                              </div> 
                            
                        </div>
                </div>
               
            </li>  
           
            <li class="list-group-item py-3">
                <div class="text-end">

                <?php }} echo "<h4 class=\"text-dark mb-3\">Valor Total: R$".$total."</h4> <br>";
                ?>

                     <!--<h4 class="text-dark mb-3"> Valor Total: R$ 324,50</h4> -->
                    <a href="index.php" class="btn btn-outline-sucess btn-lg">
                        Continuar Comprando
                    </a>
                   

                     
                   <?php  echo "<a href=\"fechamento_itens.php?cod_produto=".$cod_produto."\" class=\"btn btn-warning btn-lg ms-2 mt-xs-3\">
                            Fechar Compra
                        </a>";
                        
                     ?>

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
</body>

</html>