<?php

// receber os dados
$nome = $_POST['nome'];

// conectar ao sgbd

$conexao = mysqli_connect("localhost:3306", "root", "123456");   

// selecionar o banco de dados

mysqli_select_db($conexao, "escola");

// inserir os dados (sql -> insert)

$sql = "insert into aluno (nome) values ('$nome')";

mysqli_query($conexao, $sql);