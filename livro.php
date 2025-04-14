<?php
class Livro {
    // Array de livros
    private $livros = [
        ['titulo' => 'Café com Deus Pai', 'autor' => 'Junior Rostirola', 'ano' => 2020],
        ['titulo' => 'é assim que acaba', 'autor' => 'Colleen Hoover', 'ano' => 2016],
        ['titulo' => 'Racionais, Sobrevivendo no inferno', 'autor' => 'Racionais Mcs', 'ano' => 2018],
        ['titulo' => 'Dois Irmãos', 'autor' => 'Milton Hatoum', 'ano' => 2000]
    ];

    // Método para listar os livros
    public function listarLivros() {
        return $this->livros;
    }
}
?>
