@extends('layouts.app')
<!-- Tela inicial de turmas -->
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
@section('javascript')
    <script type="text/javascript">
        function validate_delete() {
            return confirm('Excluir o registro atual? Essa ação não pode ser desfeita.');
        }
    </script>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Listar turmas
                <a href="{{ url('teams/add') }}" class="btn btn-primary btn-sm float-right">Adicionar nova turma</a>
            </div>
            <div class="card-body p-0">
@if($teams->count() > 0)
                <div class="table-responsive border-0">
                    <table class="table table-hover text-center" style="margin-bottom: inherit">
                        <thead>
                            <tr>
                                <th>Nome da turma</th>
                                <th>Professor responsável</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($teams as $team)
                            <tr>
                                <td>{{ $team->title }}</td>
                                <td>{{ $team->teacher->name }}</td>
                                <td>
                                    <form action="{{ url('teams/'.$team->id) }}" method="post" onsubmit="return validate_delete()">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <a href="{{ url('teams/'.$team->id) }}" class="btn btn-dark btn-sm">Ver</a>
                                        <a href="{{ url('teams/edit/'.$team->id) }}" class="btn btn-primary btn-sm">Editar</a>
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
                    Não há nenhuma turma cadastrada
                </div>
@endif
            </div>
        </div>
    </div>
@endsection