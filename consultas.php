<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where cep like '%$filtro%'order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);



?>

<!DOCTYPE html>
<html lang= "pt-br">
   <head>
        <meta charset="utf-8">
        <title>Sistema de Orçamentos</title>
        <link rel="stylesheet" href="_css/estilo.css">

    </head>
    <body class="bodyprincipal">
        <div class="contairner">            
        <nav class="navprincipal">
                    <ul class="menu">
                       
                        <a href="index.php"><li>Cadastro</li></a>

                        <a href="consultas.php"><li>Consultas</li></a>

                        <a href="login.php"><li>Entrar</li></a>
                         
                    </ul>       
                </nav>
                <section class="sectionprincipal">
                  <h1>Consultas</h1>
                  <hr><br><br>

                  <form method="get" action="">
                      Filtrar por cep: <input type="text" name="filtro" class="campo"  required autofocus>
                      <input type="submit" value="pesquisar"  class="btn">
                  </form>
                  <?php
                   print "Resultado da pesquisa com a palavra <strong>$filtro</strong>.<br><br>";

                   print"$registros resgistros encontrados";

                   print"<br><br>";
                    
                   while($exibirRegistros = mysqli_fetch_array($consulta)){

                      $codigo = $exibirRegistros[0];
                      $nome = $exibirRegistros[1];
                      $tel = $exibirRegistros[2];
                      $email = $exibirRegistros[3];
                      $cep = $exibirRegistros[4];
                      
                      print "<article>";

                      print"$codigo<br>";
                      print"$nome<br>";
                      print"$tel<br>";
                      print"$email<br>";
                      print"$cep"; 

                      print "</article>";
                   }

                   mysqli_close($conexao);

                  ?>

                </section>

        </div>
   </body>

</html>