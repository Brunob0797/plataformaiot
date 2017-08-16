<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Plataforma de seleção</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
        <script language="javascript" type="text/javascript">
        	function checkOnline(url, error, ok) {
    try {
        var scriptElem = document.createElement('script');
        scriptElem.type = 'text/javascript';
        scriptElem.onerror = function(){error();};
        scriptElem.onload = function(){ok();};
        scriptElem.src = url;
        document.getElementsByTagName("body")[0].appendChild(scriptElem);
    } catch(err) {
        error(err);
    }
};
        
        </script>
        
	</head>

	<body>
			<div class="direita">
            	<h3>Painel de Controle</h3><br>
                <a href="cadastro.php">Cadastro de novos dispositivos</a>
                <script language="javascript" type="text/javascript">checkOnline('http://www.globoesporte.com', function() {alert('Fora do ar!')}, function(){alert('Online')});</script>
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
                  <td><?php echo "<a href='http://$ip'>Nome: $nome<br>Ip: $ip<br>Porta: $porta</a> <script type='text/javascript'></script>"?><br><br>
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
