@extends('layouts.addBootstrap')
@section('content')
    <div>
        <body class="bg-dark">
            <div class="row pt-4">
                <div class="col-4 d-flex align-items-start justify-content-start">
                    <i class="bi bi-check2-circle text-success fs-2 me-2"></i>
                    <h1 class="text-white fs-3 m-0">
                        metas.<span class="text-success">diárias</span>
                    </h1>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <h3 class="text-light">Olá {{ $usuario->nome }}</h3>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <a href="{{ route('logout') }}" class="btn btn-danger text-light fs-5">Sair</a>
                </div>
            </div>
            <hr class="text-light">

            <div class="row py-3">
                <div class="col-2 fs-4">
                    <ul class="nav flex-column pt-3 gap-3 px-2">
                        <li class="nav-item">
                            <a class="nav-link text-success bg-light rounded-1" href="{{ route('metas.index') }}"><i class="bi bi-clipboard-data-fill me-2"></i>Minhas Metas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success bg-light rounded-1" href="#"><i class="bi bi-list-task me-2"></i>Tarefas do Dia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success bg-light rounded-1" href="#"><i class="bi bi-calendar3 me-2"></i>Calendário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success bg-light rounded-1" href="#"><i class="bi bi-pencil-fill me-2"></i>Minhas Anotações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success bg-light rounded-1" href="#"><i class="bi bi-gear-fill me-2"></i>Configurações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success bg-light rounded-1" href="#"><i class="bi bi-person-fill me-2"></i>Perfil</a>
                        </li>
                    </ul>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="fs-1 text-start text-success">Relatórios de Metas:</h1>
                            <hr class="text-light">
                        </div>
                        <div class="col-12">
                            <h1 class="text-light">trazer a % concluída das metas num foreach ou carrossel das metas em cards neste espaço</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr class="text-light py-5">
                    </div>
                </div>
            </div>
        </body>
    </div>
@endsection
