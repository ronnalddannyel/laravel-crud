@extends('layouts.admin')

@section('content')
<h2>Listar</h2>


<a href="{{ route('courses.show')}}">Visualizar</a><br>
<a href="{{ route('courses.create')}}">Criar</a><br>
<a href="{{ route('courses.edit')}}">Editar</a><br>
<a href="{{ route('courses.update')}}">Atualizar</a><br>
<a href="{{ route('courses.destroy')}}">Excluir</a><br>

@endsection