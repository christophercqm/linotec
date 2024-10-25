<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Contact/Create'); // Asegúrate de que la vista esté configurada correctamente
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15', // Ajusta según el formato que necesites
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Si la validación falla, retornar a la vista con errores
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Crear un nuevo contacto
        $contact = Contact::create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirigir de vuelta a la vista con un mensaje de éxito
        return redirect()->route('contact.create')->with('success', 'Formulario enviado con éxito');
    }
}
