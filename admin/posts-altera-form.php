<?php
require "config.inc.php";

$id = $_REQUEST["id"];

$sql = "SELECT * FROM posts WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($dados = mysqli_fetch_array($resultado)) {
        $nome = $dados["nome"];
        $pais = $dados["pais"];
        $postagem = $dados["postagem"];
        $id = $dados["id"];
    }
?>
<div id="form-container">
    <h2>Editar sua postagem</h2>
    <form action="?pg=post-altera" method="post">
        <input type="hidden" name="id" value="<?=$id?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?=$nome?>" required>

        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais" value="<?=$pais?>" required>

        <label for="postagem">Postagem:</label>
        <textarea name="postagem" id="postagem" required><?=$postagem?></textarea>

        <input type="submit" value="Salvar alterações">
    </form>
</div>
<?php
} else {
    echo "<br><h2>Nenhum post encontrado</h2>";
}
?>
