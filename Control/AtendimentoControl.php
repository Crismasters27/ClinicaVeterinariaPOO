<?php
    namespace Projeto\ti23t\Control;
    require_once('../Model/Atendimento.php');
    use Projeto\ti23t\Model\Atendimento;

    class Control{

        private Atendimento $atendimento;
        //Construtor
        public function __construct(Atendimento $atendimento)
        {
            $this->atendimento = $atendimento;
        }

        //Consultar
        public function consultarAtendimento():string
        {
            return "<br>Código: ".$this->antendimento->codigo.
                   "<br>Diagnóstico: ".$this->atendimento->diagnostico.
                   "<br>Tratamento: ".$this->atendimento->tratamento.
                   "<br>Data: ".$this->atendimento->data.
                   "<br>Status: ".$this->atendimento->status;
        }

        //Atualizar Diagnóstico
        public function atualizarDiagnostico(string $diagnostico):string
        {
            $this->atendimento->diagnostico = $diagnostico;
            return "Diagnóstico atualizado com sucesso!";
        }

        //Atualizar Tratamento
        public function atualizarTratamento(string $tratamento):string
        {
            $this->atendimento->tratamento = $tratamento;
            return "Tratamento atualizado com sucesso!";
        }

        //Atualizar Data
        public function atualizarData(dateTime $data):string
        {
            $this->atendimento->data = $data;
            return "Data atualizada com sucesso!";
        }

        //Atualizar Status
        public function atualizarStatus(string $status):string
        {
            $this->atendimento->status = $status;
            return "Status atualizada com sucesso!";
        }

        //Excluir
        public function excluir():int
        {
            $this->atendimento->codigo = 0;
            $this->atendimento->diagnostico = "";
            $this->atendimento->tratamento = "";
            $this->atendimento->data = "";
            $this->atendimento->status = "";

            return 1;
        }

    }//fim da classe
?>