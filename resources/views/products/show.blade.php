@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Dettagli {{$product->name}}</h1>
                <ul>
                    <li>Prezzo: {{$product->price}}</li>
                    <li>Descrizione: {{$product->description}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('page-title', 'Detail - Laravel Crud')
