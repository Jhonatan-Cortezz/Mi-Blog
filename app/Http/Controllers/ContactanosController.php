<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
    //metodo para mostrar el formulario de contacto
    public function index(){
        return view('contactanos.index');
    }

    // metodo para procesar el formulario y enviar el correo
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        // le paso toda la info del formulario al construcutor de mailable
        $correo = new ContactanosMailable($request->all());

        /* le paso el correo aquien voy a mandar*/
        Mail::to('jhonatancortez708@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');/* el with es para pasar una variable de sesion */
    }
}
