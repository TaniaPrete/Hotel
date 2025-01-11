@extends('layouts.app')

@section('title', 'Prenotazione')

@section('content')
<section id="booking" class="py-5">
    <h2 class="text-center">Prenotazione</h2>
    <div class="container">
        <form action="{{ route('confirm_booking') }}" method="POST" class="booking-form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="check_in">Check-in</label>
                    <input type="date" id="check_in" name="check_in" value="{{ $check_in }}" required>
                </div>
                <div class="col-md-6">
                    <label for="check_out">Check-out</label>
                    <input type="date" id="check_out" name="check_out" value="{{ $check_out }}" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label for="room_type">Tipo di Camera</label>
                    <select id="room_type" name="room_type" required>
                        <option value="standard">Standard</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label for="comfort">Confort</label>
                    <select id="comfort" name="comfort" required>
                        <option value="basic">Basic</option>
                        <option value="comfort">Comfort</option>
                        <option value="luxury">Luxury</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Conferma Prenotazione</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
