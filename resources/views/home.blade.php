@extends('layouts.app')

@section('content')
    <head>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
    <section id="sideMenu">
        <nav>
            <a href="#" id="it" class="active"><i class="fa fa-book" aria-hidden="true"></i>livres</a>
            <a href="#" id="it" ><i class="fa fa-object-group" aria-hidden="true"></i>categories</a>
            <a href="#" id="it" ><i class="fa fa-home" aria-hidden="true"></i>stock</a>
            <a href="#" id="it" ><i class="fa fa-money" aria-hidden="true"></i>ventes</a>
            <a href="#" id="it" ><i class="fa fa-percent" aria-hidden="true"></i>statistiques</a>
            <a href="#" id="it" ><i class="fa fa-user" aria-hidden="true"></i>profil</a>
        </nav>
    </section>
    </body>
@endsection
