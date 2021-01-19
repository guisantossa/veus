@extends('layouts.main')

@section('title', 'Cadastro de Produtos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Alterar de Produtos</li>
    </ol>
    </nav>
    <form action="/produtos/update/{{ $product->id }}" method="POST" class="form-horizontal">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="title">Marca:</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca" value="{{ $product->brand }}" required>
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço" value="{{ number_format($product->price, 2, ',', '.') }}" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Alterar">
        <a href="\produtos" class="btn btn-primary"><< Voltar</a>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('#price').mask('#.##0,00', {reverse: true});
    });
</script>
@endsection