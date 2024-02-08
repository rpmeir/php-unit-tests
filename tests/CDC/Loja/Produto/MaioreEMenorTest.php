<?php

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\MaiorEMenor;
use CDC\Loja\Produto\Produto;

const JOGO_DE_PRATOS = "Jogo de Pratos";
const GELADEIRA = "Geladeira";

test("testOrdemDecrescente", function () {
    $carrinho = new CarrinhoDeCompras();
    $carrinho->adiciona(new Produto(GELADEIRA, 450.00));
    $carrinho->adiciona(new Produto("Liquididificador", 250.00));
    $carrinho->adiciona(new Produto(JOGO_DE_PRATOS, 70.00));

    $maiorMenor = new MaiorEMenor();
    $maiorMenor->encontra($carrinho);

    expect(JOGO_DE_PRATOS)->toBe($maiorMenor->getMenor()->getNome());
    expect(GELADEIRA)->toBe($maiorMenor->getMaior()->getNome());
});

test("testOrdemVariada", function () {
    $carrinho = new CarrinhoDeCompras();
    $carrinho->adiciona(new Produto(GELADEIRA, 450.00));
    $carrinho->adiciona(new Produto(JOGO_DE_PRATOS, 70.00));
    $carrinho->adiciona(new Produto("Liquididificador", 250.00));

    $maiorMenor = new MaiorEMenor();
    $maiorMenor->encontra($carrinho);

    expect(JOGO_DE_PRATOS)->toBe($maiorMenor->getMenor()->getNome());
    expect(GELADEIRA)->toBe($maiorMenor->getMaior()->getNome());
});

test("testApenasUmProduto", function () {
    $carrinho = new CarrinhoDeCompras();
    $carrinho->adiciona(new Produto(GELADEIRA, 450.00));

    $maiorMenor = new MaiorEMenor();
    $maiorMenor->encontra($carrinho);

    expect(GELADEIRA)->toBe($maiorMenor->getMenor()->getNome());
    expect(GELADEIRA)->toBe($maiorMenor->getMaior()->getNome());
});
