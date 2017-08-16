<?php 
//Fazer conexao com o banco de dados, função(ip, user, senha, db)
$conexao = mysqli_connect("localhost","root", "","plataforma") or die("Não foi possivel conectar");

//escolhendo o bd atraves de seu nome
mysqli_select_db($conexao, "plataforma") or die("Não foi possivel selecionar o banco dados");
?>