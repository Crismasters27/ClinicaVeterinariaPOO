<?php
    namespace Projeto\ti23t\Control;
    require_once('../Model/Veterinario.php');
    use Projeto\ti23t\Model\Veterinario;

    class Control{

        private Veterinario $veterinario;
        //Construtor
        public function __construct(Veterinario $veterinario)
        {
            $this->veterinario = $veterinario;
        }

        //Consultar
        public function consultarVeterinario():string
        {
            return "<br>Código: ".$this->veterinario->codigo.
                   "<br>Nome: ".$this->veterinario->nome.
                   "<br>CRMV: ".$this->veterinario->crmv.
                   "<br>Especialidade: ".$this->veterinario->especialidade.
                   "<br>Turno: ".$this->veterinario->turno.
                   "<br>Telefone: ".$this->veterinario->telefone;
        }

        //Atualizar Nome
        public function atualizarNome(string $nome):string
        {
            $this->veterinario->nome = $nome;
            return "Nome atualizado com sucesso!";
        }

        //Atualizar Espécie
        public function atualizarCrmv(int $crmv):string
        {
            $this->veterinario->crmv = $crmv;
            return "CRMV atualizado com sucesso!";
        }

        //Atualizar Raça
        public function atualizarEspecialidade(string $especialidade):string
        {
            $this->veterinario->especialidade = $especialidade;
            return "Especialidade atualizada com sucesso!";
        }

        //Atualizar Idade
        public function atualizarTurno(int $turno):string
        {
            $this->veterinario->turno = $turno;
            return "Turno atualizado com sucesso!";
        }

        //Atualizar Tutor
        public function atualizarTelefone(int $telefone):string
        {
            $this->veterinario->telefone = $telefone;
            return "Telefone atualizado com sucesso!";
        }

        //Excluir
        public function excluir():int
        {
            $this->veterinario->codigo = 0;
            $this->veterinario->nome = "";
            $this->veterinario->crmv = "";
            $this->veterinario->especialidade = "";
            $this->veterinario->turno = "";
            $this->veterinario->telefone = "";
            return 1;
        }

    }//fim da classe
?>