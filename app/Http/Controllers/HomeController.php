<?php

namespace App\Http\Controllers;
use App\Models\Cadastro;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cadastro = Cadastro::all() ->toArray();
        $produto = Produto::all() ->toArray();
        return view('index', compact('cadastro'), compact('produto'));
    }
}
