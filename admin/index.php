
    <link rel="stylesheet" href="yorkut.css"> 

<div id=cabecalho>
    <?php
    echo "<h1>YORKUT</h1>";
    ?>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">🏠 Início</a></li>
            <li><a href="?pg=posts">📝 Postagens</a></li>
        </ul>
    </nav>
</div>

<?php
if (isset($_GET['pg'])) {
    $pagina = $_GET['pg'];

    switch ($pagina) {
        case 'posts':
            require 'posts.php';
            break;

        case 'post-form':
            require 'post-form.php';
            break;

        case 'post-cadastro':
            require 'post-cadastro.php';
            break;

        case 'posts-altera-form': 
            require 'posts-altera-form.php';
            break;

        case 'post-altera':
            require 'post-altera.php';
            break;

        case 'post-excluir':
            require 'post-excluir.php';
            break;

        default:
            echo "<h2>Página não encontrada!</h2>";
            break;
    }
} 

?>
</body>
</html>
