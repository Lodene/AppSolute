@extends('layouts.app')

@section('content')
<div class="user all">
    <h1> Bonjour {{ $post->name }}</h1>
    <div class="user date"><p>date de naissance : {{ $post->dateOfBirth }} </p></div>
    <div class="user signes">
        <div  class="user zodiaque">signe du zodiaque : {{ $post->SigneZodiaque }} </div>
        <div  class="user chinois">signe chinois : {{ $post->SigneChinois }} </div>
    </div>
</div>
@endsection