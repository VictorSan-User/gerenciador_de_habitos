<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Usuario;

class MainController extends Controller
{
    public function index() :View {
        return view('index');
    }
    public function dashboard() :View {
        $usuario = Usuario::findOrFail(session('user_id'));
        return view('dashboard', ['usuario' => $usuario]);
    }
}
