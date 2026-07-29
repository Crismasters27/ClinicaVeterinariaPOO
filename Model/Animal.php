<?php
    namespace Projeto\ti23t\Model;

    class Animal{

        // Encapsulamento
        private int $codigo;
        private string $nome;
        private string $especie;
        private string $raca;
        private int $idade;
        private string $tutor;

        // Construtor
        public function __construct(int $codigo, string $nome, string $especie, string $raca, int $idade, string $tutor){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->especie = $especie;
            $this->raca = $raca;
            $this->idade = $idade;
            $this->tutor = $tutor;
        }

        // GET
        public function __get(string $dados):mixed
        {
            return $this->$dados;
        }

        // SET
        public function __set(string $variavel, string $novoDado):void
        {
            $this->$variavel = $novoDado;
        }

    }//fim da classe
?>