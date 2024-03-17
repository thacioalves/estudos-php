<?php

class ContaBancaria
{
    // public - private - protected
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    // usado quando é instanciada uma classe
    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;

    }

    public function obterSaldo()
    {
        return "Seu saldo atual é: R$ " . $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo +=$valor;
        return 'Depósito de R$ ' .$valor . ' realizado!';
    }

    public function sacar($valor)
    {
        $this->saldo -=$valor;
        return 'Saque de R$ ' .$valor . ' realizado!';
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Thacio',
    '0000',
    '123456-78',
    0
);

echo $conta->obterSaldo(); // 0

echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL; // quebra de linha no terminal

echo $conta->obterSaldo(); // 300.00

echo PHP_EOL;

echo $conta->sacar(150.00);

echo PHP_EOL;

echo $conta->obterSaldo(); // 150.00
