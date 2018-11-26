@extends('app')

@section('content')
    <div >
        <h1>Consulta de alunos </h1>
        <p>Formulário de consulta de alunos cadastrados no sistema.</p>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">DATA DE NASCIMENTO</th>
                <th scope="col">CPF</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        @foreach($alunos as $aluno)
        <tbody>
            <tr>
                <th scope="row" style="width:5%;">{{ $aluno->id }}</th>
                <td style="width:30%;">{{ $aluno->aluno }}</td>
                <td style="width:20%;">{{ $aluno->data_nascimento }}</td>
                <td style="width:20%;">{{ $aluno->cpf }}</td>
                <td style="width:30%;">
                    <a href="{{ url("/alunos/$aluno->id/alterar") }}" class="btn btn-warning" >Alterar</a>
                    <a href="{{ url("/alunos/$aluno->id/excluir") }}" class="btn btn-danger" >Excluir</a>
                </td>
            </tr>
        </tbody>
            @endforeach
    </table>
        <a href="/alunos/inserir" class="btn " style="color: white; background-color: black;" >Novo Aluno</a>
@endsection