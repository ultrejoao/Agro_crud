<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Adicionar Novo Produto</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group mb-4">
            <label for="name" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome do produto" required>
        </div>
        <div class="form-group mb-4">
            <label for="description" class="form-label">Detalhes do Produto</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descreva o produto" required></textarea>
        </div>
        <div class="form-group mb-4">
            <label for="price" class="form-label">Valor (R$)</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Digite o preço" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar Produto</button>
    </form>
</div>
@endsection

