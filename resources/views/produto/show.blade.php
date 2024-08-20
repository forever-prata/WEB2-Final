@extends('layouts.app')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h1 style="text-align: center; margin-bottom: 20px;">Detalhes do Produto</h1>
        <p><strong>Nome:</strong> {{ $produto->nome }}</p>
        <p><strong>Valor:</strong> {{ $produto->valor }}</p>
        <p><strong>Categoria:</strong> {{ $produto->categoria }}</p>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('produto.index') }}" class="btn btn-primary" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                Voltar para a lista de produtos
            </a>
        </div>
    </div>
@endsection
