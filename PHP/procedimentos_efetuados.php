<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bombeiros";

$conn =   mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
 die("Conexão falhou: " . $conn->connect_error);
}

// Coleta os dados do formulário
$aspiracao = $_POST['aspiracao'];
$avaliacao_inicial = $_POST['avaliacao_inicial'];
$avaliacao_dirigida =$_POST['avaliacao_dirigida'];

$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];
$USOKED =$_POST['senha'];


// Insere os dados na tabela de usuários
$sql = "INSERT INTO cadastro  VALUES ('$aspiracao', '$avaliacao_inicial', '$avaliacao_dirigida')";