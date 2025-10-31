<?php

    require "config.inc.php";

    echo "<p><a href=?pg=post-form>Fazer novo post</a></p>";
    echo "<h2>Postagens de hoje</h2>";

    $sql = "SELECT * FROM posts";
    $resultado = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($resultado)) {
        echo "Nome: " . $dados['nome'] . "<br>";
        echo "País: " . $dados['pais'] . "<br>";
        echo "Comentou: <br>" . "''" . $dados['postagem'] . "''" . "<br>";
        echo " <a href='?pg=posts-altera-form&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=post-excluir&id=$dados[id]'>Excluir</a>";
        echo "<hr>";
    }