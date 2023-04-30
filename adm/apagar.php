<?php

include "conexao.php";

$cod_produto=$_GET['cod_produto'];


$sql = "DELETE FROM produto WHERE cod_produto='$cod_produto'";

$result = mysqli_query($conn, $sql);
header('Location: listarp.php');
?>

<?php

