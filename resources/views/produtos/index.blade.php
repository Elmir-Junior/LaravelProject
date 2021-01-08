@extends('layout.main')
@section('title', 'Ver Produtos')

@section('content')

<div class="row">
    <div class="col-mds-12">
    <br />
    <h3 align="center">Dados dos Produtos</h3>
    <br />
    <table class="table table-bordered">
    <tr> 
        <th>Nome</th>
        <th>Custo</th>
        <th>Preco</th>
        <th>Quantidade</th>
    </tr>
    @foreach($produto as $row)
    <tr>
        <td>{{$row['nome']}}</td>
        <td>{{$row['custo']}}</td>
        <td>{{$row['preco']}}</td>
        <td>{{$row['quantidade']}}</td>
        </td>
    </tr>


    @endforeach
    </div>

@endsection