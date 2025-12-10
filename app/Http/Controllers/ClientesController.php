<?php
namespace App\Http\Controllers;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ClientesController extends Controller
{
    public function index(): View 
    {
        $clientes=Clientes::all();
        return view('Clientes.index', compact('clientes'));
        

    }
}


