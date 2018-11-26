@extends('app')

@section('content')
    <div >
        <h1>Alteração de professor</h1>
        <p>Formulário de alteração de professor já cadastrado no sistema.</p>
    </div>
    <br/>
    <form id="form" action="{{ url('/professores/altera') }}" method="post" >
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $professor->id }}">
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label class="control-label font-weight-bold" for="professor" >Nome do Professor</label>
                <input class="form-control" name="professor" value="{{ $professor->professor }}">
            </div>
            <div class="form-group col-md-2 ">
                <label class="control-label font-weight-bold" for="data_nascimento" >Data de Nascimento</label>
                <input class="form-control datanascimento" name="data_nascimento" value="{{ $professor->data_nascimento }}">
            </div>
            <div class="form-group col-md-4 ">
                <label class="control-label font-weight-bold" for="cpf" >Cpf</label>
                <input class="form-control cpf" name="cpf" value="{{ $professor->cpf }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
        <a class="btn btn-primary" href="/professores" >Voltar</a>
    </form>
@endsection