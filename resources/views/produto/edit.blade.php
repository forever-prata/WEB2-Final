@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; margin-bottom: 20px;">Editar Produto</h1>
    <form action="{{ route('produto.update', $produto->id) }}" method="POST" style="max-width: 500px; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="nome" style="display: block; margin-bottom: 5px;">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="valor" style="display: block; margin-bottom: 5px;">Valor:</label>
            <input type="text" id="valor" name="valor" value="{{ $produto->valor }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="categoria" style="display: block; margin-bottom: 5px;">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="{{ $produto->categoria }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="text-align: center;">
            <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.2); transition: background-color 0.3s;">
                Salvar
            </button>
        </div>
    </form>
@endsection
