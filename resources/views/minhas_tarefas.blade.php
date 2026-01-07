@extends('layouts.addBootstrap')

@section('content')
    <body class="bg-dark text-white">
        <div class="container mt-5">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h2 class="text-success mb-4">Minhas Tarefas:</h2>
            <hr class="text-light">

            <div class="row">
                <ul class="list-group w-100">
                    @foreach ($tarefas as $tarefa)
                        <li class="list-group-item bg-dark border border-success mb-2">

                            <div class="d-flex justify-content-between align-items-start">

                                <div class="me-auto">
                                    <h5 class="text-success">{{ $tarefa->titulo }}</h5>

                                    @if ($tarefa->descricao)
                                        <p class="text-light mb-1">
                                            {{ Str::limit($tarefa->descricao, 150) }}
                                        </p>
                                    @endif
                                </div>

                                <div class="ms-3 text-end d-block">
                                    <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-primary btn-sm mb-1">Editar</a><br>
                                    <a href="{{ route('tarefas.show', $tarefa->id) }}" class="btn btn-success btn-sm mb-1">Detalhes</a><br>
                                    <a href="#" class="btn btn-danger btn-sm">Finalizar</a>
                                </div>

                            </div>

                        </li>
                    @endforeach
                </ul>

            </div>

            {{-- botao pra criar tarefa --}}
            <div class="mt-4">
                <a href="{{ route('tarefas.create') }}" class="btn btn-success btn-sm mb-1">Nova Tarefa</a>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">Voltar</a>


        </div>
    </body>
@endsection
