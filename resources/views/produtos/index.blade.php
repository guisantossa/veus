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
      <td>{{ $product->price }}</td>
      <td>{{ $product->quantity }}</td>
      <td>
        <a href="/produtos/{{ $product->id }}"><ion-icon name="search-circle-outline"></ion-icon></a>
        <a href="/produtos/edit/{{ $product->id }}"><ion-icon name="create-outline"></ion-icon></a>
        <a href="/produtos/delete"><ion-icon name="trash-outline"></ion-icon></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<a href="\produtos\create" class="btn btn-primary">Novo Produto</a>
<div class="d-flex justify-content-center">
    {!! $products->appends(\Request::except('page'))->render() !!}
</div>

<div id="event-create-container" class="col-md-6 offset-md-3">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Procurar Produtos</li>
      </ol>
  </nav>
  <form action="/produtos" method="GET" class="form-horizontal">
    <div class="form-group">
      <label for="title">Produto:</label>
      <input type="text" class="form-control" id="q" name="q" placeholder="Produto">
    </div>
    <input type="submit" class="btn btn-primary" value="Procurar">
  </form>
</div>

  
</div>

@endsection