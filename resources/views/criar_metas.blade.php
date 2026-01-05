@extends('layouts.addBootstrap')
@section('content')
    <body class="bg-dark">
        <div class="container mt-5">
            <div class="card bg-dark p-4 shadow-lg border border-success">

                <h2 class="text-success mb-3">Criar Nova Meta</h2>
                <h6 class="text-light mb-4">Preencha os dados abaixo para adicionar uma nova meta</h6>

                <form action="{{ route('metas.store') }}" method="post">
                    @csrf

                    <!-- Título -->
                    <div class="mb-3">
                        <label class="form-label text-success">Título</label>
                        <input type="text" name="titulo" value="{{ old('titulo') }}" class="form-control bg-secondary text-light border-0">
                    </div>

                    <!-- Descrição -->
                    <div class="mb-3">
                        <label class="form-label text-success">Descrição</label>
                        <textarea name="descricao" rows="3" class="form-control bg-secondary text-light border-0">{{ old('descricao') }}</textarea>
                    </div>

                    <!-- Data Início -->
                    <div class="mb-3">
                        <label class="form-label text-success">Data de Início</label>
                        <input type="date" name="data_inicio" value="{{ old('data_inicio') }}" class="form-control bg-secondary text-light border-0">
                    </div>

                    <!-- Data Fim -->
                    <div class="mb-3">
                        <label class="form-label text-success">Data de Fim</label>
                        <input type="date" name="data_fim" value="{{ old('data_fim') }}" class="form-control bg-secondary text-light border-0">
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

                    <button type="submit" class="btn btn-success w-100 mt-3">Salvar Meta</button>
                    <a href="{{ route('metas.index') }}" class="btn btn-primary w-100 mt-3">Voltar</a>

                </form>
            </div>
        </div>
    </body>

@endsection
