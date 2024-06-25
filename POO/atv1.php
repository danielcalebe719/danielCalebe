<?php
// Definição da classe Animal
class Animal {
    protected $nome;
    protected $especie;
    protected $idade;

    public function __construct($nome, $especie, $idade) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
    }

    public function getInfo() {
        return "Nome: $this->nome,<br> Espécie: $this->especie,<br> Idade: $this->idade anos.";
    }

    public function emitirSom() {
        echo "$this->nome está emitindo um som.<br>\n";
    }
}


class Leao extends Animal {
    public function emitirSom() {
        echo "$this->nome (Leão) está rugindo.<br>\n";
    }
}

class Elefante extends Animal {
    public function emitirSom() {
        echo "$this->nome (Elefante) está bramidos .<br>\n";
    }
}
class Passaro extends Animal {
    public function emitirSom() {
        echo "$this->nome (Pássaro) está piando.<br>\n";
    }
}


class Zoologico {
    private $animais = array();

    public function adicionarAnimal($animal) {
        $this->animais[] = $animal;
    }

    public function listarAnimais() {
        foreach ($this->animais as $animal) {
            echo $animal->getInfo() . "\n";
        }
    }

    public function emitirSons() {
        foreach ($this->animais as $animal) {
            $animal->emitirSom();
        }
    }
}

// Criação das instâncias de animais
$leao = new Leao("Mateus", "Leão", 5);
$elefante = new Elefante("Fafa", "Elefante", 10);
$passaro = new Passaro("Edu", "Pássaro", 2);


$zoologico = new Zoologico();


$zoologico->adicionarAnimal($leao);
$zoologico->adicionarAnimal($elefante);
$zoologico->adicionarAnimal($passaro);


echo "<h1>Lista de Animais no Zoológico:<br></h1>n";
$zoologico->listarAnimais();

echo "\n<h1>Sons dos Animais no Zoológico:<br></h1>\n";
$zoologico->emitirSons();
?>