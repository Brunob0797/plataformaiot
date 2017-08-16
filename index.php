<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Plataforma de seleção</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
	</head>

	<body>
			<div class="direita">
            	<h3>Painel de Controle</h3><br>
                <a href="cadastro.php">Cadastro de novos dispositivos</a>
			</div>
			<div class="geral">
            
            <?php include "conexao.php";
				$sql = mysqli_query($conexao, "SELECT * FROM dispositivos");
			
			while($ress = mysqli_fetch_assoc($sql)){
				$id = $ress['id'];
				$nome = $ress['nome'];
				$ip = $ress['ip'];
				$porta = $ress['porta'];
		?>
    
    	<tr>
   		  <td width="200" height="50">
            
            <table width="200" height="50" border="0" align="center" class="tabela-centro">
              <tbody>
                <tr>
                  <td><?php echo "<a href='http://$ip'>Nome: $nome<br>Ip: $ip<br>Porta: $porta</a>"?><br><br>
            </td>
                  <td><?php echo "<a href='editar.php?id=$id'><button  type='button'><img src='style/images/editar.png' width='20' height='20' alt='Editar'></button></a>"?>
                  <?php echo "<a href='excluir.php?id=$id'><button  type='button'><img src='style/images/delete.png' width='20' height='20' alt='Editar'></button></a>"?>
                  </td>
                </tr>
              </tbody>
            </table><br>
            
          </td>
        </tr>    
    	
    	<?php			
						}
		?>
            
		</div>
	</body>
</html>
