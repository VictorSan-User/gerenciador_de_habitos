<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Metas;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class metaController extends Controller
{
    public function index():View {
        $metas = Metas::where('usuario_id', session('user_id'))->get();
        return view('minhas_metas', ['metas' => $metas]);
    }

    public function create():View {
        return view('criar_metas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'required|date',
            'status' => 'nullable',
        ]);

        $meta = new Metas();
        $meta->usuario_id = session('user_id');
        $meta->titulo = $request->input('titulo');
        $meta->descricao = $request->input('descricao');
        $meta->data_inicio = $request->input('data_inicio');
        $meta->data_fim = $request->input('data_fim');
        $meta->status = $request->input('status');
        $meta->save();

        return redirect()->route('metas.index')->with('success', 'Meta criada com sucesso!');
    }
}
