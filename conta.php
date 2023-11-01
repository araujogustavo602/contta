<?php

    class Conta
    {
        //definindo os atributos da classe
        private $numero;
        private $agêcia;
        private $proprietário;
        private $saldo;
        private $limite;
        

        //definindo o método construtor que irá criar objetos dessa classe
        public function __construct() {}

        public function create($_numero, $_agencia, $_proprietário, $_saldo, $_limite)
        {
            $this->numero = $_numero;
            $this->agencia = $_agencia;
            $this->cor = $_proprietário;
            $this->saldo = $_saldo;
            $this->limite = $_limite;
           

        }

        //getters e setters
        public function set_numero($_numero)
        {
            $this->numero= $_numero;
        }

        public function set_agencia($_agencia)
        {
            $this->agencia= $_agencia;
        }

        public function get_proprietário($_proprietário)
        {
            return $this->proprietário ;
        }

        public function get_saldo()
        {
            return $this->saldo;
        }

        //funções específicas da classe

        public function latir()
        {
            echo "$this->nome conta<br>";
        }

        public function rosnar($_pessoa)
        {
            echo $this->dono == $_pessoa ? 
                                "$this->nome abanou o rabo. <br>" : 
                                "$this->nome rosnou para você. <br>";
        }

    }

?>