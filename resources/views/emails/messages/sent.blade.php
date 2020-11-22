@component('mail::message')
# New message received from fjcolon.com

- Name: {{ $message->name }}
- email: {{ $message->email }}
- Subject: {{ $message->subject }}
- Message: {{ $message->message }}

@endcomponent
