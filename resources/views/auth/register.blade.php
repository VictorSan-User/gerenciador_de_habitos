@extends('layouts.addBootstrap')
@section('content')
    <body class="bg-dark">
        <div class="col-6 pt-5 justify-content-end align-items-start mx-auto rounded-3">
                <div class="d-flex align-items-start mb-4">
                    <i class="bi bi-check2-circle text-info fs-2 me-2"></i>
                    <h1 class="text-white fs-3 m-0 mb-4">
                        metas.<span class="text-info">diárias</span> - Registrar-se
                    </h1>
                </div>
                <hr class="text-light py-3">
            <div class="p-4 w-50 border border-secondary mx-auto">
                <form action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label fs-5 text-light"> Nome:</label>
                        <input type="nome" class="form-control" id="nome" name="nome" value="{{old('nome')}}">
                    </div>
                    @if ($errors->has('nome'))
                        <div class="alert alert-danger">
                            {{ $errors->first('nome') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label fs-5 text-light">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label fs-5 text-light">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{old('data_nascimento')}}">
                    </div>
                    @if ($errors->has('data_nascimento'))
                        <div class="alert alert-danger">
                            {{ $errors->first('data_nascimento') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="senha" class="form-label fs-5 text-light">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    @if ($errors->has('senha'))
                        <div class="alert alert-danger">
                            {{ $errors->first('senha') }}
                        </div>
                    @endif
                    <div class="d-flex flex-column align-items-center mt-4">
                        <button type="submit" class="btn btn-success text-light fs-5 px-5 mb-2" style="width: 200px;">
                            Gravar
                        </button>

                        <a href="{{ route('index') }}" class="btn btn-light text-dark fs-5" style="width: 200px;">
                            Voltar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
