<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Anotacoes;

class anotacoesController extends Controller
{
    public function index():View {
        $anotacoes = Anotacoes::where('usuario_id', session('user_id'))->get();
        return view('anotacoes_home', ['anotacoes' => $anotacoes]);
    }

    public function create():View {
        return view('criar_anotacao');
    }

    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'nullable|string',
        ]);

        $anotacao = new Anotacoes();
        $anotacao->titulo = $request->input('titulo');
        $anotacao->conteudo = $request->input('conteudo');
        $anotacao->usuario_id = session('user_id');
        $anotacao->save();

        return redirect()->route('anotacoes.index')->with('success', 'Anotação criada com sucesso!');
    }

    public function destroy(string $id) {
        $destroy = Anotacoes::findOrFail($id);
        $destroy->delete();
        return view('anotacoes_home')->with('success', 'Anotação removida com sucesso!');
    }
}
