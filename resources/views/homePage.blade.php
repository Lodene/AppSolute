@extends('layouts.app')

@section('content')
    @if (Auth::user() == null)
        <h1> Bonjour ! Hésite pas à te connecter / t'inscrire pour voir tes signes ! </h1>
    @else 
        <h1>Bonjour {{ Auth::user()->name }}</h1>
    @endif
@endsection