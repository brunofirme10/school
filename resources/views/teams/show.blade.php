@extends('layouts.app')
<!-- Tela de exibição de turmas -->
@section('stylecss')
    <style>
        .form-control-static {
            font-weight: bold;
        }
        .img-avatar {
            max-width: 100%;
            border: 1px solid #c0c0c0;
            border-radius: 5px;
            margin-bottom: 15px;
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Ver turma</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nome">Nome da turma</label>
                                    <p class="form-control-static">{{ $team->title }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="professor">Professor responsável</label>
                                    <p class="form-control-static">{{ $team->teacher->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <form action="{{ url('teams/'.$team->id) }}" method="post" onsubmit="return validate_delete()">
                            <input type="hidden" name="_method" value="DELETE" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <a href="javascript:void(0)" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                            <a href="{{ url('teams/edit/'.$team->id) }}" class="btn btn-primary">Editar</a>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection