<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
        <link rel="icon" type="image/png" href="{{ url('assets/logo/logotipo.ico') }}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @hasSection('css')
        @yield('css')
        @endif
        
    </head>
    <body>

        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('admin.home') }}"><img src="{{ url('assets/logo/logotipo.ico') }}" width="30"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ isActive('admin.home') }}">
                        <a class="nav-link" href="{{ route('admin.home') }}"><i class="bi bi-pc-display"></i> Área de Trabalho</a>
                    </li>
                    <li class="nav-item {{ isActive('admin.users') }}">
                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="bi bi-person-fill"></i> Usuários</a>
                    </li>
                    <li class="nav-item {{ isActive('admin.documents') }}">
                        <a class="nav-link" href="{{ route('admin.documents.index') }}"><i class="bi bi-file-earmark-text"></i> Documentos</a>
                    </li>
                </ul>
                <div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            @if(Auth:: user()->cover != null)
                            <img src="{{ url('storage/' . Auth:: user()->cover) }}" class="rounded-circle img-fluid" width="30" data-holder-rendered="true"> {{ Auth:: user()->name }}

                            @else
                            <img src="{{ url('assets/background/avatar.png') }}" class="rounded-circle img-fluid" width="30" data-holder-rendered="true"> {{ Auth:: user()->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="{{ route('admin.logout') }}" class="dropdown-item" href="#">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <script src="{{ url(mix('assets/js/jquery.js')) }}"></script>
        <script src="{{ url(mix('assets/js/bundle.js')) }}"></script>
        <script src="{{ url(mix('assets/js/jquery.mask.js')) }}"></script>
        @hasSection('script')
        @yield('script')
        @endif

    </body>
</html>
