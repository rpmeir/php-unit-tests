<?php

#region Use Statements
use CDC\Loja\RH\CalculadoraDeSalario;
use CDC\Loja\RH\Funcionario;
use CDC\Loja\RH\TabelaCargos;
#endregion

test("Calcular Salario de Desenvolvedor com salario abaixo do limite", function () {
    $calculadora = new CalculadoraDeSalario();
    $desenvolvedor = new Funcionario('Andre', 1500.0, TabelaCargos::DESENVOLVEDOR);
    $salario = $calculadora->calculaSalario($desenvolvedor);

    expect($salario)->toEqual(1500.0 * 0.9);
});

test("Calcular Salario de Desenvolvedor com salario acima do limite", function () {
    $calculadora = new CalculadoraDeSalario();
    $desenvolvedor = new Funcionario('Andre', 4000.0, TabelaCargos::DESENVOLVEDOR);
    $salario = $calculadora->calculaSalario($desenvolvedor);

    expect($salario)->toEqual(4000.0 * 0.8);
});

test("Calcular Salario de DBA com salario abaixo do limite", function () {
    $calculadora = new CalculadoraDeSalario();
    $desenvolvedor = new Funcionario('Andre', 500.0, TabelaCargos::DBA);
    $salario = $calculadora->calculaSalario($desenvolvedor);

    expect($salario)->toEqual(500.0 * 0.85);
});
