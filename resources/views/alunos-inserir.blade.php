@extends('app')

@section('content')
    <div >
        <h1>Inserção de alunos </h1>
        <p>Formulário de cadastro de alunos no sistema.</p>
    </div>
    <br/>
    <form id="form" action="{{ url('/alunos/insere') }}" method="post" >
        {{ csrf_field() }}
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label class="control-label font-weight-bold" for="aluno" >Nome do aluno</label>
                <input class="form-control" name="aluno" type="text" placeholder="Nome completo"  value="">
            </div>
            <div class="form-group col-md-2 ">
                <label class="control-label font-weight-bold" for="data_nascimento" >Data de Nascimento</label>
                <input class="form-control datanascimento" name="data_nascimento" type="text" placeholder="Ano-Mes-Dia"  value="">
            </div>
            <div class="form-group col-md-4 ">
                <label class="control-label font-weight-bold" for="cpf" >Cpf</label>
                <input class="form-control cpf" name="cpf" type="text" placeholder="000.000.000-00"  value="">
            </div>
        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
        <a class="btn btn-primary" href="/alunos" >Voltar</a>
    </form>

@endsection