@component('mail::message')
# Formulario de contacto:

<strong>Nombre: </strong> {{$data['name']}} <br>
<strong>Email: </strong> {{$data['email']}} <br>
<strong>Asunto: </strong> {{$data['subject']}} <br>

<strong>Mensaje:</strong> 

{{$data['message']}}

Gracias,<br>
{{$data['name']}}
@endcomponent
