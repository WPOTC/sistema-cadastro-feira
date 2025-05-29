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
  <main class="main-cadastro-pal">
    <div class="cadastro-pal">
    <form action="cadastro_palestra.php" method="post">

     
    <label for="NomePalestra"><h2>Nome da palestra:</h2></label>
    <input type="text" name="NOMEPALESTRA" class="caixa-preenchimento" required> <br> <br>
    <label for="Palestrante"><h2>Palestrante:</h2></label>
    <input type="text" name="PALESTRANTE" class="caixa-preenchimento" required><br><br> 
    <label for="Horario"><h2>Horário:</h2></label>
    <input type="time" name="HORARIO" class="caixa-preenchimento" required><br> <br>
    <label for="DescricaoPalestra"><h2>Descrição:</h2></label>
    <textarea name="DESCRIÇÃO" cols="40" rows="5" id="DESCRICAOPALESTRA" maxlenght="5000" required></textarea><br> <br>
    </div>
<button type="submit">Enviar</button>
    
    

</form>

<?php
    if(isset($_POST["PALESTRANTE"])){
  $nome=$_POST["PALESTRANTE"];
  $palestra=$_POST["NOMEPALESTRA"];
  $horario=$_POST["HORARIO"];
  echo "<p><i>Sua palestra '$palestra' foi agendada para às $horario, $nome<i><p>";
} 

?>


  </main>


  <footer class="footer-absolute">
     <p>&copy; 2025 Feira Tecnológica de Profissões | Escola SESI</p>
  </footer>

</body>
</html>
