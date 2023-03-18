@extends('layouts.main')

@section('title', 'Cadastro')


@section('content')
<form action="/cadastro" method="Post">
    <label for="Nome">Nome:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Nome dos produtos">
</form>
@endsection