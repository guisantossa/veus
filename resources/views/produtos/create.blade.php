@extends('layouts.main')

@section('title', 'Cadastro de Produtos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Cadastro de Produtos</li>
    </ol>
    </nav>
    <form action="/produtos" method="POST" class="form-horizontal">
    @csrf
        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="title">Marca:</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca">
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço">
        </div>
        <div class="form-group">
            <label for="title">Quantidade:</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Qtd">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

@endsection