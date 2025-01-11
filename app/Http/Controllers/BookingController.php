<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Mostra la pagina di selezione della prenotazione.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $check_in = $request->input('check_in');
        $check_out = $request->input('check_out');

        return view('booking.index', compact('check_in', 'check_out'));
    }

    /**
     * Conferma la prenotazione e mostra i dettagli.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function confirm(Request $request)
    {
        // Recupera i dati della prenotazione dal form
        $data = $request->validate([
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'room_type' => 'required|string',
            'comfort' => 'required|string',
        ]);

        return view('booking.confirm', compact('data'));
    }
}
