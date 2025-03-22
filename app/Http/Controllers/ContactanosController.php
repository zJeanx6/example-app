<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosControMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::to('jeannfacts@gmail.com')
            ->send(new ContactanosControMailable($request->all()));
        // session()->flash('info', 'mensaje enviado con exito');
        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');
    }
}
