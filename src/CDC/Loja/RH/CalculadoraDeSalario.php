<?php

namespace CDC\Loja\RH;

class CalculadoraDesalario
{
    public function calculaSalario(Funcionario $funcionario)
    {
        if ( $funcionario->getCargo() == TabelaCargos::DESENVOLVEDOR ) {
            if ( $funcionario->getSalario() > 3000 ) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        }
        return $funcionario->getSalario() * 0.85;
    }
}
