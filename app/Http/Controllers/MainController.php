<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): view
    {
        // Método 1
        /*
        $data = [
            'name' => 'Gustavo',
            'idade' => '21'
        ];
        return view('home', $data);
        */

        // Método 2
        /*
        return view('home', [
            'name' => 'Gustavo',
            'idade' => '21'
        ]);
        */

        // Método 3
        /*
        return view('home')
                ->with('name', "Gustavo")
                ->with('idade', "21");
        */

        // Método 4
        $name = "Gustavo";
        $idade = "21";

        return view('home', compact('name', 'idade'));
    }
}
