<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function isBoolean($value)
    {
        return is_bool($value); //Devuelve un valor booleano
    }
    public function sum($a, $b)
    {
        //Devuelve la suma de los valores $a y $b.
        return $a + $b;
    }
    public function equals($a, $b)
    {
        //Devuelve true si $a es igual a $b en valor y tipo, y false en cualquier otro caso.
        return $a === $b;
    }
    public function containsValue($value, array $values)
    {
        //Devuelve true si el valor está en el arreglo, falso en caso contrario.
        return in_array($value, $values);
    }
    public function isString($value)
    {
        //Devuelve true si el valor es de tipo string, falso en caso contrario.
        return is_string($value);
    }
}