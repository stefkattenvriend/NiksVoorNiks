@extends ('layout')
@section('stylesheets')
    <link rel="stylesheet" href="CSS/aboutUs.css">
@endsection
@section('title')
    CMS
@endsection
@section ('content')
    <div class="cms">
        <div class="sidemenu">
            <a class="btn" href="/cms">Hoofdpagina</a>
            <a class="btn" href="/cms_overons">Over ons</a>
            <a class="btn" href="/cms_contact">Contact</a>
        </div>
        <div class="aboutUs">
            <h1>Contact Pagina</h1>
            <br>
            <b>{{$information->where('naam', 'Contact')->first()->titel}}</b>
            <br>
            <br>
            <p style="white-space: pre-line ">{{$information->where('naam', 'Contact')->first()->informatie}}</p>
            <br>
            <a class="btn" href="/cms/edit/{{$information->where('naam', 'Contact')->first()->naam}}">Aanpassen</a>
        </div>
    </div>
@endsection
