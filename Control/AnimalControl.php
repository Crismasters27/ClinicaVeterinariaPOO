<?php
    namespace Projeto\ti23t\Control;
    require_once('../Model/Animal.php');
    use Projeto\ti23t\Model\Animal;

    class Control{

        private Animal $animal;
        //Construtor
        public function __construct(Animal $animal)
        {
            $this->animal = $animal;
        }

        //Consultar
        public function consultarAnimal():string
        {
            return "<br>Código: ".$this->animal->codigo.
                   "<br>Nome: ".$this->animal->nome.
                   "<br>Espécie: ".$this->animal->especie.
                   "<br>Raça: ".$this->animal->raca.
                   "<br>Idade: ".$this->animal->idade.
                   "<br>Tutor: ".$this->animal->tutor;
        }

        //Atualizar Nome
        public function atualizarNome(string $nome):string
        {
            $this->animal->nome = $nome;
            return "Nome atualizado com sucesso!";
        }

        //Atualizar Espécie
        public function atualizarEspecie(string $especie):string
        {
            $this->animal->especie = $especie;
            return "Espécie atualizada com sucesso!";
        }

        //Atualizar Raça
        public function atualizarRaca(string $raca):string
        {
            $this->animal->raca = $raca;
            return "Raça atualizada com sucesso!";
        }

        //Atualizar Idade
        public function atualizarIdade(int $idade):string
        {
            $this->animal->idade = $idade;
            return "Idade atualizada com sucesso!";
        }

        //Atualizar Tutor
        public function atualizarTutor(string $tutor):string
        {
            $this->animal->tutor = $tutor;
            return "Tutor atualizado com sucesso!";
        }

        //Excluir
        public function excluir():int
        {
            $this->animal->codigo = 0;
            $this->animal->nome = "";
            $this->animal->especie = "";
            $this->animal->raca = "";
            $this->animal->idade = 0;
            $this->animal->tutor = "";
            return 1;
        }

    }//fim da classe
?>