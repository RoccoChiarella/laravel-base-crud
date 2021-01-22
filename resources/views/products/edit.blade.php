@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Modifica prodotto</h1>
                <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name"
                        value="{{ $product->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name="price"
                        value="{{ $product->price }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <textarea name="description" rows="4"
                        class="form-control">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">
                            Salva vestito
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
