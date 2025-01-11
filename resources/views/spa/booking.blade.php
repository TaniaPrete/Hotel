@extends('layouts.app')

@section('title', 'Prenotazioni Spa')

@section('content')
<section id="spa-booking" class="py-5">
    <h2 class="text-center">Prenota il tuo relax</h2>
    <div class="container">
        <form action="{{ route('confirm-spa-booking') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Orario</label>
                <input type="time" id="time" name="time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="service" class="form-label">Servizio</label>
                <select id="service" name="service" class="form-select" required>
                    <option value="massaggio">Massaggio</option>
                    <option value="trattamento">Trattamento Viso</option>
                    <option value="spa">Accesso Spa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Conferma Prenotazione</button>
        </form>
    </div>
</section>
@endsection
