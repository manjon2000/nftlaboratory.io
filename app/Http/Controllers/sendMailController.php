<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'lastName'      => 'required|string',
            'email'         => 'required|email',
            'telefono'      => 'required',
            'message'       => 'required|string'
        ]);

        $messageMail = new Contact($request->all());
        Mail::to('info@nftlaboratory.io','Formulario de contacto')->send($messageMail);
        return redirect()
                -> route('contact')
                    -> with('success', 'Mensaje enviado correctamente');
    }
}
