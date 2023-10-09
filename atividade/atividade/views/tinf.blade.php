@extends('mestre')
@section('titulo')
 TINF
@stop
@section('conteudo')
<h1 id = "curso" style = "color: blue " >
        {{$curso}}
</h1>
<h2 id = "nome-aluno">
       {{$nome}} <br>
      Nasceu em {{$ano = 2023 - $idade;}}
 </h2>
@stop