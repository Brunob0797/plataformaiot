<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conexao.php";
//a linha abaixo captura o id pelo link
$id = $_GET["id"];

//abaixo capturamos o registro do banco a ser editado
$nome = $_POST["disp_nome"];
$ip = $_POST["disp_ip"];
$porta = $_POST["disp_porta"];


$atualizar = "UPDATE dispositivos SET nome='$nome', ip='$ip', porta='$porta' WHERE id='$id'";
mysqli_query($conexao, $atualizar) or die("Não foi possivel fazer a edição");

mysqli_close($conexao);
echo "<script> location = 'index.php'; alert('Os dados foram editados com sucesso')</script>";
?>
