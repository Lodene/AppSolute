@extends('layouts.app')

@section('content')
<div class="utilisateurs all">
    <h1> Liste des Utilisateurs </h1>  
    <div class="utilisateurs allpost">
        @if ($posts->count() > 0)
            @foreach($posts as $post)
                <div class="utilisateurs post">
                    <?php /* 
                    <a href="{{ route('user', ['id' => $post->id])}}">{{ $post->name }}</a>
                    */?>
                    <a href="{{ route('user', ['id' => $post->id]) }}"> {{ $post->name }}</a>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection