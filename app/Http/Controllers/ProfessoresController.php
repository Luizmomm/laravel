<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    private $professor;

    public function __construct()
    {
        $this->professor = new Professor();
    }

    public function listaprofessores () {
        $list_professores = Professor::all();
        return view('professores', [
            'professores' => $list_professores
        ]);
    }

    public function formularioprofessores () {
        return view('professores-inserir');
    }

    public function insereprofessores (Request $request) {
        professor::create($request->all());
        return redirect('/professores')->with('message', 'professor cadastrado com sucesso!');
    }

    public function excluirprofessores ($id) {
        return view('professores-excluir', [
            'professor' => $this->getprofessor($id)
        ]);
    }

    public function excluiprofessores ($id) {
        $this->getprofessor($id)->delete();
        return redirect('/professores')->with('message', 'professor excluido com sucesso!');
    }

    public function alterarprofessores ($id) {
        return view('professores-alterar', [
            'professor' => $this->getprofessor($id)
        ]);
    }

    public function alteraprofessores (Request $request) {
        $professor = $this->getprofessor($request->id);
        $professor->update($request->all());
        return redirect('/professores')->with('message', 'professor alterado com sucesso!');
    }

    protected function getprofessor ($id) {
        return $this->professor->find($id);
    }
}
