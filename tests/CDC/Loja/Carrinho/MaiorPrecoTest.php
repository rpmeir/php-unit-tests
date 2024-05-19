<?php

namespace Tests\CDC\Loja\Carrinho;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Carrinho\MaiorPreco;

class MaiorPrecoTest extends \PHPUnit\Framework\TestCase
{
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new CarrinhoDeCompras();
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEquals(0, $valor);
    }
}
