<?php

namespace App\Http\Controllers;

use App\Team;
use App\Teacher;
use Illuminate\Http\Request;
use Ausi\SlugGenerator\SlugGenerator;

class TeamController extends Controller
{
    /**
     * Função de retorno de dados para a tela home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all()->sortBy('title');
        return view('teams.index', compact('teams'));
    }

    /**
     * Função de criação de uma nova turma.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('teams.create', compact('teachers'));
    }

    /**
     * Função de gravar nova turma.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = Team::create($this->dataToStore($request));
        return redirect('teams');
    }

    /**
     * Adiciona o SLUG no array para salvar
     * @param array $request
     * @return array
     */
    public function dataToStore($request)
    {
        $all = $request->all();
        $generator = new SlugGenerator;
        $slug = $generator->generate($all["title"]);
        return array_merge($request->all(), ["slug" => $slug]);
    }

    /**
     * Função de exibir a turma.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team, int $id)
    {
        $team = Team::find($id);
        return view('teams.show', compact('team'));
    }

    /**
     * Função de edição da turma.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team, int $id)
    {
        $team = Team::find($id);
        $teachers = Teacher::all();
        return view('teams.edit', compact('team', 'teachers'));
    }

    /**
     *  Função de atualização da turma.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team, int $id)
    {
        $team = Team::find($id);
        $team->fill($this->dataToStore($request));
        $team->update();
        return redirect('teams');
    }

    /**
     * Função de exclusão da turma.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team, int $id)
    {
        Team::destroy($id);
        return redirect('teams');
    }
}
