<?php

namespace App\Http\Controllers;

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
        if (auth()->Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // return redirect()->intended('/dashboard');
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
            'email' => 'As informações fornecidas não correspondem aos nossos registros.',
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
}
