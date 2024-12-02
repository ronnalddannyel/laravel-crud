@extends('layouts.admin')

@section('content')
<h2>Vizualizar curso</h2><br>
<a href="{{ route('courses.index')}}">Retornar para o página principal!</a><br><br><br>

<a href="{{ route('courses.edit', ['course' => $course->id] )}}">Editar registro</a><br><br><br>



ID: {{$course->id}}<br>
Nome: {{$course->name}}<br>
Cadastrado: {{\Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s')}}<br>
Atualizado: {{\Carbon\Carbon::parse($course->update_at)->format('d/m/Y H:i:s')}}<br>
<hr>
@endsection