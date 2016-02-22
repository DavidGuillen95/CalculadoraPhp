<?php

class CalculadoraService {

    const SUMA = 'suma';
    const RESTA = 'resta';
    const DIVISION = 'dividir';
    const MULTIPLICACION = 'multiplicar';

    public function sumar($primerValor, $segundoValor) {

        // Si $primerValor y $segundoValor estan definidos
        if (isset($primerValor, $segundoValor)) {
            return $primerValor + $segundoValor;
        }

        return null;
    }

    public function borrar($resultado){
        $resultado = 0;

        return $resultado;
    }
}
