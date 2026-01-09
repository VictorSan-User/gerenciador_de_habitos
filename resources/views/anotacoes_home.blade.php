@extends('layouts.addBootstrap')
@section('content')
<body class="bg-dark">
    <div class="container">
        @if (session('success'))
            <div class="text-success border-success">{{ session('success') }}</div>
        @endif
        <h1 class="text-success mt-4">Minhas Anotações</h1>
        <hr class="text-light">
        <p class="text-light">Aqui você pode gerenciar suas anotações pessoais.</p>
    </div>
</body>
<div class="container">
    <div class="col-4">
        <section class="px-5">
            @foreach ($anotacoes as $anotacao)
                <div class="card border-success text-light m-3 p-3">
                    <div class="row">
                        <div class="col-10">
                            <h3 class="text-success">{{ $anotacao->titulo }}</h3>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('anotacoes.destroy', $anotacao->id) }}" class="text-decoration-none text-dark"><i class="bi bi-x-lg"></i></a>
                        </div>
                    </div>
                    <small class="text-muted">Criado em: {{ $anotacao->created_at->format('d/m/Y') }}</small>
                    <hr class="text-dark">
                    <p class="text-success">{{ $anotacao->conteudo }}</p>
                </div>
            @endforeach
        </section>
        <a href="{{ route('anotacoes.create') }}" class="btn btn-success btn-sm mb-1">Criar nova anotação</a>
        <br>
        <a href=" {{ route('dashboard') }} " class="btn btn-secondary btn-sm">Voltar</a>
    </div>
</div>


@endsection
