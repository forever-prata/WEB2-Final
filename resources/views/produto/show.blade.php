@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>
    <p>Nome: {{ $produto->nome }}</p>
    <p>Valor: {{ $produto->valor }}</p>
    <p>Categoria: {{ $produto->categoria }}</p>
@endsection