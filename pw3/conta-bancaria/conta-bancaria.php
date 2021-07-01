<?php
    class Conta {
      private $numero;
      private $saldo;
      private $deposito;
      private $saque;

      public function getNumero() {
        return $this->numero;
      }
      public function setNumero($numero) {
        $this->numero = $numero;
      }

      public function getSaldo() {
        return $this->saldo;
      }
      public function setSaldo($saldo) {
        $this->saldo = $saldo;
      }

      public function depositar($deposito) {
        $this->saldo += $deposito;
      }

      public function sacar($saque) {
        if($this->saldo >= $saque) {
          $this->saldo -= $saque;
        } else {
          echo "Valor de saque é maior que o saldo!";
        }        
      }
    }
?>