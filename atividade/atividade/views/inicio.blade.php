
@extends('mestre')
@section('titulo')
 Formulário
@stop
@section('conteudo')
<form action = "{{route ('meuformulario')}}"
        method = "post">
        @csrf 
        <input type = "text" name = "nome" placeholder="Digite seu nome aqui"> <br><br>
        <input type = "number" name = "idade" placeholder="Digite sua idade aqui"><br><br>
        <select name="select">
    <option value="tads"> TADS</option>
    <option value="tinf" selected>TINF</option>
     <option value="tec">TEC</option>
    </select> <br><br>
        <input type="submit" name="enviar" value="Enviar">  

     </form>
@stop