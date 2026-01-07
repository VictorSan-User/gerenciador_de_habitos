@extends('layouts.addBootstrap')
@section('content')
    <body class="bg-dark">
        <div class="container mt-5">
            <div class="card bg-dark p-4 shadow-lg border border-success">

                <h2 class="text-success mb-3">Nova Tarefa</h2>
                <h6 class="text-light mb-4">Preencha os dados abaixo para adicionar uma nova tarefa</h6>

                <form action="{{ route('tarefas.store') }}" method="post">
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

                    <button type="submit" class="btn btn-success w-100 mt-3">Gravar nova Tarefa</button>
                    <a href="{{ route('metas.index') }}" class="btn btn-primary w-100 mt-3">Voltar</a>

                </form>
            </div>
        </div>
    </body>

@endsection
