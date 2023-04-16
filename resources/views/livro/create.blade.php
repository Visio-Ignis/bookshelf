@extends('base')

@section('title', 'Bookshelf - Lista de Livros')

@section('content')

<section style="margin: 3rem">
    <form class="row g-3" method="post" action="{{ route('bookshelf.livros.store') }}">
        @csrf
        <h3 class="h3">Cadastrar novo livro</h3>
        <div class="col-md-6">
          <label for="inputNome" class="form-label">Nome do livro:</label>
          <input type="text" class="form-control" id="inputNome" name="nome">
        </div>

        <div class="col-md-6">
            <label for="inputQtdPaginas" class="form-label">Quantidade de Páginas:</label>
            <input type="number" class="form-control" id="inputQtdPaginas" name="qtd_paginas">
        </div>

        <div class="col-12">
          <label for="inputAutor" class="form-label">Autor:</label>
          <input type="text" class="form-control" id="inputAutor" name="autor">
        </div>
        <div class="col-md-6">
          <label for="inputIsbn" class="form-label">ISBN:</label>
          <input type="text" class="form-control" id="inputIsbn" name="isbn">
        </div>
        <div class="col-md-6">
            <label for="inputGenero" class="form-label">Gênero:</label>
            <input type="text" class="form-control" id="inputIsbn" name="genero">
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
</section>

@endsection

