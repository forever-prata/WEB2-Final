@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action="{{ route('produto.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="text" id="valor" name="valor">
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection