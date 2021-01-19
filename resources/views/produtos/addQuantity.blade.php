@extends('layouts.main')

@section('title', 'Cadastro de Produtos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Adicionar Quantidade</li>
    </ol>
    </nav>
    <form action="/produtos/updateQuantity/{{ $product->id }}" method="POST" class="form-horizontal">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $product->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="title">Marca:</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca" value="{{ $product->brand }}" disabled>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="title">Quantidade atual:</label>
                <input type="hidden" id="quantity" name="quantity"  value="{{ $product->quantity }}">
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Qtd" value="{{ $product->quantity }}" disabled>
            </div>
            <div class="col">
                <label for="title">Entrada de Quantidade:</label>
                <input type="number" class="form-control" id="newquantity" name="newquantity" placeholder="Quantidade" required >
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar Quantidade">
        <a href="\produtos" class="btn btn-primary"><< Voltar</a>
    </form>
</div>
@endsection