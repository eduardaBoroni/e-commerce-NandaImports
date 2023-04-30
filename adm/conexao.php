<?php

$servername = "localhost"; // servidor
$username = "root"; //nome de usuario
$password = ""; // senha de acesso
$dbname = "nanda"; //nome do banco de dados

// Creat connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
   die("Conexão falhou: ".mysqli_connect_error());
}

?>