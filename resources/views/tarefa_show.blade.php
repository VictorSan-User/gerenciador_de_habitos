@extends('layouts.addBootstrap')

{{-- Bloco de estilo customizado para o scroll (manteremos o scroll para a descrição longa) --}}
@section('styles')
    <style>
        .descricao-scroll {
            max-height: 250px; /* Aumentamos um pouco a altura máxima para a visualização individual */
            overflow-y: auto;
            padding-right: 15px;
            /* Estilo da barra de rolagem (opcional) */
            scrollbar-width: thin; /* Firefox */
            scrollbar-color: #5cb85c #212529; /* Firefox */
        }
        .descricao-scroll::-webkit-scrollbar {
            width: 8px; /* Largura da barra */
        }
        .descricao-scroll::-webkit-scrollbar-thumb {
            background-color: #5cb85c; /* Cor do Bootstrap Success */
            border-radius: 10px;
        }

        /* Estilo para as linhas de detalhes */
        .detail-row {
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .detail-row:last-child {
            border-bottom: none;
        }
    </style>
@endsection

@section('content')
    <body class="bg-dark text-white">
        <div class="container mt-5">
            <h2 class="text-success mb-5 border-bottom border-success pb-2">
                Detalhes da Tarefa: <span class="text-white">{{ $tarefa->titulo }}</span>
            </h2>

            <div class="p-4 bg-dark rounded shadow-lg border border-success">

                <div class="row detail-row">
                    <div class="col-sm-6 col-12 d-flex">
                        <p class="mb-0 text-success fw-bold me-2">Data:</p>
                        <p class="mb-0 text-white">{{ $tarefa->data }}</p>
                    </div>

                @if ($tarefa->descricao)
                    <div class="row detail-row">
                        <div class="col-12">
                            <p class="text-success fw-bold mb-2">Descrição Completa:</p>
                            <div class="descricao-scroll bg-secondary bg-opacity-10 p-3 rounded">
                                <p class="text-light mb-0">{{ $tarefa->descricao }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="mt-5 text-center">
                <a href="{{ route('tarefas.index') }}" class="btn btn-primary btn-lg px-5">Voltar para a Lista de Tarefas</a>
            </div>

        </div>
    </body>
@endsection
