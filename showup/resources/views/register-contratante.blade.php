@extends('layouts.master')

@section('content')
    <form action="{{route('create-artista')}}" method="POST">
        <label for="cpf">CPF:</label>
        <input type="text" placeholder="Cpf" name="cpf"/>
        <label for="nome">Nome:</label>
        <input type="text" placeholder="Nome" name="nome"/>
        <label for="cpf">CPF:</label>
        <input type="text" placeholder="Cpf" name="cpf"/>
        <label for="cpf">CPF:</label>
        <input type="text" placeholder="Cpf" name="cpf"/>

        <input type="submit" value="Cadastrar"/>
    </form>
@endsection