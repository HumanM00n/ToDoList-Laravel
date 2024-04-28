@extends('Layouts.app')

@section('title', 'Accueil To Do List')

@section('content')

<link rel="stylesheet" href="{{('admin_assets/css/home.css')}}">

<body class="">
    <!-- Masthead-->
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Votre outil favori pour gérer votre liste de tâches!</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Lancez-vous et utilisez l'outil de gestion de tâches pour stocker vos différentes tâches ou devoirs sans oublier le moindre détail </p>
                </div>
            </div>
        </div>
</body>

@endsection