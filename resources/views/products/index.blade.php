@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Produtos</h1>
    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar Novo Produto</a>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço (R$)</th>
                <th scope="col">Criado em</th>
                <th scope="col">Atualizado em</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
