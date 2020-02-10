<?php
    namespace Reweb\Job\Backend;
/**
 * Description of Conta
 *
 * @author Bruna Santos
 */
class Conta {    
    protected $tipo;
    protected $saldo;
    
    function getTipo() {
        return $this->tipo;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    function __construct($tipo, $saldo) {
        $this->tipo = $tipo;
        $this->saldo = $saldo;
    }
    
    public function saqueP($valor){
        if ($valor <= ($this->getSaldo()+0.8)){
            if ($valor <= 1000){
                $this->setSaldo($this->getSaldo()-($valor+0.8));
                echo 'Saque realizado! Saldo atualizado: B$ '.$this->getSaldo().'.</br>';
            } else{
                echo 'O valor de saque exede o limite de B$600,00 diários.</br>';
            }
        }else{
            echo 'O valor de saque exede o valor em conta.</br>';
        }
    }    
    public function saqueC($valor) {
        if ($valor <= ($this->getSaldo()+2.5)){
            if ($valor <= 600){
                $this->setSaldo($this->getSaldo()-($valor+2.5));
                echo 'Saque realizado! Saldo atualizado: B$ '.$this->getSaldo().'.</br>';
            } else{
                echo 'O valor de saque exede o limite de B$600,00 diários.</br>';
            }
        } else{
            echo 'O valor de saque exede o valor em conta.</br>';
        }
    }
    
    public function deposito($valor){
        $this->setSaldo($this->getSaldo()+$valor);
        echo 'Depósito efetuado, saldo atualizado: B$ '.$this->getSaldo().'.</br>';
    }
    
    public function transferencia($cdestino, $valor){
        if ($this->getSaldo()>=$valor) {
            $this->setSaldo($this->getSaldo()-$valor);
            $cdestino->setSaldo($cdestino->getSaldo()+$valor);
            echo 'Transferência realizada!';
            echo 'Saldo atualizado da conta depositada B$ '.$cdestino->getSaldo().'.</br>';
            echo 'Saldo atualizado da conta transferida B$ '.$this->getSaldo().'.</br>';
        } else {
            echo 'Saldo insuficiênte para a transferência.</br>';
        }
    }
    
}
