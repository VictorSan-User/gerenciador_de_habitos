<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login_Submit(Request $request)
    {
        // Validação dos dados de login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        // Tentativa de autenticação
        $usuario = Usuario::where('email', $credentials['email'])->first();
        if( $usuario && password_verify($credentials['senha'], $usuario->senha) ) {
            // Autenticação bem-sucedida
            session()->put('user', $usuario);

            return redirect()->route('dashboard');
        }else{
            // Autenticação falhou
            return back()->withErrors([
                'email' => 'E-mail ou senha incorretos.',
            ])->onlyInput('email');
        }

        if (empty($credentials['email'])) {
            return back()->withErrors([
                'email' => 'O email é obrigatório.',
            ])->onlyInput('email');
        }

        if (empty($credentials['senha'])) {
            return back()->withErrors([
                'senha' => 'A senha é obrigatória.',
            ])->onlyInput('email');
        }

        // Falha na autenticação
        return back()->withErrors([
            'email' => 'E-mail ou senha incorretos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showRegisterForm() :View {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|min:6',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode exceder :max caracteres.',
            'data_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_nascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos :min caracteres.',
        ]);

        // Criação do novo usuário
        $user = new Usuario();
        $user->nome = $validatedData['nome'];
        $user->data_nascimento = $validatedData['data_nascimento'];
        $user->email = $validatedData['email'];
        $user->senha = bcrypt($validatedData['senha']);
        $user->save();

        // Criacao do usuario na sessao
        session()->put('user', $user);


        // Redirecionamento após o registro bem-sucedido
        return redirect()
             ->route('index')
             ->with('success', 'Registro realizado com sucesso! Acesse sua conta com e-mail e senha criados.');
    }
}
