@extends('app')

@section('content')
    <div >
        <h1>Alteração de aluno</h1>
        <p>Formulário de alteração de aluno já cadastrado no sistema.</p>
    </div>
    <br/>
    <form id="form" action="{{ url('/alunos/altera') }}" method="post" >
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $aluno->id }}">
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label class="control-label font-weight-bold" for="aluno" >Nome do aluno</label>
                <input class="form-control" name="aluno" value="{{ $aluno->aluno }}">
            </div>
            <div class="form-group col-md-2 ">
                <label class="control-label font-weight-bold" for="data_nascimento" >Data de Nascimento</label>
                <input class="form-control datanascimento" name="data_nascimento" value="{{ $aluno->data_nascimento }}">
            </div>
            <div class="form-group col-md-4 ">
                <label class="control-label font-weight-bold" for="cpf" >Cpf</label>
                <input class="form-control cpf" name="cpf" value="{{ $aluno->cpf }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
        <a class="btn btn-primary" href="/alunos" >Voltar</a>
    </form>

@endsection