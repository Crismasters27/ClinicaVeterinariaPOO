<?php
    namespace Projeto\ti23t\Model;

    class Atendimento{

        //Encapsulamento
        private int $codigo;
        private string $diagnostico;
        private string $tratamento;
        private dateTime $data;
        private string $status;

        //Construtor
        public function __construct(int $codigo, string $diagnostico, string $tratamento, dateTime $data, string $status){
            $this->codigo = $codigo;
            $this->diagnostico = $diagnostico;
            $this->tratamento = $tratamento;
            $this->data = $data;
            $this->status = $status;
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