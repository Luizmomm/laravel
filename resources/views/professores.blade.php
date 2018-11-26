@extends('app')

@section('content')
    <div >
        <h1>Consulta de professores </h1>
        <p>Formulário de consulta de professores cadastrados no sistema.</p>
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
        @foreach($professores as $professor)
            <tbody>
            <tr>
                <th scope="row" style="width:5%;">{{ $professor->id }}</th>
                <td style="width:30%;">{{ $professor->professor }}</td>
                <td style="width:20%;">{{ $professor->data_nascimento }}</td>
                <td style="width:20%;">{{ $professor->cpf }}</td>
                <td style="width:30%;">
                    <a href="{{ url("/professores/$professor->id/alterar") }}" class="btn btn-warning" >Alterar</a>
                    <a href="{{ url("/professores/$professor->id/excluir") }}" class="btn btn-danger" >Excluir</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <a href="/professores/inserir" class="btn " style="color: white; background-color: black;" >Novo Professor</a>
@endsection