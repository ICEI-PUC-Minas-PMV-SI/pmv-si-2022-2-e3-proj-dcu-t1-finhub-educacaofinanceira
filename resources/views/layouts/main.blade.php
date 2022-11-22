<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- css da aplcação -->
        <link href="/css/styles.css" rel="stylesheet" type="text/css" />
        <script src="/js/script.js"></script>
    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">FinHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Influenciadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Livros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Podcast</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Conteúdo do site -->
        @yield('content')
      <!-- Conteúdo do site -->

      <footer>FinHub &copy; 2022</footer>
      
      <!-- ionicons -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
