<?php 
// Conecta banco de dados
include("conexao.php");

//Obter valores de formulário
$nome = $_POST['disp_nome'];
$ip = $_POST['disp_ip'];
$porta = $_POST['disp_porta'];

//Inserir todos os parâmetros na base de dados
//O campo id é auto increment
mysqli_query($conexao, "insert into dispositivos(nome, ip, porta) values('$nome','$ip','$porta')");

//Conexão com o banco Fechar
mysqli_close($conexao);
echo"<script> location = 'index.php';
alert('Dispositivo cadastrado com sucesso')</script>";
?>