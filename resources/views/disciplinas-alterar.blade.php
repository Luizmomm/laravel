@extends('app')

@section('content')
    <div >
        <h1>Alteração de disciplina </h1>
        <p>Formulário de alteração de disciplina cadastrada no sistema.</p>
    </div>
    <br/>
    <form id="form" action="{{ url('/disciplinas/altera') }}" method="post" >
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $disciplina->id }}">
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label class="control-label font-weight-bold" for="disciplina" >Nome da disciplina</label>
                <input class="form-control" name="disciplina" value="{{ $disciplina->disciplina }}">
            </div>
            <div class="form-group col-md-4 font-weight-bold">
                <label  for="professor_id" >Professor</label>
                <select name="professor_id" class="form-control">
                    <option value="{{ $disciplina->professor_id }}">{{ $disciplina->professor->professor }}</option>
                    @foreach($professores as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->professor }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-2 ">
                <label class="control-label font-weight-bold" for="carga_horaria" >Carga Horária</label>
                <input class="form-control" name="carga_horaria" value="{{ $disciplina->carga_horaria }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
        <a class="btn btn-primary" href="/disciplinas" >Voltar</a>
    </form>

@endsection