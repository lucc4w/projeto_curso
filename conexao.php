<?php
$servername = "localhost"; //padrão server local
$database = "curso_estoque"; //alterar conforme o nome do seu banco de dados
$username = "root"; //padrão - root
$password = ""; //senha de conexao do banco de dados
//create connection
$conexao = mysqli_connect($servername, $username, $password, $database);