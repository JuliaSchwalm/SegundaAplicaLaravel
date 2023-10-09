@extends('mestre')
@section('titulo')
 TEC
@stop
@section('conteudo')
<h1 id = "curso" style = "color: green">
        {{$curso}}
</h1>
<h2 id = "nome-aluno">
       {{$nome}} <br>
      Nasceu em {{$ano = 2023 - $idade;}}
 </h2>
@stop