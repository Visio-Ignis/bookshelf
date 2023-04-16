<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(){

        $livros = Livro::all();
        return view('livro.index', ['livros' => $livros]);
    }

    public function edit($id){

    }

    public function searchBook(Request $request){
        $livro = Livro::where('nome', $request->nome)->get();

        return redirect()->route('bookshelf.livros.edit', ['livro' => $livro]);
    }

    public function create(){
        return view('livro.create');
    }

    public function store(Request $request){

        Livro::create($request->all());

        return redirect()->route('bookshelf.livros.index');
    }
}
