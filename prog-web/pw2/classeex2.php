<?php
    class Aluno{
        public $ra = null , $nome= null , $sobrenome= null;

        public function __construct ( $ra , $nome, $sobrenome ) {
            $this->ra = $ra;
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }

        public function exibirNomeCompleto(){
            echo $this->nome , " " , $this->sobrenome;
        }

    }
    $Luis = new Aluno (12345789,"Luis","Monteiro");
    $Luis->exibirNomeCompleto();
    
?>