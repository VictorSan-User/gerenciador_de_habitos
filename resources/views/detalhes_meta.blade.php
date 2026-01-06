@extends('layouts.addBootstrap')
@section('content')
    <body class="bg-dark">
        <div class="container mt-5">
            <div class="card bg-dark p-4 shadow-lg border border-success">

                <h2 class="text-success mb-3">Editar Meta</h2>
                <h6 class="text-light mb-4">Edite os dados abaixo que achar necessário</h6>

                <form action="{{ route('metas.update', $meta->id) }}" method="post">
                    @csrf

                    <!-- Título -->
                    <div class="mb-3">
                        <label class="form-label text-success">Título</label>
                        <input type="text" name="titulo" value="{{ $meta->titulo }}" class="form-control bg-secondary text-light border-0">
                    </div>

                    <!-- Descrição -->
                    <div class="mb-3">
                        <label class="form-label text-success">Descrição</label>
                        <textarea name="descricao" rows="3" class="form-control bg-secondary text-light border-0">{{ $meta->descricao }}</textarea>
                    </div>

                    <!-- Data Início -->
                    <div class="mb-3">
                        <label class="form-label text-success">Data de Início</label>
                        <input type="date" name="data_inicio" value="{{ $meta->data_inicio }}" class="form-control bg-secondary text-light border-0">
                    </div>

                    <!-- Data Fim -->
                    <div class="mb-3">
                        <label class="form-label text-success">Data de Fim</label>
                        <input type="date" name="data_fim" value="{{ $meta->data_fim }}" class="form-control bg-secondary text-light border-0">
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label text-success">Status</label>
                        <select name="status" class="form-control bg-secondary text-light border-0">
                            <option value="pendente">Pendente</option>
                            <option value="andamento">Em andamento</option>
                            <option value="concluida">Concluída</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100 mt-3">Salvar Alterações</button>
                    <a href="{{ route('metas.destroy.confirm', $meta->id) }}" class="btn btn-danger w-100 mt-3">Excluir Meta</a>
                    <a href="{{ route('metas.index') }}" class="btn btn-primary w-100 mt-3">Voltar</a>

                </form>
            </div>
        </div>
    </body>

@endsection
