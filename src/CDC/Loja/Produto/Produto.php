<?php

namespace CDC\Loja\Produto;

class Produto
{
    private $nome;
    private $valorUnitario;
    private $quantidade;

    public function __construct($nome, $valor, $quantidade = 1)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getValorTotal()
    {
        return $this->valorUnitario * $this->quantidade;
    }
}
