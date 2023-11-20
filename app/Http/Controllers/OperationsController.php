<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function isBoolean($value)
    {
        return is_bool($value);
    }
    public function isIdentified($value)
    {
        return is_object($value) && isset($value->id);
    }
    public function equals($a, $b)
    {
        return $a === $b;
    }
    public function isIterable($value)
    {
        return is_iterable($value);
    }
    public function isString($value)
    {
        return is_string($value);
    }
}