<?php

declare(strict_types=1); //se tiver alguma incompatibilidade de tipo vai acusar os erros

class ContaBancaria
{
    public string $banco = "Nubank";
    public string $nomeTitular = "Thacio";
    public string $numeroAgencia = "1234";
    public string $numeroConta = "12345-67";
    public float $saldo = 0;

    public function exibirDadosDaConta(): array
    {
        return[
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }
}