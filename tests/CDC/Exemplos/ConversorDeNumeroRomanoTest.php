<?php

use CDC\Exemplos\ConversorDeNumeroRomano;

test("ConversorDeNumeroRomanoTest", function (string $romano, int $decimal) {
    $conversor = new ConversorDeNumeroRomano();

    $numero = $conversor->converte($romano);

    expect($decimal)->toBe($numero);
})->with([
    'Deve Entender O Simbolo I' => ['I', 1],
    'Deve Entender O Simbolo V' => ['V', 5],
    'Deve Entender O Simbolo II' => ['II', 2],
    'Deve Entender O Simbolo XXII' => ['XXII', 22],
    'Deve Entender O Simbolo IX' => ['IX', 9],
    'Deve Entender O Simbolo XXIV' => ['XXIV', 24],
]);
