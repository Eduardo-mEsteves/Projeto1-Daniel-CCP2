<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM posts WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<br><h2>Postagem excluída com sucesso.</h2>";
        echo "<a href='?pg=posts' class='voltar'>Voltar</a>";
    }else{
        echo "<br><h2>Erro ao excluir postagem.</h2>";
        echo "<a href='?pg=post'>Voltar</a>";
    }