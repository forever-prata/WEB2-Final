@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>
    <form action="{{ route('produto.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome }}">
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="text" id="valor" name="valor" value="{{ $produto->valor }}">
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="{{ $produto->categoria }}">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection