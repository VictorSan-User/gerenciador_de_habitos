@extends('layouts.addBootstrap')
@section('content')
<body class="bg-dark">
    <div class="container justify-content-center d-block">
        <div class="row">
            <div class="col-9">
                <form action="{{ route('anotacoes.store') }}" method="POST" class="bg-dark p-4">
                    @csrf

                    <h2 class="text-success mb-4">Criar Anotação</h2>

                    <div class="mb-3">
                        <label for="titulo" class="form-label text-white fs-5">Título</label>
                        <input type="text" class="form-control bg-secondary text-white border-0" id="titulo" name="titulo" placeholder="Digite o título da anotação">
                    </div>

                    <div class="mb-3">
                        <label for="conteudo" class="form-label text-white fs-5">Conteúdo</label>
                        <textarea class="form-control bg-secondary text-white border-0" id="conteudo" name="conteudo" rows="5" placeholder="Digite o conteúdo da anotação"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success px-4 fs-5 mt-3">Salvar</button>
                    <a href="{{ route('anotacoes.index') }}" class="btn btn-danger px-4 fs-5 mt-3">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>


@endsection
