<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    private $aluno;

    public function __construct()
    {
        $this->aluno = new Aluno();
    }

    public function listaalunos () {
        $list_alunos = Aluno::all();
        return view('alunos', [
            'alunos' => $list_alunos
        ]);
    }

    public function formularioalunos () {
        return view('alunos-inserir');
    }

    public function inserealunos (Request $request) {
        Aluno::create($request->all());
        return redirect('/alunos')->with('message', 'Aluno cadastrado com sucesso!');
    }

    public function excluiralunos ($id) {
        return view('alunos-excluir', [
            'aluno' => $this->getAluno($id)
        ]);
    }

    public function excluialunos ($id) {
        $this->getAluno($id)->delete();
        return redirect('/alunos')->with('message', 'Aluno excluido com sucesso!');
    }

    public function alteraralunos ($id) {
        return view('alunos-alterar', [
            'aluno' => $this->getAluno($id)
        ]);
    }

    public function alteraalunos (Request $request) {
        $aluno = $this->getAluno($request->id);
        $aluno->update($request->all());
        return redirect('/alunos')->with('message', 'Aluno alterado com sucesso!');
    }

    protected function getAluno ($id) {
        return $this->aluno->find($id);
    }
}
