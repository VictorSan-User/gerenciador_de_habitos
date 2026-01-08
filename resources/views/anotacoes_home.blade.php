@extends('layouts.addBootstrap')
@section('content')
<body class="bg-dark">
    <div class="container">
        <h1 class="text-success mt-4">Minhas Anotações</h1>
        <hr class="text-light">
        <p class="text-light">Aqui você pode gerenciar suas anotações pessoais.</p>
    </div>
</body>

    <section class="px-5">
        @foreach ($anotacoes as $anotacao)
            <div class="card border-success text-light m-3 p-3">
                <h3 class="text-success">{{ $anotacao->titulo }}</h3>
                <small class="text-muted">Criado em: {{ $anotacao->created_at->format('d/m/Y') }}</small>
                <hr class="text-light">
                <p>{{ $anotacao->conteudo }}</p>
        @endforeach

        <a href="{{ route('anotacoes.create') }}" class="btn btn-success btn-sm">Criar nova anotação</a>
    </section>

@endsection
