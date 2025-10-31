<?php
    require "config.inc.php";

    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM posts WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados["nome"];
            $pais = $dados["pais"];
            $postagem = $dados["postagem"];
            $id = $dados["id"];
        }

?>
<h2>Alteração de dados do cliente</h2>
<form action="?pg=post-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>" required><br>
    <label>País:</label>
    <input type="text" name="pais" value="<?=$pais?>" required><br>
    <label>Postagem:</label>
    <textarea name="postagem" required value="<?=$postagem?>"></textarea><br><br>
    <input type="submit" value="Cadastrar">
</form>
<?php
}else{
        echo "<br><h2>Nenhum cliente encontrado</h2>";
    }
?>


