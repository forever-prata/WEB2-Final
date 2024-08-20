@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; margin-bottom: 20px;">Lista de Produtos</h1>
    @if(Auth::check() && Auth::user()->tipoUsuario != 2)
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{ route('produto.create') }}" style="text-decoration: none;">
                <button type="button" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.2); transition: background-color 0.3s;">
                    Cadastrar Novo Produto
                </button>
            </a>
        </div>
    @endif
    <div style="display: flex; justify-content: center;">
        <table style="border-collapse: collapse; width: 80%; background-color: #f9f9f9; text-align: center;">
            <thead>
                <tr style="background-color: #4CAF50; color: white;">
                    <th style="padding: 10px; border: 1px solid #ddd;">Nome</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Valor</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Categoria</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $produto->nome }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $produto->valor }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $produto->categoria }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <a href="{{ route('produto.show', $produto->id) }}" style="text-decoration: none;">
                            <button type="button" style="background-color: #007bff; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.2); margin-right: 10px;">
                                Ver
                            </button>
                        </a>
                        @if(Auth::check() && Auth::user()->tipoUsuario != 2)
                            <a href="{{ route('produto.edit', $produto->id) }}" style="text-decoration: none;">
                                <button type="button" style="background-color: #ffc107; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.2); margin-right: 10px;">
                                    Editar
                                </button>
                            </a>
                            <form action="{{ route('produto.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este produto?')" style="background-color: #f44336; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
                                    Deletar
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
