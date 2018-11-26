@extends('app')

@section('content')
    <div >
        <h1>Inserção de disciplina </h1>
        <p>Formulário de cadastro de disciplina no sistema.</p>
    </div>
    <br/>
    <form id="form" action="{{ url('/disciplinas/insere') }}" method="post" >
        {{ csrf_field() }}
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label class="control-label font-weight-bold" for="disciplina" >Nome da disciplina</label>
                <input class="form-control" name="disciplina" type="text" placeholder="Nome"  value="">
            </div>
            <div class="form-group col-md-4 font-weight-bold">
                <label  for="professor_id" >Professor</label>
                <select name="professor_id" class="form-control">
                    <option value="0" selected="">Selecione</option>
                        @foreach($professores as $professor)
                            <option value="{{ $professor->id }}">{{ $professor->professor }}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group col-md-2 ">
                <label class="control-label font-weight-bold" for="carga_horaria" >Carga Horária</label>
                <input class="form-control" name="carga_horaria" type="text" placeholder="72 Horas"  value="">
            </div>

        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
        <a class="btn btn-primary" href="/disciplinas" >Voltar</a>
    </form>

@endsection