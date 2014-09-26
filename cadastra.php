<!DOCTYPE html>
    <html>
        <head>
            <title> Produto </title>
            <meta charset="UTF-8">
        </head>	
            <body>
                <form method="POST" action="cadastro.php">
                <?php
                 $nome = $_POST["nome"];
                 $email = $_POST["email"];
                 $datanascimento = $_POST["datanascimento"];
                 $sexo = $_POST["sexo"];
                 $profissao = $_POST["profissao"];
                 $telefone = $_POST["telefone"];
                 $endereco= $_POST["endereco"];
                 $cidade = $_POST["cidade"];
                 $estado = $_POST["estado"];
                 $cep = $_POST["cep"];
                 
                 echo "seu nome é: ".$nome."<br/>";
                 echo "seu email é: ".$email."<br/>";
                 echo "sua data de nascimento é: ".$datanascimento."<br/>";
                 echo "seu sexo é: ".$sexo."<br/>";
                 echo "sua profissão é: ".$profissao."<br/>";
                 echo "seu telefone é: ".$telefone."<br/>";
                 echo "seu endereço é: ".$endereco."<br/>";
                 echo "sua cidade é: ".$cidade."<br/>";
                 echo "seu estado é: ".$estado."<br/>";
                 echo "seu cep é: ".$cep."<br/>";
                
                ?>
            </form>
            </body>
    </html>
