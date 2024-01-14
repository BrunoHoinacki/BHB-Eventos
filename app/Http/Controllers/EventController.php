<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Bruno";
        $idade = 24;
        $profissao = "Programadador";
        $arr = [10, 20, 30, 40, 50];

        $nomes  = ["João", "Maria", "José"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create(){
        return view('events.create');
    }
}
