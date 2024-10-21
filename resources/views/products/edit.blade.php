@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="my-4">Atualizar Informações do Produto</h1>
            <form action="{{ route('products.update', $product->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-4">
                    <label for="name" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Insira o nome do produto" required>
                </div>
                <div class="form-group mb-4">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Atualize a descrição" required>{{ $product->description }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="price" class="form-label">Valor (R$)</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Digite o novo preço" required>
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
            </form>
        </div>
    </div>
</div>
@endsection

