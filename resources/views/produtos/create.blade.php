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
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="title">Marca:</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca" required>
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
        <a href="\produtos" class="btn btn-primary"><< Voltar</a>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('#price').mask('#.##0,00', {reverse: true});
    });
</script>
@endsection