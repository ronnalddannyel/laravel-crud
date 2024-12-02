
@extends('layouts.admin')

@section('content')
<h2>Editar o curso</h2>
<a href="{{ route('courses.index')}}">Retornar para o página principal!</a>



<form action="{{ route('courses.update', ['course' => $course->id ]) }}" method="POST">
@csrf    
@method('PUT')

<br><br>

<label >Nome</label>
<input type="text" name="name" id="name" placeholder="Nome do curso" value="{{old('name', $course->name)}}" required></input><br>


<br>
<button type="submit">Editar</button>

</form>

@endsection