<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$cep = $_POST['cep'];

$sql = "insert into usuarios (nome,tel,email,cep) values ('$nome','$tel','$email','$cep')";
$salvar = mysqli_query ($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>
<!DOCTYPE html>
<html lang= "pt-br">
   <head>
        <meta charset="utf-8">
        <title>Sistema de Orçamentos</title>
        <link rel="stylesheet" href="_css/estilo.css">

    </head>
    <body>
        <div class="contairner">            
               <nav>
                    <ul class="menu">
                       
                        <a href="index.php"><li>Cadastro</li></a>

                        <a href="consultas.php"><li>Consultas</li></a>
                        
                        <a href="login.php"><li>Entrar</li></a>
                    </ul>   
                </nav>
                <section>
                  <h1>Confirmação de cadastro</h1>
                  <hr><br><br>


                  <?php
                       if ($linhas == 1){
                          print "Cadastro sucefful";
                        } else{
                            print"Cadastro não efetuado.<br> Já existe usuario com este e-mail";
                        }

                    ?>

                </section>

        </div>
   </body>

</html>
 