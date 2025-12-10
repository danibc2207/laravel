<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SumaController extends Controller
{
    public function index(): View{
        return view(view: 'suma', data: ['res' => null]);
    }

    public function suma(Request $request): View{
        $num1 = $request->input(key: 'num1');
        $num2 = $request->input(key: 'num2');
        $resultado = $num1 + $num2;

        return view(view: 'suma', data: ['res' => $resultado]);
    }
}
