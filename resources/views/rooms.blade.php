@extends('layouts.app')

@section('title', 'Camere Eleganti')

@section('content')
<section id="rooms" class="py-5">
    <h2 class="text-center mb-4">Camere Eleganti</h2>
    <div class="container">
        <p class="text-center">Scopri le nostre camere progettate per offrirti il massimo comfort e lusso.</p>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/standard-room.jpg') }}" alt="Camera Standard" class="img-fluid mb-3">
                <h3>Camera Standard</h3>
                <p>Accogliente e moderna, ideale per un soggiorno breve. <br> Prezzo: €80/notte</p>
                <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #013A3A; color: white;">Prenota ora</a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/deluxe-room.jpg') }}" alt="Camera Deluxe" class="img-fluid mb-3">
                <h3>Camera Deluxe</h3>
                <p>Spaziosa e lussuosa, perfetta per coppie. <br> Prezzo: €120/notte</p>
                <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #013A3A; color: white;">Prenota ora</a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/suite.jpg') }}" alt="Suite" class="img-fluid mb-3">
                <h3>Suite</h3>
                <p>Il massimo del lusso per un'esperienza indimenticabile. <br> Prezzo: €200/notte</p>
                <a href="{{ route('booking') }}" class="btn btn-primary" style="background-color: #013A3A; color: white;">Prenota ora</a>
            </div>
        </div>
    </div>
</section>
@endsection
