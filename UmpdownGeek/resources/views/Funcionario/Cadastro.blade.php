@extends('layouts.main')

@section('title', 'Cadastro')


@section('content')
{{--action com a mesma rota do post no arquivo de rotas --}}
<form action="/funcio" method="POST"   >
    @csrf
    <label for="Name">Nome:</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nome dos produtos">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection