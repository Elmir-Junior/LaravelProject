@extends("layout.main")
@section("title", "Crudzao")

@section("content")
<form action="{{ route('CadastroController@registrar_cadastro')}}" method="POST">
    @csfr
    <label for="">nome</label>
    <input type="text" name="nome"> <br/>
    <label for=""> idade</label> <br/>
    <input type="text" name="idade"> <br/>  
    <button>Salvar</button>
</form>
@endsection