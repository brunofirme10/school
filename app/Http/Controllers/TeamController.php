<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Função de retorno de dados para a tela home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all()->sortBy('title');
        return view('teams.index', compact('teams'));
    }

    /**
     * Função de criação de uma nova turma.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Função de gravar nova turma.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = Team::create($request->all());
        return redirect('teams');
    }

    /**
     * Função de exibir a turma.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $team = Team::find($id);
        return view('teams.show', ['title' => $team]);
    }

    /**
     * Função de edição da turma.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $team = Team::find($id);
        return view('teams.edit', ['title' => $team]);
    }

    /**
     *  Função de atualização da turma.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team = Team::find($id);
        $team->fill($request->all());
        $team->update();
        return redirect('teams');
    }

    /**
     * Função de exclusão da turma.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Team::destroy($id);
        return redirect('teams');
    }
}
