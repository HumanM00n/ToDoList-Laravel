@extends('layouts.app')

@section('title', 'Connexion')

@section('content')

<link rel="stylesheet" href="{{('admin_assets/css/connexion.css')}}">

<div>
    <h1 class="d-flex justify-content-center mt-1">Connexion</h1>
</div>

<form class="row g-3 d-flex justify-content-center" action="/connexion" method="post">
    @csrf {{-- Pour se prémunire des attaques --}}

    {{-- ADRESSE MAIL  --}}
    <div class="mb-3 d-flex justify-content-center">
        <label for="exampleInputEmail1" class="form-label p-3">Adresse mail</label>
        <input type="email" class="form-control w-25" id="InputMail">
    </div>

    {{-- MOT DE PASSE  --}}
    <div class="mb-3 d-flex justify-content-center">
        <label for="exampleInputPassword1" class="form-label p-3">Mot de passe</label>
        <input type="password" class="form-control w-25" id="InputPasswd">
    </div>
    <button type="submit" class="btn btn-primary d-flex justify-content-center w-25" style="margin-left: 130px;">Se connecter</button>
</form>



@endsection
