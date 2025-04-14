<?php
// LivroController.php
require_once 'Livro.php';
require_once 'livrosView.php';

class LivroController {
    private $livroModel;

    public function __construct() {
        // Instanciando o Model Livro
        $this->livroModel = new Livro();
    }

    public function listarLivros() {
        // Obtém a lista de livros do Model
        $livros = $this->livroModel->listarLivros();
        // Passa a lista de livros para a View exibir
        exibirLivros($livros);
    }
}
?>
