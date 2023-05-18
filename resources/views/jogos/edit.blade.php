@extends('layouts.app')

@section('title', 'Edição')

@section('content')
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <form action="{{route('jogos-update', ['id'=>$jogos->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{$jogos->nome}}" placeholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite a categoria do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Ano de criação:</label>
                    <input type="number" class="form-control" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Ano de criação...">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{$jogos->valor}}" placeholder="Digite o valor do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Atualizar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
@endsection