@extends('app')

@section('content')
    <div >
        <h1>Exclusão de professor</h1>
        <p>Deseja excluir o professor do sistema?</p>
    </div>
    {{ csrf_field() }}
    <div class="form-row ">
        <div class="form-group col-md-6 ">
            <label class="control-label font-weight-bold" for="professor" >Nome do professor</label>
            <input class="form-control" name="professor" value="{{ $professor->professor }}" readonly>
        </div>
        <div class="form-group col-md-2 ">
            <label class="control-label font-weight-bold" for="data_nascimento" >Data de Nascimento</label>
            <input class="form-control datanascimento" name="data_nascimento" value="{{ $professor->data_nascimento }}" readonly="">
        </div>
        <div class="form-group col-md-4 ">
            <label class="control-label font-weight-bold" for="cpf" >Cpf</label>
            <input class="form-control cpf" name="cpf" value="{{ $professor->cpf }}" readonly="">
        </div>
    </div>
    <a class="btn btn-danger" href="{{ url("/professores/$professor->id/exclui") }}" >Excluir</a>
    <a class="btn btn-primary" href="/professores" >Voltar</a>
@endsection