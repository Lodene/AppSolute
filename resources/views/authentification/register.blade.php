@extends('layouts.app')

@section('content')
    <div class="verticalcenter">
        <div>
        <h1 id="loginbigtitle">Inscription</h1>

        <div>
            <form id="loginform" method="post" action="{{ route('inscriptionUser') }}">
                @csrf
                <div>
                    <label>Votre email :</label> 
                    <input class="logininput" type ="email" name="mail" required />
                    <div class="bluebar"></div>
                </div>

                <div>
                    <label>Votre pseudo :</label> 
                    <input class="logininput" type ="pseudo" name="pseudo" required />
                    <div class="bluebar"></div>
                </div>

                <div>
                    <label>Votre date de naissance :</label> 
                    <input class="logininput" type ="date" name="date" required />
                    <div class="bluebar"></div>
                </div>

                <div>
                    <label>Votre mot de passe :</label>
                    <input class="logininput" type="password" name="password" required />
                    <div class="bluebar"></div>
                </div>

                <div >
                    <label>Confirmer votre mot de passe</label>
                    <input class="logininput" type="password" name="confirmpassword" required />
                    <div class="bluebar"></div>
                </div>
                <input type="submit" value="S'inscrire">
            </form>
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
        </div>
        <p> <a id="noaccount" href="/connexion">Vous avez déjà un compte ?</a><br /></p>
        </div>
    </div>

@endsection
