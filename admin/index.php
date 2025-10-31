<?php
echo "<h1>YORKUT - página principal</h1>";
?>

<nav>
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="?pg=posts">Mostrar postagens</a></li>
    </ul>
</nav>

<hr>

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
