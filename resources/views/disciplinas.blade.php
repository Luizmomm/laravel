@extends('app')

@section('content')
    <div >
        <h1>Consulta de disciplinas </h1>
        <p>Formulário de consulta de disciplinas cadastradas no sistema.</p>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">PROFESSOR</th>
            <th scope="col">CARGA HORÁRIA</th>
            <th scope="col">AÇÕES</th>
        </tr>
        </thead>
        @foreach($disciplinas as $disciplina)
            <tbody>
            <tr>
                <th scope="row" style="width:5%;">{{ $disciplina->id }}</th>
                <td style="width:30%;">{{ $disciplina->disciplina }}</td>
                <td style="width:20%;">{{ $disciplina->professor->professor }}</td>
                <td style="width:20%;">{{ $disciplina->carga_horaria }}</td>
                <td style="width:30%;">
                    <a href="{{ url("/disciplinas/$disciplina->id/alterar") }}" class="btn btn-warning" >Alterar</a>
                    <a href="{{ url("/disciplinas/$disciplina->id/excluir") }}" class="btn btn-danger" >Excluir</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <a href="/disciplinas/inserir" class="btn " style="color: white; background-color: black;" >Nova Disciplina</a>
@endsection