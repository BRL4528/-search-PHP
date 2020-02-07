<!DOCTYPE html>
<html lang= "pt-br">
   <head>
        <meta charset="utf-8">
        <title>Trabalho Pedro</title>
        <link rel="stylesheet" href="_css/estilo2.css">
        <link rel="stylesheet" href="_css/estilo.css">

    </head>
    <body>
        <div class="contairner">            
               <nav class="navprincipal">   
                    <ul class="menu">
                       
                        <a href="loginprimario.php"><li>Home</li></a>

                        <a href="consultas.php"><li>Consultas</li></a>

                        <a href="login.php"><li>Entrar</li></a>

                    </ul>   
                </nav>
                <section class="sectionprincipal">
                  <h1>Dados Pessoais</h1>
                  <hr><br><br>
                  <form method="post" action="processa.php">
                 

                  

                  Nome Completo<br>
                  <input type="text"  name="nome" class="campo" maxlength="40" required autofocus><br>
                  Cpf<br>
                  <input type="text" name="cpf" class="campo" maxlength=11 OnKeyPress="formatar('###.###.###-##', this)"><br>
                  Celular<br>
                  <input type="text" name="tel" class="campo" maxlength="12" OnKeyPress="formatar('##-####-####', this)" ><br>
                  Email<br>
                  <input type="email"  name="email" class="campo" maxlength="50" required ><br>
                  Cep<br>
                  <input type="text" name="cep" class="campo" maxlength="9" OnKeyPress="formatar('#####-###', this)"><br>
                  
                  <input type="submit" value="Salvar" class="btn">
                </section>

        </div>
   </body>

</html>
 