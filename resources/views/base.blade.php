<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>🎓 The Logic Live - Árvore de refutação</title>

        <!-- CSS BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">

        <!-- CSS Customizado -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="perfect-scrollbar/css/perfect-scrollbar.css">

    </head>
    <body>
        <!-- Navbar Principal -->
        <div class="navbar shadow-sm bg-white rounded-bottom-50">
            <div class="container d-flex justify-content-center mt-2">
                <div class="row ">
                    <!-- Logo -->
                    <div class="col-auto d-flex justify-content-center p-0">
                        <img src="/imagens/icone-pequeno.png" width="40" height="40"></img>
                    </div>
                </div>
            </div>
            <!-- Badge -->
            <div class="container d-flex justify-content-center mt-2">
                <div class="row">
                    <span class="badge bg-gradient-blue text-white rounded-5">Módulo - Árvore de refutação</span>
                </div>
            </div>
        </div>
        {{-- @if (request()->is("/") or request()->is("Arvore") or request()->is("submit"))
        <div class="container mt-3 p-0">
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-block shadow bg-gradient-green rounded-05rem" onclick="window.location.href='porEtapa'">
                            <span class="text-white ml-2"><i class="fas fa-stream text-18"></i></span>
                            <span class="text-white ml-2 mr-2">Por Etapa</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @elseif ( request()->is("porEtapa") or request()->is("Inicializado") or request()->is("Gerando"))
        <div class="container mt-3 p-0">
            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-block shadow bg-gradient-green rounded-05rem" onclick="window.location.href='.'">
                        <span class="text-white ml-2"><i class="fas fa-tree text-18"></i></span>
                        <span class="text-white ml-2 mr-2">Árvore Normal</span>
                    </button>
                </div>
            </div>
        </div>
        @endif --}}
        <div>
            @yield('content')
        </div>

        <!-- JQUERY 3.4.1 -->
        <script type="text/javascript" src="bootstrap/js/jquery.min-3.4.1.js"></script>
        <!-- JS BOOTSTRAP -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
        <!-- BS-Custom-File Plugin -->
        <script type="text/javascript" src="bootstrap/js/bs-custom-file.js"></script>
        <script type="text/javascript" src="perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
        <!-- Scripts de inicialização -->
        <script>
            bsCustomFileInput.init()
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
            
            const container =
                document.querySelector('#container');
                const ps = new PerfectScrollbar(container);
        </script>
    </body>
</html>
