@extends('layouts.admin')

@section('content')
<h2>Formulário</h2>


<a href="{{ route('courses.index')}}">Retornar para o página principal!</a>


@if (session('success'))
    <p style="color: green;">
        {{session('success')}}
    </p>
@endif


<form action="{{route('courses.store')}}" method="post">
    @csrf
    @method('post')
    <br><br>

    <label >Nome</label>
    <input type="text" name="name" id="name" placeholder="Nome do curso" value="{{old('name')}}" required></input><br>


    <br>
    <button type="submit">Cadastrar</button>
</form>

@endsection