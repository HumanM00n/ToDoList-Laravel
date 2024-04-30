<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- LINK BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- LINK CLOUDFLARE --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{('admin_assets/css/home.css')}}">
    <title>App name @yield('title')</title>
</head>
<body>

    @section('sidebar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ToDoWebin</a>

            @guest {{-- SI L'UTILISATEUR N'EST PAS CONNECTE --}}
                
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="" aria-current="page" href="/">Accueil</a>
              </li>

            {{-- DISABLED --}}
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Créer une tâche</a>
              </li>
            
            {{-- DISABLED --}}
              <li class="nav-item">
                <a class="nav-link disabled">Mes tâches</a>
              </li>
            </ul>
            
            <div class="d-flex justify-content-around">
                <a href="/register" class="nav-link mx-3">Inscription</a>
                <a href="/login" class="nav-link">Se connecter</a>
            </div>
          </div>
        
          @else {{-- SI l'UTILSIATEUR EST CONNECTE --}}
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
              </li>

            {{-- CREER UNE TACHES --}}
              <li class="nav-item">
                <a class="nav-link" href="#">Créer une tâche</a>
              </li>
            
            {{-- MES TACHES --}}
              <li class="nav-item">
                <a class="nav-link">Mes tâches</a>
              </li>
            </ul>
            
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-danger">Déconnexion</button>
                </form>
            </li>
          </div>

          @endguest
        </div>
      </nav>

      @show

      <div class="container">
        @yield('content')
      </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>