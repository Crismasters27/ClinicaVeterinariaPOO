<?php
    namespace Projeto\ti23t\Model;

    class Veterinario{

        //Encapsulamento
        private int $codigo;
        private string $nome;
        private int $crmv;
        private string $especialidade;
        private string $turno;
        private int $telefone;

        //Construtor
        public function __construct(int $codigo, string $nome, int $crmv, string $especialidade, string $turno, int $telefone){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->crmv = $crmv;
            $this->especialidade = $especialidade;
            $this->turno = $turno;
            $this->telefone = $telefone;
        }

        //GET
        public function __get(string $dados):mixed
        {
            return $this->$dados;
        }

        //SET
        public function __set(string $variavel, string $novoDado):void
        {
            $this->$variavel = $novoDado;
        }

    }//fim da classe
?>