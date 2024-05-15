@component('mail::message')
    <p>Hello <b>{{ $contact->name ?? ''}}</b>,</p>
    <p>Doctor <b>{{ $contact->doctor ?? ''}}</b>,</p>
    <p>Email: <b>{{ $contact->email ?? ''}}</b>,</p>
    <p>Number: <b>{{ $contact->phone_number ?? ''}}</b>,</p>
    <p>Query: <b>{{ $contact->message ?? ''}}</b>,</p>
    <p>Thank you for choosing Charterderm. We value your security and appreciate your cooperation.</p>
    <p>Best regards</p>
    <p><b>Charterderm Team</b></p>
@endcomponent
