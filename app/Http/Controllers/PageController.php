<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contato()
    {
        $email="contato@gmail.com";
        $telefone="(38) 3742-0000";
        return view('contato')->with('email',$email)->with('telefone',$telefone);
    }
    public function sobre()
    {
        $sobre="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas beatae fuga nam alias aspernatur ullam. Porro esse fugit facere rerum.";

        return view('sobre')->with('sobre',$sobre);
    }
    public function home()
    {
        $conteudo="Projeto 1 Evaldo Junio Macedo de Souza";
        return view('home')->with('conteudo', $conteudo);

    }
}
