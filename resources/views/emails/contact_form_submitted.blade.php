@component('mail::message')
# Nuevo mensaje de contacto

**Nombre:** {{ $data['full_name'] }}
**Teléfono:** {{ $data['phone'] }}
**Email:** {{ $data['email'] }}

**Mensaje:**
{{ $data['message'] }}

Gracias,
{{ config('app.name') }}
@endcomponent
