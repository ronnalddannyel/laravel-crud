<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request as HttpRequest;

abstract class Controller
{

    //Listar cursos
    public function index()
    {

        //recuperar registros
        //simulando erro, quando não tem registros
        // $courses = Course::where('id', 1000)->get();
        $courses = Course::orderBy('id', 'DESC')->get();
        //$courses = Course::paginate(1);






        //View - listar cursos
        return view('courses.index', ['courses' => $courses]);
    }

    //Vizualizar curso
    public function show(HttpRequest $request)
    {

        // dd($request->course);
        $course = Course::where('id', $request->course)->first();



        //View - listar cursos
        return view('courses.show', ['course' => $course]);
    }


    //Criar curso
    public function create()
    {
        //View - listar cursos
        return view('courses.create');
    }

    //Armazenar no banco de dados
    public function store(HttpRequest $request)
    {
        //cadastrar no banco de dados 
        Course::create([
            'name' => $request->name
        ]);

        //redirecionar
        return redirect()->route('courses.index')->with('success', 'Curso cadastrado com sucesso!');
    }
    //Editar curso
    public function edit(Course $course)
    {


       


        //Carregar view
        return view('courses.edit', ['course'=>$course]);
    }


    //
    public function update(HttpRequest $request, Course $course)
    {
       
        
        $course->update([
            'name' => $request->name
            
        ]);
        

        return redirect()->route('courses.show',['course' => $course->id ])->with('success','Editado com sucesso!');
       
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Curso excluido com sucesso!');
    }
}
