<?php
// Conexão com o banco de dados
include('conexao.php');

// Verifica a conexão
if ($conn->connect_error) {
 die("Conexão falhou: " . $conn->connect_error);
}

// Coleta os dados do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$senha =$_POST['senha'];

// Insere os dados na tabela de usuários
$sql = "INSERT INTO cadastro (id_cadastro, nome, matricula, senha) VALUES (NULL, '$nome', '$matricula', '$senha')";

if ($conn->query($sql) === TRUE) {
 echo "Usuário cadastrado com sucesso!";
} else {
 echo "Erro ao cadastrar o usuário: " . $conn->error;
}

// Fecha a conexão com o banco de dados
//$conn->close();
?>