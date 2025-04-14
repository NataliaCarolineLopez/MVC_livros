<?php
// livrosView.php
function exibirLivros($livros) {
    echo "<ul>";
    foreach ($livros as $livro) {
        echo "<li>Título: {$livro['titulo']} | Autor: {$livro['autor']} | Ano: {$livro['ano']}</li>";
    }
    echo "</ul>";
}
?>
