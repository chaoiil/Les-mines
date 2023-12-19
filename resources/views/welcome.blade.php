@extends('layouts.head')

@extends('layouts.app')

@section('title', 'Les carrières')

@section('content')
<li><a href="/concessions"> Les concession</i></a></li>
<li><a href="/concession/create"></i> Creer une concession</a></li>
<div class ='container'>
 <div class="text-container">
<h1>Site minier de Pont-Péan</h1>
    <p>Au cœur de l'histoire minière de la région, le site minier de Pont-Péan est une vitrine du
        patrimoine industriel qui a façonné notre communauté depuis des décennies. Notre équipe
        d'administration est fière de jouer un rôle clé dans la préservation, la gestion et la mise 
        en valeur de ce site historique.<br>
        Notre mission est de préserver l'authenticité du site minier, de garantir sa sécurité et de
        fournir des informations éducatives et culturelles aux visiteurs. À travers une gestion
        responsable, nous nous engageons à maintenir la mémoire de l'exploitation minière vivante et
        accessible à tous.
    </p>
</div>
<img src="mine-solcy.webp" alt="les mines">
@endsection