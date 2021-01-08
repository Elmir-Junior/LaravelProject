@extends('layout.main')

@section('title', 'Cadastra um novo produto')

@section('content')

<form action="{{ route('registrar_produto') }}" method="POST">
    @csrf
    <label for="">Nome</label> <br>
    <input type="text" name="nome"> <br>
    <label for="">Custo</label> <br>
    <input type="text" name="custo"> <br>
    <label for="">Preço</label> <br>
    <input type="text" name="preco"> <br>
    <label for="">Quantidade</label> <br>
    <input type="text" name="quantidade"> <br>
    <button>Salva</button>
</form>

@endsection