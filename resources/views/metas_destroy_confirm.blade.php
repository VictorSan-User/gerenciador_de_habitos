@extends('layouts.addBootstrap')

<style>
    .descricao-scroll {
        max-height: 250px;
        overflow-y: auto;
        padding-right: 15px;
        /* Estilo da barra de rolagem (opcional) */
        scrollbar-width: thin;
        scrollbar-color: #5cb85c #212529;
    }
    .descricao-scroll::-webkit-scrollbar {
        width: 8px;
    }
    .descricao-scroll::-webkit-scrollbar-thumb {
        background-color: #5cb85c;
        border-radius: 10px;
    }

    .detail-row {
        padding: 10px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .detail-row:last-child {
        border-bottom: none;
    }
</style>

@section('content')
    <body class="bg-dark text-white">
        <div class="container mt-5">
            <h2 class="text-success mb-5 border-bottom border-success pb-2">
                Detalhes da Meta: <span class="text-white">{{ $meta->titulo }}</span>
            </h2>

            <div class="p-4 bg-dark rounded shadow-lg border border-success">

                <div class="row detail-row">
                    <div class="col-12 d-flex">
                        <p class="mb-0 text-success fw-bold me-2">Status:</p>
                        <p class="mb-0 text-white">{{ $meta->status }}</p>
                    </div>
                </div>

                <div class="row detail-row">
                    <div class="col-sm-6 col-12 d-flex">
                        <p class="mb-0 text-success fw-bold me-2">Início:</p>
                        <p class="mb-0 text-white">{{ $meta->data_inicio }}</p>
                    </div>

                    <div class="col-sm-6 col-12 d-flex mt-2 mt-sm-0">
                        <p class="mb-0 text-success fw-bold me-2">Fim Previsto:</p>
                        <p class="mb-0 text-white">{{ $meta->data_fim }}</p>
                    </div>
                </div>

                @if ($meta->descricao)
                    <div class="row detail-row">
                        <div class="col-12">
                            <p class="text-success fw-bold mb-2">Descrição Completa:</p>
                            <div class="descricao-scroll bg-secondary bg-opacity-10 p-3 rounded">
                                <p class="text-light mb-0">{{ $meta->descricao }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="mt-5 d-flex justify-content-between">
                <a href="{{ route('metas.index') }}" class="btn btn-primary btn-lg px-5">Voltar</a>

                <div>
                    <a href="{{ route('metas.edit', $meta->id) }}" class="btn btn-warning btn-lg me-3">Editar</a>

                    <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                        Excluir
                    </button>
                </div>
            </div>

        </div>
    </body>


<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark border-danger text-white">

            <div class="modal-header">
                <h5 class="modal-title text-danger" id="confirmDeleteModalLabel">
                    Confirmação Necessária
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <div class="modal-body">
                <p>Você tem certeza que quer excluir esta meta **"{{ $meta->titulo }}"**?</p>
                <p class="text-warning">Esta ação é **irreversível** e removerá permanentemente todos os dados associados a ela.</p>
            </div>

            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                <form action="{{ route('metas.destroy', $meta->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Sim, Excluir Meta</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
