<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
{{-- TITULO --}}
    <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @yield('css')
</head>
<body>
    {{-- MENU --}}
    <nav class="navbar navbar-expand-lg bg-dark ">
      <div class="container-fluid ">
        <a class="navbar-brand text-light" href="{{route('home')}}">Etec JK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active text-light" aria-current="page" href="{{route('home')}}">Home</a>
            <a class="nav-link text-light" href="{{route('sobre-nos')}}">Sobre nós</a>
            <a class="nav-link text-light" href="{{route('contato')}}">Contato</a>
            
          </div>
        </div>
      </div>
    </nav>
      {{-- BODY --}}
    <div class="container-fluid">
        @yield('body')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

    @yield('js')
</body>
</html>