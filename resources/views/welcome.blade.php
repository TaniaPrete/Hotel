@extends('layouts.app')

@section('title', 'Benvenuti')

@section('content')
<section id="hero" class="text-center py-5">
    <h1>Benvenuti in Hotel con Amore</h1>
    <p>Il tuo riposo non è più un problema</p>
    <a href="#services" class="btn btn-primary mt-3 cta-button">Scopri di più</a>
</section>

<section id="slideshow" class="my-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/hotel1.jpg') }}" class="d-block w-100" alt="Foto 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hotel2.jpg') }}" class="d-block w-100" alt="Foto 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hotel3.jpg') }}" class="d-block w-100" alt="Foto 3">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Precedente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Successiva</span>
        </button>
    </div>
    <div class="text-center mt-3">
        <a href="{{ route('gallery') }}" class="btn btn-secondary">Visita la Galleria</a>
    </div>
</section>

<section id="services" class="py-5">
    <h2 class="text-center">I nostri servizi</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Camere eleganti</h3>
                <p>Comfort e lusso nelle nostre stanze uniche.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Ristorazione raffinata</h3>
                <p>Cucina di alta qualità per ogni palato.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Spa e relax</h3>
                <p>Rilassati nel nostro centro benessere esclusivo.</p>
            </div>
        </div>
    </div>
</section>
@endsection
