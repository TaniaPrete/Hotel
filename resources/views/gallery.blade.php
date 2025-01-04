@extends('layouts.app')

@section('title', 'Galleria Fotografica')

@section('content')
<section id="gallery" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5">Galleria Fotografica</h1>
        <div class="row g-3">
            <!-- Colonna 1 -->
            <div class="col-md-4">
                <a href="{{ asset('images/photo1.jpg') }}" target="_blank">
                    <img src="{{ asset('images/hotel1.jpg') }}" class="img-fluid rounded shadow" alt="Foto 1">
                </a>
            </div>
            <!-- Colonna 2 -->
            <div class="col-md-4">
                <a href="{{ asset('images/photo2.jpg') }}" target="_blank">
                    <img src="{{ asset('images/hotel2.jpg') }}" class="img-fluid rounded shadow" alt="Foto 2">
                </a>
            </div>
            <!-- Colonna 3 -->
            <div class="col-md-4">
                <a href="{{ asset('images/photo3.jpg') }}" target="_blank">
                    <img src="{{ asset('images/hotel3.jpg') }}" class="img-fluid rounded shadow" alt="Foto 3">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/photo3.jpg') }}" target="_blank">
                    <img src="{{ asset('images/hotel4.webp') }}" class="img-fluid rounded shadow" alt="Foto 3">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/photo3.jpg') }}" target="_blank">
                    <img src="{{ asset('images/hotel5.jpeg') }}" class="img-fluid rounded shadow" alt="Foto 3">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/photo3.jpg') }}" target="_blank">
                    <img src="{{ asset('images/hotel6.jpg') }}" class="img-fluid rounded shadow" alt="Foto 3">
                </a>
            </div>
            <!-- Aggiungi altre immagini qui -->
        </div>
    </div>
</section>
@endsection
