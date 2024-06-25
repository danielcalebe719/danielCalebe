<?php
class Livro
{
    private $titulo;
    private $autor;
    private $preco;

    public function __construct($titulo, $autor, $preco)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
    }

    public function getInfo()
    {
        return "Título: {$this->titulo}, Autor: {$this->autor}, Preço: R$ {$this->getPreco()}";
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

class Carrinho
{
    private $livros = [];

    public function adicionarLivro($livro)
    {
        $this->livros[] = $livro;
    }

    public function removerLivro($titulo)
    {
        foreach ($this->livros as $key => $livro) {
            if ($livro->titulo == $titulo) {
                unset($this->livros[$key]);
                return;
            }
        }
    }

    public function listarLivros()
    {
        foreach ($this->livros as $livro) {
            echo $livro->getInfo() . "<br>\n";
        }
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->livros as $livro) {
            $total += $livro->getPreco();
        }
        return $total;
    }
}

$livro1 = new Livro("Homem Duplicado", "José Saramago", 19.00);
$livro2 = new Livro("As Crônicas de Gelo e Fogo", "George R. R. Martin", 59.00);
$livro3 = new LIvro("Peregrino", "John Bunyan", 17.90);

$carrinho = new Carrinho();
$carrinho->adicionarLivro($livro1);
$carrinho->adicionarLivro($livro2);
$carrinho->adicionarLivro($livro3);

echo "<h2>Livros:</h2>\n<br>";
$carrinho->listarLivros();
echo '<br>';
$total = $carrinho->calcularTotal();
echo "\n<h3>Total: R$ " . number_format($total, 2);



?>