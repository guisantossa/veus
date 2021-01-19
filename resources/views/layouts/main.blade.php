<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>@yield('title')</title>

        <!-- Fonte do Goole -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">    

        <!-- JS Jquery -->
        <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
        <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <!-- JS Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Css da aplicação -->
        <link rel="stylesheet" href="../../css/styles.css">
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="HDC Events">
                    </a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos/">Produtos</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout"
                               class="nav-link"
                               onclick="event.preventDefault();
                               this.closest('form').submit();">
                               Sair
                               </a>
                        </li>
                        </form>
                    @endauth
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="/produtos" method="GET">
                        <input class="form-control mr-sm-2" type="search" placeholder="Produto" aria-label="Pesquisar" name='q' id='q'>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>Copywrite</footer>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
    
</html>
