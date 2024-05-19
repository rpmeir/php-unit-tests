<?php

namespace Tests\CDC\Loja\Carrinho;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Carrinho\MaiorPreco;

test("Testa maior preço de um carrinho sem produtos", function () {
    $carrinho = new CarrinhoDeCompras();

    $algoritmo = new MaiorPreco();
    $valor = $algoritmo->encontra($carrinho);

    expect($valor)->toEqual(0);
});
