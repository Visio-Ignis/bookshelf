@extends('base')

@section('title', 'Bookshelf - Lista de Livros')

@section('content')

<table class="table">
    <tr>
        <thead class="table-dark">
            <td>Nome</td>
            <td>Páginas</td>
            <td>Autor</td>
            <td>ISBN</td>
            <td>Gênero</td>
        </thead>
    </tr>
    <tbody>
        @foreach ($livros as $livro )
        <tr>
            <th>{{ $livro->nome }}</th>
            <th>{{ $livro->qtd_paginas }}</th>
            <th>{{ $livro->autor }}</th>
            <th>{{ $livro->isbn }}</th>
            <th>{{ $livro->genero }}</th>
        </tr>
    @endforeach
    </tbody>
  </table>


@endsection

