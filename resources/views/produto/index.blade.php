@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>
    <a href="{{ route('produto.create') }}" style="display: inline-block; margin-bottom: 20px;">
        <button type="button">Cadastrar Novo Produto</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->valor }}</td>
                <td>{{ $produto->categoria }}</td>
                <td>
                    <a href="{{ route('produto.show', $produto->id) }}">Ver</a>
                    <a href="{{ route('produto.edit', $produto->id) }}">Editar</a>
                    <form action="{{ route('produto.destroy', $produto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection