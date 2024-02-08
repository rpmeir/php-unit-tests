<?php

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\MaiorEMenor;
use CDC\Loja\Produto\Produto;

test("testOrdemDecrescente", function () {
    $carrinho = new CarrinhoDeCompras();
    $carrinho->adiciona(new Produto("Geladeira", 450.00));
    $carrinho->adiciona(new Produto("Liquididificador", 250.00));
    $carrinho->adiciona(new Produto("Jogo de Pratos", 70.00));

    $maiorMenor = new MaiorEMenor();
    $maiorMenor->encontra($carrinho);

    expect("Jogo de Pratos")->toBe($maiorMenor->getMenor()->getNome());
    expect("Geladeira")->toBe($maiorMenor->getMaior()->getNome());
});

test("testOrdemVariada", function () {
    $carrinho = new CarrinhoDeCompras();
    $carrinho->adiciona(new Produto("Geladeira", 450.00));
    $carrinho->adiciona(new Produto("Jogo de Pratos", 70.00));
    $carrinho->adiciona(new Produto("Liquididificador", 250.00));

    $maiorMenor = new MaiorEMenor();
    $maiorMenor->encontra($carrinho);

    expect("Jogo de Pratos")->toBe($maiorMenor->getMenor()->getNome());
    expect("Geladeira")->toBe($maiorMenor->getMaior()->getNome());
});

test("testApenasUmProduto", function () {
    $carrinho = new CarrinhoDeCompras();
    $carrinho->adiciona(new Produto("Geladeira", 450.00));

    $maiorMenor = new MaiorEMenor();
    $maiorMenor->encontra($carrinho);

    expect("Geladeira")->toBe($maiorMenor->getMenor()->getNome());
    expect("Geladeira")->toBe($maiorMenor->getMaior()->getNome());
});
