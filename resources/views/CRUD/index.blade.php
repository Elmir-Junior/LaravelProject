<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
</div>
</body>
</html>