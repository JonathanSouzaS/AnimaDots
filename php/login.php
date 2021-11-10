 <?php
	// include 'conexao.php';
 ?>
 <!DOCTYPE html>
<html lang="pt-br">
	<head>
	</head>
	<body>
		<form class="form" action="validaLogin.php" method="post" id="form" name="form">
			<h1><strong>Tela de Login</strong></h1>
			<input type="text" name="login" id="login" placeholder="Digite seu login" required/>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required/>
			<?php
				if(isset($_GET['erro'])){
					$erro=$_GET['erro'];
					if($erro=="dados-incorretos"){
						echo '<p class="msg-erro"><strong>Dados incorretos.</strong></p>';
					}
				}
			?>
			<button type="submit">Login</button>
		</form>
	</body>
</html>