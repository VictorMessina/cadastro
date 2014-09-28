<!DOCTYPE html>
    <html>
        <head>
            <title> Produto </title>
            <meta charset="UTF-8">
        </head>	
            <body>
                <form method="POST" action="cadastro.php" >
                    
                    <h3> Confira seus dados e finalize o processo de cadastramento </h3>
                        
                    <?php $username = $_POST['username']; if(strlen($username)<6 OR empty($username))
                    {echo " Verifique se o campo do Username esta preenchido, ou se ele tem menos de 6 caracteres.<br/>";}?>
                    
                    <?php $senha = $_POST['senha']; if (strlen($senha)<5 OR empty($senha)) 
                    {echo " Verifique se o campo Senha esta preenchido, ou se a senha tem menos de 5 digitos.<br/>";}?>
                    
                        <?php
                             echo "seu nome é: ".$_POST['nome']."<br/>";
                             echo "seu email é: ".$_POST['email']."<br/>";
                             echo "sua data de nascimento é: ".$_POST ['datanascimento']."<br/>";
                             echo "seu sexo é: ".$_POST['sexo']."<br/>";
                             echo "sua profissão é: ".$_POST['profissao']."<br/>";
                             echo "seu telefone é: ".$_POST['telefone']."<br/>";
                             echo "seu endereço é: ".$_POST['endereco']."<br/>";
                             echo "sua cidade é: ".$_POST['cidade']."<br/>"; 
                             echo "seu estado é: ".$_POST['estado']."<br/>";
                             echo "seu cep é: ".$_POST['cep']."<br/>";
                             echo "seu Username é: ".$_POST['username']."<br/>";
                        ?>
                    <input type="submit" value="finalizar processo"/>
                </form>
            </body>
    </html>