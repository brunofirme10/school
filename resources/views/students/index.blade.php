@extends('layouts.app')
<!-- Tela inicial de estudante -->
@section('stylecss')
    <style media="screen">
        .img-avatar-xs {
            width: 30px;
            height: 30px;
            border: 1px solid #c0c0c0;
            border-radius: 5px;
        }
        .a-line {
            line-height: 30px;
        }
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Listar estudantes
                <a href="{{ url('students/add') }}" class="btn btn-primary btn-sm float-right">Adicionar novo estudante</a>
            </div>
            <div class="card-body p-0">
@if($students->count() > 0)
                <div class="table-responsive border-0">
                    <table class="table table-hover text-center" style="margin-bottom: inherit">
                        <thead>
                            <tr>
                                <th>Nome completo</th>
                                <th>Nascido em</th>
                                <th>Turma</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->born_at }}</td>
                                <td>#{{ $student->team->id }} - {{ $student->team->title }}</td>
                                <td>
                                    <form action="{{ url('students/'.$student->id) }}" method="post" onsubmit="return validate_delete()">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <a href="{{ url('students/'.$student->id) }}" class="btn btn-dark btn-sm">Ver</a>
                                        <a href="{{ url('students/edit/'.$student->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                </td>
                            </tr>
@endforeach
                        </tbody>
                    </table>
                </div>
@else
                <div class="text-center">
                    Não há nenhum estudante cadastrado
                </div>
@endif
            </div>
        </div>
    </div>

@endsection