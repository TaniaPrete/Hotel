@extends('layouts.app')

@section('title', 'I nostri Servizi')

@section('content')
<section id="services">
    <h1>I nostri Servizi</h1>
    <div class="service-item">
        <h3>1. Camere Accoglienti</h3>
        <p>Offriamo camere confortevoli, dotate di tutti i comfort moderni.</p>
    </div>
    <div class="service-item">
        <h3>2. Wi-Fi Gratuito</h3>
        <p>Connettiti alla nostra rete Wi-Fi gratuita in tutta la struttura.</p>
    </div>
    <div class="service-item">
        <h3>3. Colazione Inclusa</h3>
        <p>Gusta una deliziosa colazione inclusa nel tuo soggiorno.</p>
    </div>
    <div class="service-item">
        <h3>4. SPA di Lusso</h3>
        <p>Rilassati nella nostra SPA e scopri i pacchetti benessere pensati per te.</p>
        <a href="{{ route('spa') }}" class="cta-button">Scopri la SPA</a>
    </div>
</section>
@endsection
