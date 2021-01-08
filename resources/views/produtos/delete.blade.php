@extends('layout.main')
@section('title', 'Excluir um produto')

@section('content')

<form action="{{ route('excluir_produto', ['id'=> $produto->id]) }}" method="POST">
    @csrf
    <label for="">Tem certeza que deseja exluir esse produto?</label> <br>
    <input type="text" name="nome" value="{{ $produto->nome }}"> <br>
    <button>Sim</button>
</form>

@endsection