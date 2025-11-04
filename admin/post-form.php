<div id="form-container">
    <h2>Fazer novo post</h2>

    <form action="?pg=post-cadastro" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required>

        <label for="postagem">Seu post:</label>
        <textarea id="postagem" name="postagem" rows="5" required></textarea>

        <input type="submit" value="Postar">
    </form>
</div>