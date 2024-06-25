<?PHP

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
        return "Título: {$this->titulo}, Autor: {$this->autor}, Preço: R$ {$this->preco}";
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
            echo $livro->getInfo() . "\n";
        }
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->livros as $livro) {
            $total += $livro->preco;
        }
        return $total;
    }
}

// Teste da loja de livros
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 49.90);
$livro2 = new Livro("Harry Potter e a Pedra Filosofal", "J.K. Rowling", 34.80);
$livro3 = new Livro("1984", "George Orwell", 24.50);

$carrinho = new Carrinho();
$carrinho->adicionarLivro($livro1);
$carrinho->adicionarLivro($livro2);
$carrinho->adicionarLivro($livro3);

echo "Livros no carrinho:\n";
$carrinho->listarLivros();

$total = $carrinho->calcularTotal();
echo "\nTotal: R$ " . number_format($total, 2);
?>