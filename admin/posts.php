<link rel="stylesheet" href="yorkut.css"> 
<?php

    require "config.inc.php";

    echo "<p class='novo-post'><a href='?pg=post-form'>Fazer novo post</a></p>";
    echo "<h2>Postagens de hoje</h2>";

    $sql = "SELECT * FROM posts";
    $resultado = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_array($resultado)) {
    echo "<div class='postagem'>";
        echo "<p><span id='nome'>Nome:</span> <strong>" . $dados['nome'] . "</strong></p>";
        echo "<p><span id='pais'>País:</span> " . $dados['pais'] . "</p>";
        echo "<p><span id='comentario'>Postagem:</span></p>";
        echo "<blockquote>\"" . $dados['postagem'] . "\"</blockquote>";

        echo "<div class='acoes'>";
            echo "<a class='editar' href='?pg=posts-altera-form&id={$dados['id']}'>Editar</a>";
            echo "<a class='excluir' href='?pg=post-excluir&id={$dados['id']}'>Excluir</a>";
        echo "</div>";
    echo "</div>";
    }
