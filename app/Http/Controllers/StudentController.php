<?php

namespace App\Http\Controllers;

use App\Student;
use App\Team;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Função de retorno de dados para a tela home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all()->sortBy('name');
        return view('students.index', compact('students'));
    }

    /**
     * Função de criação de um novo aluno.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('students.create', compact('teams'));
    }

    /**
     * Função de gravar novo aluno.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        /*validação dos campos server side*/ 
        $this->validate($request,[ 
            'born_at' => 'required', 
            'name' => 'required|max:255',
            ]); 
        
        $student = Student::create($request->all());
        return redirect('students');
    }

    /**
     * Função de exibir o aluno.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, int $id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Função de edição do aluno.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, int $id)
    {
        $student = Student::find($id);
        $teams = Team::all();
        return view('students.edit', compact('student', 'teams'));
    }

    /**
     * Função de atualização do aluno.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, int $id)
    {
        /*validação dos campos server side*/ 
        $this->validate($request,[ 
            'born_at' => 'required', 
            'name' => 'required|max:255',
            ]); 
        
        $student = Student::find($id);
        $student->fill($request->all());
        $student->update();
        return redirect('students');
    }

    /**
     * Função de exclusão do aluno.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, int $id)
    {
        Student::destroy($id);
        return redirect('students');
    }
}
