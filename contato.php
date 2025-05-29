<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Feira Tecnológica de Profissões</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><a href="index.html">Feira Tecnológica de Profissões</a></h1>
  
  <nav>
    <a href="cadastro_palestra.php">Cadastrar Palestras</a>
    <a href="cadastro_participante.php">Cadastrar Participantes</a>
    <a href="contato.php">Contato</a>
    <a href="mapa.html">Mapa</a>
  </nav>
</header>
  <main class="main-contato">
    <section>
            <h2>Informações de Contato</h2>
            <p><strong>Email:</strong> feiratecnologia@gmail.com</p>
            <p><strong>Telefone:</strong> (11) 4002-8922</p>
            <p><strong>Endereço:</strong> Rua das Chatices, 1095 - Bairro Mimimi, Blablabla - CEP 78665-567</p>
        </section>
    <div class="contato">
    <form action="contato.php" method="post">

     
    <label for="Nome"><h2>Nome:</h2></label>
    <input type="text" name="NOME" required class="caixa-preenchimento"> <br><br>
    <label for="Sobrenome"><h2>Sobrenome:</h2></label>
    <input type="text" name="SOBRENOME" required class="caixa-preenchimento"> <br><br>
    <label for="Email"><h2>Email:</h2></label>
    <input type="email" name="EMAIL" required class="caixa-preenchimento"> <br><br>
    <label for="Telefone"><h2>Telefone:</h2></label>
    <input type="tel" name="TELEFONE" maxlength="15" required class="caixa-preenchimento"><br><br>
    <label for="Mensagem"><h2>Mensagem:</h2></label>
    <textarea name="MENSAGEM" id="MENSAGEM" cols="40" rows="6" required placeholder="Por favor, não use palavras pejorativas"></textarea><br>

    <button type="submit">Enviar</button>
    
    

</form>

<?php //profs, como esse é o único que voces pediram que recupere todos os dados, acho que é o único que eu preciso atribuir "$" a todos os itens de preenchimento
    if(isset($_POST["NOME"])){
  $nome=$_POST["NOME"];
  $sobrenome=$_POST["SOBRENOME"];
  $email=$_POST["EMAIL"];
  $telefone=$_POST["TELEFONE"];
  $mensagem=$_POST["MENSAGEM"];
  echo "<p><i>Sua mensagem foi enviada com sucesso, $nome!<i><p>";
} 

?>


  </main>


  <footer class="footer-relative">
     <p>&copy; 2025 Feira Tecnológica de Profissões | Escola SESI</p>
  </footer>

</body>
</html>