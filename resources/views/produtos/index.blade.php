@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<div class="container mt-5">
<table class="table table-borderless table-hover table-sm table-striped">
  <thead class='thead-light'>
    <tr>
      <th scope="col">#</th>
      <th scope="col">@sortablelink('name', 'Nome')</th>
      <th scope="col">@sortablelink('brand', 'Marca')</th>
      <th scope="col">@sortablelink('price', 'Preço')</th>
      <th scope="col">@sortablelink('quantity', 'Qtd')</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr class='table-row'>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->brand }}</td>
      <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
      <td>{{ $product->quantity }}</td>
      <td>
        <a href="/produtos/{{ $product->id }}" ><ion-icon name="search-circle-outline" title='Vizualizar'></ion-icon>Vizualizar</a>|
        <a href="/produtos/edit/{{ $product->id }}"><ion-icon name="create-outline" title='editar'></ion-icon>Editar</a>|
        <a href="/produtos/addQuantity/{{ $product->id }}"><ion-icon name="enter-outline"></ion-icon>Entrada</a>|
        <a href="/produtos/delete/{{ $product->id }}"><ion-icon name="trash-outline" title='Excluir'></ion-icon>Excluir</a>|
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<a href="\produtos\create" class="btn btn-primary">Novo Produto</a>
<div class="d-flex justify-content-center">
    {!! $products->appends(\Request::except('page'))->render() !!}
</div>
 
</div>

@endsection