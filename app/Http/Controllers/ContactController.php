<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Exception;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validación de los datos del formulario
            $validated = $request->validate([
                'full_name' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:1000',
            ]);

            // Crear un nuevo contacto en la base de datos
            Contact::create($validated);

            // Enviar el correo
            Mail::to('destinatario@ejemplo.com')->send(new ContactFormSubmitted($validated));

            // Redirigir a la raíz con un mensaje de éxito
            return Redirect::route('home')->with('success', 'Tu mensaje ha sido enviado con éxito!');

        } catch (Exception $e) {
            // Registrar la excepción en los logs
            Log::error('Error al enviar el formulario de contacto: ' . $e->getMessage(), [
                'exception' => $e,
                'data' => $request->all(),
            ]);

            // Redirigir a la raíz con un mensaje de error
            return Redirect::route('home')->with('error', 'Ocurrió un error al enviar el mensaje. Por favor, intenta nuevamente.');
        }
    }
}
