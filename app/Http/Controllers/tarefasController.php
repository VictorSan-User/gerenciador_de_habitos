<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Tarefa;

class tarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View {
        $tarefas = Tarefa::where('usuario_id', session('user_id'))->get();
        return view('minhas_tarefas', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View {
        return view('tarefa_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $tarefa = new Tarefa();
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->usuario_id = session('user_id');
        $tarefa->data = date('Y-m-d');
        $tarefa->save();

        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefa_show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View {
        $tarefa = Tarefa::findOrFail($id);
        return view('editar_tarefa', ['tarefa' => $tarefa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $tarefa = Tarefa::findOrFail($id);
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->save();

        return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('success', 'Tarefa finalizada com sucesso!');
    }
}
