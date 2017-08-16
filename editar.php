<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conexao.php";
//a linha abaixo captura o id pelo link do consulta
$id = $_GET["id"];

//captura todos os dados da tabela cliente ONDE o id do banco é igual ao id da var.
$consulta = "SELECT * FROM dispositivos WHERE id = '$id'";
$resultado = mysqli_query($conexao, $consulta) or die ("Não existe o ID informado.");

//abaixo capturamos o registro do banco a ser editado
$linha = mysqli_fetch_assoc($resultado);
$id = $linha["id"];
$nome = $linha["nome"];
$ip = $linha["ip"];
$porta = $linha["porta"];
?>


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Editar dispositivo</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
	</head>

	<body>

			<div class="geral">
            <form id="form1" name="form1" method="post" action="modificar.php?id=<?php echo $id ?>">
	<h1>Editar dados do dispositivo</h1>

	<p>Nome
		<label>
			<input type="text" name="disp_nome" id="disp_nome" value="<?php echo $nome ?>" />
		</label>
	</p>

	<p>Ip
		<label>
			<input type="text" name="disp_ip" id="disp_ip" value="<?php echo $ip ?>" />
		</label>
	</p>
    
	<p>Porta
		<label>
			<input type="number" name="disp_porta" id="disp_porta" value="<?php echo $porta ?>" />
		</label>
	</p>
	<p>
    	<label>
			<input type="submit" name="button" id="button" value="Enviar" />
		</label>
	</p>
    
</form>
		</div>
	</body>
</html>


