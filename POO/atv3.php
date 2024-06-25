<?php
class Aluno {
    protected $nome;
    protected $idade;
    protected $notas = array();

    public function __construct($nome, $idade, $notas) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->notas = $notas;
    }


    public function getInfo() {
        return "Nome: $this->nome,<br> Idade: $this->idade anos,<br> Notas: $this->notas ";
    }

	public function calcularMedia(){
		$i = 0;
		$soma = 0;
		$media = 0;
		foreach($this->aluno as $aluno){
			soma += $this->nota;
			i++;
		}
		$media = $soma / $i;
	}
}

?>