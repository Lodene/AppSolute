@extends('layouts.app')

@section('content')
    <div class="">
        <div>
        <h1 id="loginbigtitle">Connexion </h1>

        <div>
            <form id="" method="post" action="{{ url("/connectionUser") }}">
                @csrf
                <div>
                    <label>Votre email :</label> 
                    <input class="" type ="email" name="email" required />
                </div>

                <div>
                    <label>Votre mot de passe :</label>
                    <input class="" type="password" name="password" required />
                </div>
                <input class="" type="submit" value="Connexion">
            </form>
        </div>
        <p> <a href="{{ route('register') }}">Vous n'avez pas de compte ?</a><br /></p>
        </div>
    </div>

@endsection
