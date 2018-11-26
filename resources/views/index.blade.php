@extends('app')

@section('content')
    <div>
        <h3>Consulta de Disciplinas</h3>
        <p>Consultar disciplinas cadastradas no sistema.</p>
        <a class="btn" href="/disciplinas" style="color: white; background-color: black;" >Disciplinas</a>
    </div>
    <br/>
    <div>
        <h3>Consulta de Professores</h3>
        <p>Consultar professores cadastrados no sistema.</p>
        <a class="btn" href="/professores" style="color: white; background-color: black;" >Professores</a>
    </div>
    <br/>
    <div>
        <h3>Consulta de Alunos</h3>
        <p>Consultar alunos cadastrados no sistema.</p>
        <a class="btn" href="/alunos" style="color: white; background-color: black;" >Alunos</a>
    </div>

@endsection