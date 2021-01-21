@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <h1 class="text-center">Tutti i prodotti</h1>
            </div>
            <div class="col-6" style="display: flex;align-items: flex-end;justify-content: flex-end;">
                <a href="{{route('products.create')}}">Clicca qui per inserire un nuovo prodotto</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td><a href="{{route('products.show', ['product' => $product->id])}}" class="btn btn-info">Dettagli</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('page-title', 'Products - Laravel Crud')
