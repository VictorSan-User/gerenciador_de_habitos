<div>
@extends('layouts.addBootstrap')
@section('content')
    <body class="bg-dark">
        <header class="py-3 border-bottom">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check2-circle text-info fs-2 me-2"></i>
                    <h1 class="text-white fs-3 m-0">
                        metas.<span class="text-info">diárias</span>
                    </h1>
                </div>

                <a href="#" class="btn btn-light text-dark fs-5">Registrar-se</a>
            </div>
        </header>

        <section class="text-light py-5">
            <div class="container">
                <div class="row align-items-start">
                    <div class="row">
                        <hr class="text-dark py-5">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-info fw-bold mb-4">Bem-vindo ao Gerenciador de Hábitos!</h2>

                        <p class="fs-5">
                            Este aplicativo foi desenvolvido para ajudá-lo a acompanhar e gerenciar seus hábitos
                            diários de forma eficaz. Com uma interface simples e intuitiva, você pode adicionar,
                            visualizar e monitorar seus hábitos com facilidade.
                        </p>

                        <p class="fs-5">
                            Comece agora mesmo a
                            <span class="text-info">construir uma rotina saudável e produtiva</span>!
                        </p>
                    </div>

                    {{-- Login --}}
                    <div class="col-md-6">
                        <div class="p-4 rounded-3 border border-secondary">
                            <form action="#" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label fs-5">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label fs-5">Senha:</label>
                                    <input type="password" class="form-control" id="password" name="senha">
                                </div>

                                <button type="submit" class="btn btn-info text-dark fs-5 fw-bold">
                                    Entrar
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <hr class="text-dark py-5">
                    </div>
                    <div class="row">
                        <hr class="text-dark py-5">
                    </div>
                </div>
            </div>
        </section>

        <footer class="border-top py-3">
            <div class="container text-center">
                <h6 class="text-light m-0">
                    &copy; {{ date("Y") }} metas.diárias. Todos os direitos reservados.
                </h6>
            </div>
        </footer>
    </body>

@endsection
</div>
