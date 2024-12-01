<?php

namespace App\Http\Controllers;

abstract class Controller
{

    //listar cursos
    public function index(){
        //View - listar cursos
        return view('courses.index');
    }

    //Vizualizar curso
    public function show(){
         //View - listar cursos
        return view('courses.show');
    }


    //Criar curso
    public function create(){
            //View - listar cursos
            return view('courses.create');
    }

    //Armazenar no banco de dados
    public function store(){
        dd("editar");
    }
    //Editar curso
    public function edit(){
        return view('courses.edit');
    }


    //
    public function update(){
        dd("editar");
    }

    public function destroy(){
        dd("editar");
    }





}
