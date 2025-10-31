<?php 
    require_once 'config.inc.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $pais = $_POST['pais'];
    $postagem = $_POST['postagem'];

    $sql = "UPDATE posts SET nome = '$nome', pais = '$pais', postagem= '$postagem' WHERE id = '$id'";

    if($resultado = mysqli_query($conexao, $sql)){
        echo "<br><h2>Post alterado com sucesso!</h2><br>";
        echo "<a href='?pg=posts'>Voltar</a>";
    } else {
        echo "<br><h2>Erro ao alterar cliente!</h2><br>";
        echo "<a href='?pg=posts'>Voltar</a>";
    }       