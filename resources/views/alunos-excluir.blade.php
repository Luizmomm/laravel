@extends('app')

@section('content')
    <div >
        <h1>Exclusão de aluno</h1>
        <p>Deseja excluir o aluno do sistema?</p>
    </div>
    {{ csrf_field() }}
    <div class="form-row ">
        <div class="form-group col-md-6 ">
            <label class="control-label font-weight-bold" for="aluno" >Nome do aluno</label>
            <input class="form-control" name="aluno" value="{{ $aluno->aluno }}" readonly>
        </div>
        <div class="form-group col-md-2 ">
            <label class="control-label font-weight-bold" for="data_nascimento" >Data de Nascimento</label>
            <input class="form-control datanascimento" name="data_nascimento" value="{{ $aluno->data_nascimento }}" readonly="">
        </div>
        <div class="form-group col-md-4 ">
            <label class="control-label font-weight-bold" for="cpf" >Cpf</label>
            <input class="form-control cpf" name="cpf" value="{{ $aluno->cpf }}" readonly="">
        </div>
    </div>
    <a class="btn btn-danger" href="{{ url("/alunos/$aluno->id/exclui") }}" >Excluir</a>
    <a class="btn btn-primary" href="/alunos" >Voltar</a>
@endsection