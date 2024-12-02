@extends('layouts.admin')

@section('content')
<h2>Listar</h2>



<a class="btn btn-success" href="{{ route('courses.create')}}">Criar</a><br>


@if (session('success'))
<p style="color: green;">
    {{session('success')}}
</p>
@endif


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Table with stripped rows</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Update</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                <tr>
                    <th scope="row">{{$course->id}}</th>
                    <td>{{$course->name}}<br></td>
                    <td>{{\Carbon\Carbon::parse($course->created_at)->tz('America/Boa_Vista')->format('d/m/Y H:i:s')}}<br></td>
                    <td>{{\Carbon\Carbon::parse($course->update_at)->format('d/m/Y H:i:s')}}<br></td>
                    <td>
                        <a class="btn btn-success" href="{{ route('courses.show', ['course' => $course->id])}}">Visualizar</a>
                        <a class="btn btn-alert" href="{{ route('courses.edit', ['course' => $course->id])}}">Editar</a>
                        <form action="{{ route('courses.destroy', ['course' => $course->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Tem certeza que deseja apagar esse registro?')" type="submit" class="btn btn-danger">Excluir</button>
                        </form>

                    </td>
                </tr>
                @empty
                <p style="color: red;">Nehum cursos encontrado!</p>

                @endforelse

                {{--Paginação

{{$courses->links()}}

                --}}
            </tbody>
        </table>
    </div>
</div>
























@endsection