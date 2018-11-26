<?php

route::get('/index', function(){
    return view('index');
});

route::group(['prefix' => 'alunos'], function() {
    route::get('/', 'AlunosController@listaalunos');
    route::get('/inserir', 'AlunosController@formularioalunos');
    route::get('/{id}/alterar', 'AlunosController@alteraralunos');
    route::get('/{id}/excluir', 'AlunosController@excluiralunos');
    route::get('/{id}/exclui', 'AlunosController@excluialunos');
    route::post('/insere', 'AlunosController@inserealunos');
    route::post('/altera', 'AlunosController@alteraalunos');
});

route::group(['prefix' => 'professores'], function() {
    route::get('/', 'ProfessoresController@listaprofessores');
    route::get('/inserir', 'ProfessoresController@formularioprofessores');
    route::get('/{id}/alterar', 'ProfessoresController@alterarprofessores');
    route::get('/{id}/excluir', 'ProfessoresController@excluirprofessores');
    route::get('/{id}/exclui', 'ProfessoresController@excluiprofessores');
    route::post('/insere', 'ProfessoresController@insereprofessores');
    route::post('/altera', 'ProfessoresController@alteraprofessores');
});

route::group(['prefix' => 'disciplinas'], function() {
    route::get('/', 'DisciplinasController@listadisciplinas');
    route::get('/inserir', 'DisciplinasController@formulariodisciplinas');
    route::get('/{id}/alterar', 'DisciplinasController@alterardisciplinas');
    route::get('/{id}/excluir', 'DisciplinasController@excluirdisciplinas');
    route::get('/{id}/exclui', 'DisciplinasController@excluidisciplinas');
    route::post('/insere', 'DisciplinasController@inseredisciplinas');
    route::post('/altera', 'DisciplinasController@alteradisciplinas');
});

