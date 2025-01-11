@extends('layouts.app')

@section('title', 'SPA')

@section('content')
<section id="spa" class="py-5">
    <h2 class="text-center mb-4">Benvenuti nella nostra SPA</h2>
    <div class="container">
        <p class="text-center">Scopri i nostri pacchetti benessere e rilassati nel nostro centro esclusivo.</p>
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Massaggio Relax</h3>
                <p>Rilassati con un massaggio rigenerante. <br> Prezzo: €50</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Trattamento Viso</h3>
                <p>Un trattamento che valorizza la tua bellezza. <br> Prezzo: €70</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Accesso Completo alla SPA</h3>
                <p>Goditi tutti i servizi esclusivi della nostra SPA. <br> Prezzo: €100</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('spa-booking') }}" class="btn btn-primary" style="background-color: #013A3A; color: white; border-radius: 5px; padding: 10px 20px;">Prenota ora</a>
        </div>
    </div>
</section>
@endsection
