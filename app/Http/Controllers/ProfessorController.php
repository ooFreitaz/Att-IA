<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    // Exibe a lista de professores
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    // Exibe o formulário para criar um novo professor
    public function create()
    {
        return view('professores.create');
    }

    // Armazena um novo professor no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:professores',
        ]);

        Professor::create($request->all());

        return redirect()->route('professores.index')->with('success', 'Professor criado com sucesso.');
    }

    // Exibe o formulário para editar um professor existente
    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    // Atualiza um professor no banco de dados
    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:professores,email,' . $professor->id,
        ]);

        $professor->update($request->all());

        return redirect()->route('professores.index')->with('success', 'Professor atualizado com sucesso.');
    }

    // Remove um professor do banco de dados
    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professores.index')->with('success', 'Professor excluído com sucesso.');
    }
}
