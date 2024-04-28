    @extends('layouts.app')

    @section('title', 'Inscription')

    @section('content')

    <link rel="stylesheet" href="{{('admin_assets/css/style.css')}}">

        <div>
            <h1 class="d-flex justify-content-center mt-1">Inscription</h1>
        </div>

        <form class="row g-3" action="/register" method="post">
            @csrf {{-- Pour se prémunire des attaques --}}

            {{-- NOM --}}
            <div class="col-md-6">
            <label for="labelNom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="inputNom" name="nom" required>
            <span>
                @error('nom')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </span>
            </div>

            {{-- PRENOM --}}
            <div class="col-md-6">
                <label for="labelPrenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="inputPrenom" name="prenom" required>
                <span>
                    @error('prenom')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </span>
            </div>

            {{-- EMAIL --}}
            <div class="col-12">
            <label for="labelEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="exemple@gmail.com" name="email" required>
            <span>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </span>
            </div>

            {{-- PASSWORD --}}
            <div class="col-md-6">
                <label for="labelPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" required>
                <span>
                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </span>
            </div>

            {{-- BUTTON --}}
            <div class="col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <!-- Dans votre vue -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            </div>
        </form>

    @endsection