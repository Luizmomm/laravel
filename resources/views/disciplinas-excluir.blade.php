@extends('app')

@section('content')
    <div >
        <h1>Exclusão de disciplina</h1>
        <p>Deseja excluir a disciplina do sistema?</p>
    </div>
    <br/>
        {{ csrf_field() }}
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label class="control-label font-weight-bold" for="disciplina" >Nome da disciplina</label>
                <input class="form-control" name="disciplina" value="{{ $disciplina->disciplina }}" readonly>
            </div>
            <div class="form-group col-md-4 font-weight-bold">
                <label  for="professor_id" >Professor</label>
                <select name="professor_id" class="form-control" readonly>
                    <option value="{{ $disciplina->professor_id }}" >{{ $disciplina->professor->professor }}</option>
                </select>
            </div>
            <div class="form-group col-md-2 ">
                <label class="control-label font-weight-bold" for="carga_horaria" >Carga Horária</label>
                <input class="form-control" name="carga_horaria" value="{{ $disciplina->carga_horaria }}" readonly>
            </div>
        </div>
        <a href="{{ url("/disciplinas/$disciplina->id/exclui") }}" class="btn btn-danger" >Excluir</a>
        <a class="btn btn-primary" href="/disciplinas" >Voltar</a>

@endsection