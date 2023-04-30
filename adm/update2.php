<?php
include_once ('conexao.php');


      if(isset($_POST['update'])){
            $cod_produto = $_POST['cod_produto']; 
            $nome_usuario = $_POST["nome_usuario"];
            $nome_produto = $_POST["nome_produto"];
            $descricao_produto = $_POST["descricao_produto"];
            $qt_produto_estoque = $_POST["qt_produto_estoque"]  ;
            $valor_produto = $_POST["valor_produto"];
            $img_produto = $_FILES['img_produto'];
           

            if(isset($_FILES['img_produto'])){ 
                  
              
                  $extensao = strtolower(substr($_FILES['img_produto']['name'], -4)); //pega a extensao do arquivo
                  $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
                  $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
              
                  move_uploaded_file($_FILES['img_produto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
              
                  $sql = "UPDATE produto SET nome_usuario = '$nome_usuario' ,nome_produto = '$nome_produto', descricao_produto = '$descricao_produto' 
      ,qt_produto_estoque  = '$qt_produto_estoque', valor_produto = '$valor_produto',img_produto = '$novo_nome' WHERE cod_produto = $cod_produto";
            $result = mysqli_query($conn,$sql);

                  
            
              
                }

           
      }
            header('Location: listarp.php');




            
?>

