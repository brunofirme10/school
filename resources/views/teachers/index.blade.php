@extends('layouts.app')
<!-- Tela inicial de professor -->
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
                Listar professores
                <a href="{{ url('teachers/add') }}" class="btn btn-primary btn-sm float-right">Adicionar novo professor</a>
            </div>
            <div class="card-body p-0">
@if($teachers->count() > 0)
                <div class="table-responsive border-0">
                    <table class="table table-hover text-center" style="margin-bottom: inherit">
                        <thead>
                            <tr>
                                <th>Nome do professor</th>
                                <th>Matéria de conhecimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->getKnowledge() }}</td>
                                <td>
                                    <form action="{{ url('teachers/'.$teacher->id) }}" method="post" onsubmit="return validate_delete()">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <a href="{{ url('teachers/'.$teacher->id) }}" class="btn btn-dark btn-sm">Ver</a>
                                        <a href="{{ url('teachers/edit/'.$teacher->id) }}" class="btn btn-primary btn-sm">Editar</a>
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
                    Não há nenhum professor cadastrado
                </div>
@endif
            </div>
        </div>
    </div>
@endsection