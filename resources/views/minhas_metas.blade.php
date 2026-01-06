@extends('layouts.addBootstrap')

@section('content')
    <body class="bg-dark text-white">
        <div class="container mt-5">
            <h2 class="text-success mb-4">Minhas Metas:</h2>
            <hr class="text-light">

            <div class="row">
                @foreach ($metas as $meta)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card bg-dark border-success h-100 d-flex flex-column">

                            <div class="card-body">
                                <h5 class="text-white card-title">
                                    {{ $meta->titulo }}
                                </h5>
                                <p class="text-success small mb-1">
                                    Início: {{ $meta->data_inicio }} | Fim: {{ $meta->data_fim }} | Status: {{ $meta->status }}
                                </p>
                                <hr class="text-light">

                                @if ($meta->descricao)
                                    <p class="card-text text-light">
                                        {{ Str::limit($meta->descricao, 150) }}
                                    </p>
                                @endif
                            </div>

                            <div class="card-footer bg-transparent border-0 mt-auto d-flex justify-content-start">
                                <a href="{{ route('metas.edit', $meta->id) }}" class="btn btn-primary btn-sm me-2">Editar</a>
                                <a href="{{ route('metas.show', $meta->id) }}" class="btn btn-success btn-sm">Detalhes</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            {{-- botao pra criar meta --}}
            <div class="mt-4">
                <a href="{{ route('metas.create') }}" class="btn btn-success btn-sm mb-1">Nova Meta</a>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">Voltar</a>


        </div>
    </body>
@endsection
