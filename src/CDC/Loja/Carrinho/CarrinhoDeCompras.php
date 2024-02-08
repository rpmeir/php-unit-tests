<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Produto\Produto;

class CarrinhoDeCompras
{
    private $produtos;

    public function __construct()
    {
        $this->produtos = array();
    }

    public function adiciona(Produto $produto)
    {
        $this->produtos[] = $produto;
        return $this;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function maiorValor()
    {
        if (count($this->produtos) == 0) {
            return 0;
        }

        $maiorValor = $this->getProdutos()[0]->getValor();
        foreach ($this->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValor()) {
                $maiorValor = $produto->getValor();
            }
        }
        return $maiorValor;
    }
}
