@extends("layout.main")
@section("title", "Crudzao")

@section("content")

Produtos e Cadastro

<div class="row">
    <div class="col-mds-12">
    <br />
    <h3 align="center">Dados dos Cadastro</h3>
    <br />
    <table class="table table-bordered">
    <tr> 
        <th>Nome</th>
        <th>Idade</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    @foreach($cadastro as $row)
    <tr>
        <td>{{$row['nome']}}</td>
        <td>{{$row['idade']}}</td>
        <td>{{$row['created_at']}}</td>
        <td>{{$row['updated_at']}}</td>
        </td>
    </tr>
    @endforeach
<br />
<br />
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


@endsection