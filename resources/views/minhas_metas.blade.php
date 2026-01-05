@extends('layouts.addBootstrap')
@section('content')
    <body class="bg-dark">
        <div class="container">
            <div class="row pt-5">
                <div class="col-11">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h1 class="fs-1 text-start text-success">Minhas Metas:</h1>
                    <hr class="text-light">
                </div>
                <div class="col-1 text-light">
                    <a href="{{ route('dashboard') }}" class="btn btn-light px-2 text-dark"><i class="bi bi-x-lg"></i></a>
                </div>
                @foreach($metas as $meta)
                    <div class="col-4 mb-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title text-success"><strong>{{ $meta->titulo }}</strong></h5>
                                <p class="card-text text-dark"><strong>{{ $meta->descricao }}</strong></p>
                                <p class="card-text">
                                    <small class="text-muted">Início: {{ $meta->data_inicio }} | Fim: {{ $meta->data_fim }} | Status: {{ $meta->status }}</small>
                                </p>
                            </div>
                            <div class="col-2">
                                <a href="#" class="btn btn-primary">Editar</a>
                            </div>
                            <div class="col-2">
                                <a href="#" class="btn btn-success">Detalhes</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('metas.create') }}" class="btn btn-success px-5"><i class="bi bi-pin-fill me-2"></i>Criar Meta</a>
            </div>
        </div>


    </body>
@endsection
