<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Função de retorno de dados para a tela home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all()->sortBy('name');
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Função de criação de um novo professor.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Função de gravar novo professor.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return redirect('teachers');
    }

    /**
     * Função de exibir o professor.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show', ['name' => $teacher]);
    }

    /**
     * Função de edição do professor.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit', ['name' => $teacher]);
    }

    /**
     * Função de atualização do professor.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher = Teacher::find($id);
        $teacher->fill($request->all());
        $teacher->update();
        return redirect('teachers');
    }

    /**
     * Função de exclusão do professor.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($id);
        return redirect('teachers');
    }
}
