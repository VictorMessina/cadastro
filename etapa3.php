<html>
<head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
</head>
<body> 
	<p align="center"><big><big><strong>
		Cadastramento - Etapa 3 de 3</strong></big></big>
	</p> 
	<form method="POST" action="cadastra.php"> 
		<input type="hidden" name="nome" value="$nome;"> 
 		<input type="hidden" name="email" value="$email;"> 
 		<input type="hidden" name="datanascimento" value="$datanascimento;"> 
 		<input type="hidden" name="sexo" value="$sexo;"> 
 		<input type="hidden" name="profissao" value="$profissao;"> 
		<input type="hidden" name="telefone" value="$telefone;"> 
		<input type="hidden" name="endereco" value="$endereco;"> 
		<input type="hidden" name="cidade" value="$cidade;"> 
		<input type="hidden" name="estado" value="$estado;"> 
		<input type="hidden" name="cep" value="$cep;"> 
			
 		<div align="center"><center>
			<p>Username: <input type="text" name="username" size="10"></p> 
 		</center></div>

		<div align="center"><center>
			<p>Senha: <input type="password" name="senha" size="10"></p> 
		</center></div>
			
		<div align="center"><center>
			<p>Confirme sua Senha: <input type="pasword" name="confirma_senha" size="10"></p> 
 		</center></div>

		<div align="center"><center>
			<p><input type="submit" value="Finalizar Cadastro" name="fim"></p> 
 		</center></div> 
	</form> 
</body> 
</html>