@extends ('layout')
@section('title')
bekijk
@endsection
@section('stylesheets')
<link rel="stylesheet" href="/CSS/transactionView.css">

@endsection
@section ('content')
<div class="transactionWrapper">
<div class="paymentInfo">
<h3>Transactie Nummer: {{$transaction->id}}</h3><br>
<p>Transactie aangemaakt door: <strong>{{$transaction->zender_email}}</strong></p><br>
<p>Transactie ontvanger: <strong>{{$transaction->ontvanger_email}}</strong></p><br>
@if($transaction->bedrag < 0)
<p>te betalen bedrag voor {{$transaction->ontvanger_email}}: <strong>{{$transaction->bedrag}} niksen</strong></p><br>
@else
<p>te ontvangen bedrag door {{$transaction->ontvanger_email}}: <strong> {{$transaction->bedrag}} niksen</strong></p><br>
@endif
<p>Transactie beschrijving: <strong>{{$transaction->beschrijving}}</strong></p><br>
@if($transaction->geaccepteerd == 0)
<p>deze transactie is nog niet geaccepteerd door de ontvanger</p><br>
<p>Als de ontvanger deze transactie accepteerd word het verzochte bedrag van zijn account afgeschreven</p><br>
@if($user->email == $transaction->ontvanger_email)
<a class="btn">Accepteer transactie</a><br>
@else
<p>Alleen de ontvanger is gemachtigt om de transactie te accepteren</p><br>
@endif
@else
    <p>Transactie status: <strong>geaccepteerd</strong></p><br>

@endif
<h3>Transactie Datum: {{$transaction->datum}}</h3>
</div>
</div>

        
      
     

   
@endsection