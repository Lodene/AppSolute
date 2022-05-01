
<header>
    <div><a href="{{ route('home') }}">Accueil</a></div>
    <div><a href="{{ route('allUser') }}">Liste des utilisateurs</a></div>
    @if (Auth::user() == null)
        <div><a href="{{ route('connexion') }}">Connexion</a></div>
    @else
        <div><a href="{{ route('deco') }}">Deconnexion</a></div>
    
    @endif
    
</header>