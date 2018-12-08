@component('mail::message')
# Dades de la incidència

- **Títol**: {{ $incident->subject }}

# Descripció

{{ $incident->description }}

Atentament,<br>
Manteniment d'informàtica {{ config('app.name') }}
@endcomponent
