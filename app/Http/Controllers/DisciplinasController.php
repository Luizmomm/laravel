<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplinasController extends Controller
{
    private $disciplina;

    public function __construct()
    {
        $this->disciplina = new disciplina();
    }

    public function listadisciplinas () {
        $list_disciplinas = disciplina::all();
        return view('disciplinas', [
            'disciplinas' => $list_disciplinas
        ]);
    }

    public function formulariodisciplinas () {
        $professores = DB::table('professor')->get();
        return view('disciplinas-inserir', ['professores' => $professores]);
    }

    public function inseredisciplinas (Request $request) {
        disciplina::create($request->all());
        return redirect('/disciplinas')->with('message', 'disciplina cadastrado com sucesso!');
    }

    public function excluirdisciplinas ($id) {
        return view('disciplinas-excluir', [
            'disciplina' => $this->getdisciplina($id)
        ]);
    }

    public function excluidisciplinas ($id) {
        $this->getdisciplina($id)->delete();
        return redirect('/disciplinas')->with('message', 'Disciplina excluida com sucesso!');
    }

    public function alterardisciplinas ($id) {
        $professores = DB::table('professor')->get();
        return view('disciplinas-alterar', [
            'disciplina' => $this->getdisciplina($id),
            'professores' => $professores
        ]);
    }

    public function alteradisciplinas (Request $request) {
        $disciplina = $this->getdisciplina($request->id);
        $disciplina->update($request->all());
        return redirect('/disciplinas')->with('message', 'disciplina alterado com sucesso!');
    }

    protected function getdisciplina ($id) {
        return $this->disciplina->find($id);
    }
}
