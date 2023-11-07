<?php

    class agencias
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

        public function saldo()
        {
            echo "$this->nome conta<br>";
        }

        public function _proprietário($_pessoa)
        {
            echo $this->saldo == $_pessoa ? 
                                "$this->nome abanou o rabo. <br>" : 
                                "$this->nome rosnou para você. <br>";
        }

    }

    class Conta
    {
        public string $cpfTitular; 
        public string $nomeTitular; 
        public float $saldo;
    
        public function sacar(float $valorASacar)
        { //metodo (sacar);
            if ($valorASacar > $this->saldo) {
                echo "Saldo indisponivel!";
            } else {
                $this->saldo -= $valorASacar;
            }
        }
    
        public function depositar(float $valorDepositado): void 
        {
            if ($valorDepositado > 0) {
                $valorDepositado += $this->saldo;
                echo "Deposito realizado com sucesso!";
            } elseif ($valorDepositado < 0) {
                echo 'Você precisa adicionar um valor positivo!';
            }
        }
    }