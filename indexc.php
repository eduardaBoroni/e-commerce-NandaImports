<?php
include_once ('conexao.php');
session_start();
$cpf_cliente = $_SESSION['cpf_cliente'];
   
$sql = "SELECT * FROM produto ORDER By cod_produto   DESC ";
$result = mysqli_query($conn,$sql);

?>

<!doctype html>
<html lang="pt-br">

<head>

    <meta http-equiv="Content-Type"content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
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

       <div class="container">
        <div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="img/slides/slide50.jpg" class="d-none d-md-block w-100" alt="">
                <img src="img/slides/slide50mini.jpg" class="d-block d-md-none w-100" alt="">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="img/slides/slidebf.jpg" class="d-none d-md-block w-100" alt="">
                <img src="img/slides/slidebfmini.jpg" class="d-block d-md-none w-100" alt="">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="img/slides/slide50.jpg" class="d-none d-md-block w-100" alt="">
                <img src="img/slides/slide50mini.jpg" class="d-block d-md-none w-100" alt="">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="img/slides/slidebf.jpg" class="d-none d-md-block w-100" alt="">
                <img src="img/slides/slidebfmini.jpg" class="d-block d-md-none w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" 
            data-bs-target="#carouselMain" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button"
             data-bs-target="#carouselMain" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="visually-hidden">Próximo</span>
            </button>
          </div>
          <hr class="mt-3">
       </div> 

     <main class="flex-fill">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <form class="justify-content-center justify-content-md-start
                        mb-3 mb-md-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control"
                                placeholder="Digite aqui o que procura">
                            <button class="btn btn-dark">Buscar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-7">
                    <div class="d-flex flex-row-reverse justify-content-center
                    justify-content-md-start">
                   
                    <nav class="d-inline-block me-3">
                        <ul class="pagination pagination-sm my-0">
                          <li class="page-item">
                              <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">6</a>
                        </li>
                        </ul>
                      </nav>
                </div>
                </div>
            </div>

            <hr mt-3>

            <div class="row g-3">
                <!-- PRIMEIRO PRODUTO               -->
            <?php
                while($row=mysqli_fetch_array($result)){

                    echo "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2\">";

                    echo  "<div class=\"card text-center bg-light\">";
                    
                    echo "<a href=\"#\" class=\"position-absolute end-0 p-2 text-danger\">";
                    echo " <i class=\"bi-suit-heart\" style=\"font-size: 24px;";
                    echo " line-height: 24px;\"></i></a>";
                    // IMAGEM DO PRODUTO
                    echo "<img src=\"adm/upload/".$row['img_produto']."\" class=\"card-img-top\" > ";
                    //PREÇO DO PRODUTO
                    echo "<div class=\"card-header\">R$".number_format( $row['valor_produto'], 2, ',', '.' )."</div>";
                    echo "<div class=\"card-body\">";
                    //NOME DO PRODUTO
                    echo "<h5 class=\"card-title\">".$row['nome_produto']."</h5>";
                    //DESCRIÇÃO DO PRODUTO
                    echo "<p class=\"card-text truncar-3l\">".$row['descricao_produto']."</p></div>";
                    
                    echo "<div class=\"card-footer\">
                        <a href=\"carrinho.php?cod_produto=".$row['cod_produto']."\" class=\"btn btn-dark mt-2 d-block\">
                            Adicionar ao Carrinho
                        </a>";
                    //ESTOQUE DO PRODUTO
                    echo "<small class=\"text-sucess\">".$row['qt_produto_estoque']." em estoque </small>
                    </div>
                  </div>
            </div>";
             }
            ?>
                <!--FIM DO PRIMEIRO PRODUTO-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

                <div class="card text-center bg-light">
                    
                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                       <i class="bi-suit-heart" style="font-size: 24px;
                       line-height: 24px;"></i>
                    </a>

                    <img src=" " class="card-img-top">
                    <div class="card-header">
                     R$ 4,50
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Fone de Ouvido</h5>
                      <p class="card-text truncar-3l">
                          Fone de ouvido para por no ouvido
                      </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-light disabled mt-2 d-block">
                            <small>Reabastecendo Estoque</small>
                        </a>
                        <small class="text-danger"> Produto Esgotado </small>
                    </div>
                  </div>
            </div>

          
        </div>
        <hr class= mt-3>

        <div class="row pb-3">
           
            <div class="col-12">
                <div class="d-flex flex-row-reverse justify-content-center
                justify-content-md-start">
                
                <nav class="d-inline-block me-3">
                    <ul class="pagination pagination-sm my-0">
                      <li class="page-item">
                          <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">6</a>
                    </li>
                    </ul>
                  </nav>
            </div>
            </div>
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