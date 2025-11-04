<?php
    require_once "config.inc.php";

    echo "<h1>Fazendo o seu post</h1>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $pais  = $_POST["pais"];
        $postagem  = $_POST["postagem"];

        if (!empty($nome) && !empty($pais) && !empty($postagem)) {
            $sql = "INSERT INTO posts (nome, pais, postagem)
                    VALUES ('$nome', '$pais', '$postagem')";
            $inserir = mysqli_query($conexao, $sql);

            if ($inserir) {
                echo "<h2>Sua postagem foi feita com sucesso!</h2>";
                echo  "<a href='?pg=posts' class='voltar'>Voltar</a>";
            } else {
                echo "<h2>Erro ao cadastrar cliente.</h2>";
                echo mysqli_error($conexao);
            }
        } else {
            echo "<h2>Preencha todos os campos antes de enviar.</h2>";
            echo "<a href='?pg=post-form'>Voltar à sua postagem</a>";
        }

    } else {
        echo "<h2>Envio de dados não permitido.</h2>";
        echo "<a href='?pg=post-form'>Voltar à sua postagem</a>";
    }
?>
