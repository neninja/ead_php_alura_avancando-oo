<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        if ($this->cargo === 'Gerente') {
            return $this->salario;
        }
        return $this->salario * 0.1;
    }
}
