<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conexao.php";

//utiliza-se o comando GET para receber variaveis da barra de endereço
$id = $_GET["id"];

$excluir = "DELETE FROM dispositivos WHERE id = '$id'";

mysqli_query ($conexao, $excluir) or die ("O registro não pode ser excluído.");

mysqli_close($conexao);
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Excluir dispositivo</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
	</head>

	<body>

			<div class="geral"><?php
            echo "<h1>Dispositivo excluído com sucesso!</h1><br> <h3>Voc&ecirc; ser&aacute; automaticamente redirecionado em 3 segundos.</h3></div>"; 
echo "<meta http-equiv='refresh' content='3;URL=index.php'>";
?>
		</div>
	</body>
</html>