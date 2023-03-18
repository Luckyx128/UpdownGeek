<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title> @yield('title') </title>

            <!-- Fonte do Google -->
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

            <!-- CSS Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <!-- CSS da pagina -->
            <link rel="stylesheet" href="/css/Style.css">

            <!-- JS da pagina -->
            <script src="/js/Script.js"></script>

           
        </head>
        <body>
            <header>
                <img src="/img/Logot.jpeg" alt="">
                <a href="/"><h2>Updown Geek</h2></a>
                <nav>
                    <div class="container">
                        <ul class="nav-links">
                            <li><a href="/funcio/Cadastro">Cadastro</a></li>
                            <li><a href="#">Produtos</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Contato</a>
                            <li class="Icone"><a href="#"><ion-icon name="cart-outline"></ion-icon></a><li>
                            <li class="Icone"><a href="#"><ion-icon name="person-circle-outline"></ion-icon></a><li>    
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <div class="row">
                    @yield('content')
                </div>
            </main>
            <footer>
                <p>Updonw Geek &copy; 2023</p>
            </footer>
            <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        </body>

    </html