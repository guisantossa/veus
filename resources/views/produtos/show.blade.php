@extends('layouts.main')

@section('title', 'Produtos: $product->name')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Alterar de Produtos</li>
    </ol>
    </nav>
        <div class="form-group">
            <label for="title">Nome:</label>
            {{ $product->name }}
        </div>
        <div class="form-group">
            <label for="title">Marca:</label>
            {{ $product->brand }}
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            {{ $product->price }}
        </div>
        <div class="form-group">
            <label for="title">Quantidade:</label>
            {{ $product->quantity }}
        </div>
    </form>
</div>
<a href="\produtos" class="btn btn-primary"><< Voltar</a>

@endsection