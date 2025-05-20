<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function cleanUpperCasseString($string): string
    {
        // Remover os espaços em branco no ínico e fim de uma string
        // converte a string para uppercase (maiúscula)
        return strtoupper(trim($string));
    }
}
