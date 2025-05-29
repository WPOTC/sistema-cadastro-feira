<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Feira Tecnológica de Profissões</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function atualizarCampos() {
            const tipo = document.getElementById("tipo").value;
            const campoRM = document.getElementById("campo-rm");
            const campoCPF = document.getElementById("campo-cpf");

            // Oculta os dois campos primeiro
            campoRM.style.display = "none";
            campoCPF.style.display = "none";

            // Exibe o campo correspondente
            if (tipo === "ALUNO") {
                campoRM.style.display = "block";
            } else if (tipo === "PAI") {
                campoCPF.style.display = "block";
            }
        }

        // Garante que os campos corretos apareçam ao recarregar a página
        window.addEventListener("DOMContentLoaded", atualizarCampos);
    </script>
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

    <main class="main-cadastro-par">
        <div class="cadastro-par">
            <form action="cadastro_participante.php" method="post">

                <label for="nome">
                    <h2>Nome completo:</h2>
                </label>
                <input type="text" name="NOME" class="caixa-preenchimento" required> <br><br>

                <label for="idade">
                    <h2>Faixa etária:</h2>
                </label>
                <select name="IDADE" class="caixa-preenchimento" required>
                    <option value="idade1">12-18 anos</option>
                    <option value="idade2">18-36 anos</option>
                    <option value="idade3">36-60 anos</option>
                    <option value="idade4">+60 anos</option>
                </select> <br><br>

                <label for="telefone">
                    <h2>Telefone:</h2>
                </label>
                <input type="tel" name="TELEFONE" class="caixa-preenchimento" required><br><br>

                <label for="oficinas">
                    <h2>Oficina/palestra que participará:</h2>
                </label>
                <select name="OFICINAS" class="caixa-preenchimento" required>
                    <option value="palestra1">HTML</option>
                    <option value="palestra2">CSS</option>
                    <option value="palestra3">PHP</option>
                    <option value="palestra4">JAVASCRIPT</option>
                    <option value="palestra5">PYTHON</option>
                </select><br><br>

                <label for="ALUNOouPAI">
                    <h2>Você é:</h2>
                </label>
                <select name="ALUNOouPAI" id="tipo" class="caixa-preenchimento" onchange="atualizarCampos()" required>
                    <option value="">Selecione</option>
                    <option value="PAI">Pai ou responsável</option>
                    <option value="ALUNO">Aluno</option>
                </select><br><br>

                <div id="campo-rm" style="display: none;">
                    <label for="rm">
                        <h4>RM (Registro do Aluno):</h4>
                    </label>
                    <input type="text" name="RM" >
                </div>

                <div id="campo-cpf" style="display: none;">
                    <label for="cpf">
                        <h4>CPF:</h4>
                    </label>
                    <input type="number" name="CPF" >
                </div><br>

                <button type="submit">Enviar</button>


                <?php
                if (isset($_POST["NOME"])) {
                    $nome = $_POST["NOME"];
                    echo "<p><i>Cadastro realizado com sucesso, $nome!<i><p>";
                }

                ?>
        </div>
        </form>
    </main>

    <footer class="footer-relative">
        <p>&copy; 2025 Feira Tecnológica de Profissões | Escola SESI</p>
    </footer>
</body>

</html>