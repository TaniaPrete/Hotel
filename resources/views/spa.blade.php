@extends('layouts.app')

@section('title', 'La nostra SPA')

@section('content')
<section id="spa">
    <h1>La nostra SPA</h1>
    <p>Vivi un'esperienza unica nella nostra SPA, dove ogni trattamento è pensato per il tuo benessere.</p>
 <!-- Galleria immagini SPA -->
 <div class="spa-gallery">
    <h2>Scopri la nostra SPA</h2>
    <div class="spa-images">
        <img src="{{ asset('images/spa.webp') }}" alt="Spa Interno" class="spa-image">
        <img src="{{ asset('images/the.webp') }}" alt="Spa Relax" class="spa-image">
    </div>
</div>





    
    <div class="spa-package">
        <h3>Pacchetto Relax</h3>
        <p>Un trattamento rilassante per mente e corpo. Include sauna, massaggio e accesso alla piscina.</p>
        <p><strong>€120</strong> per 2 ore</p>
    </div>
    
    <div class="spa-package">
        <h3>Pacchetto Benessere</h3>
        <p>Goditi un'esperienza completa con trattamenti viso, corpo e accesso illimitato alla SPA per tutta la giornata.</p>
        <p><strong>€250</strong> per giornata intera</p>
    </div>

    <div class="spa-package">
        <h3>Pacchetto Romantico</h3>
        <p>Fuga romantica con trattamento per coppie e accesso privato alla SPA. Champagne incluso.</p>
        <p><strong>€350</strong> per 4 ore</p>
    </div>

   

    <a href="{{ route('contact') }}" class="cta-button">Prenota Ora</a>
</section>

<style>
    .spa-gallery {
        text-align: center;
        margin-top: 50px;
    }

    .spa-images {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .spa-image {
        max-width: 45%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    
</style>
@endsection
