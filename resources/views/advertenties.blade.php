@extends ('layout')
@section('title')
    home
@endsection
@section ('stylesheets')
    <link rel="stylesheet" href="CSS/pagination.css">

@endsection
@section ('content')

    <div class="articles">
        <div class="filters">
            <form method="post" action="/advertenties1">
            @csrf
                <label class="title" for="categorie">Categorie:</label><br>
                <select name="selectCategory" id="selectCategory">
                    <option value="" disabled selected hidden>Kies een categorie...</option>
                    <option value="">Geen categorie</option>
                    @foreach($categories as $category)
                        <option name="selectedCategory" id="selectedCategory" value="{{$category->naam}}">{{$category->naam}}</option>
                    @endforeach
                </select><br>


                <label class="title">Vraag en Aanbod:</label><br>
                <input type="checkbox" id="gevraagd" name="gevraagd">
                <label for="gevraagd">Gevraagd</label>

                <input type="checkbox" id="aangeboden" name="aangeboden">
                <label for="aangeboden">Aangeboden</label><br>


                <label class="title" for="locatie">Locatie:</label><br>
                <input type="text" id="locatie" name="locatie" placeholder="Typ hier een plaats of postcode..."><br>


                <label class="title">Prijs:</label><br>
                <label for="minprijs">Min.</label>
                <input type="number" id="minPrice" name="minPrice">

                <label for="maxprijs">Max.</label>
                <input type="number" id="maxPrice" name="maxPrice"><br>


                <label class="title" for="groep">Groep:</label><br>
                <select id="selectGroup" name="selectGroup">
                    <option value="" disabled selected hidden>Kies een groep...</option>
                    <option value="">Geen groep</option>
                    @foreach($groups as $group)
                        <option id="selectedGroup" value="{{$group->naam}}">{{$group->naam}}</option>
                    @endforeach
                </select><br>
            <input class="btn"type="submit" value="filter">
            </form>

            <a class="addad" href="advertentiePlaatsen">
                Klik hier om zelf een advertentie te plaatsen
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>

        <div class="article-list">
            @foreach($advertenties as $advertentie)
                <a class="article" href="/advertentieDetails/{{ $advertentie->id }}" id="ad1">
                    <img src="{{$advertentie->foto ?? 'https://i.imgur.com/LM7EA7m.jpg'}}">
                    <div class="addetails">
                        <p class="adtype">


                            @if($advertentie->vraag == 0)
                                Aangeboden
                            @else
                                Gevraagd
                            @endif

                        </p><br>
                        <h3 class="adtitle">{{ $advertentie->titel }}</h3>
                        <p class="addescr">{{ $advertentie->beschrijving }}</p>
                        <i class="fa fa-map-marker adloc"><label> Rosmalen</label></i>
                        <label class="adprice" for="ad1">{{ $advertentie->prijs}} Niks</label>
                    </div>
                </a>
            @endforeach
            {{$advertenties->links("pagination::bootstrap-4")}}
        </div>
    </div>






@endsection
