@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Nuovo prodotto</h1>
                <form method="POST" action="{{route('products.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Nome prodotto</label>
                        <input type="text" name="name" class="form-control" placeholder="Tubo">
                    </div>
                    <div class="form-group">
                        <label>Prezzo prodotto</label>
                        <input type="text" name="price" class="form-control" placeholder="20">
                    </div>
                    <div class="form-group">
                        <label>Descrizione prodotto</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Crea prodotto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-title', 'Products - Laravel Crud')
