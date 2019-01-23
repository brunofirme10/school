@extends('layouts.app')
<!-- Tela de exibição de alunos -->
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
                    <div class="card-header">Contato</div>
                    <form action="{{ url('students/'.$student->id) }}" method="post" onsubmit="return validate_delete()">
                        <div class="card-body">
                            @method('DELETE')

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="nome">Nome completo</label>
                                        <p class="form-control-static">{{ $student->name }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="dataNasc">Data Nascimento</label>
                                        <p class="form-control-static">{{ $student->born_at }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="turma">Turma</label>
                                        <p class="form-control-static">{{ $student->team_id }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('students/edit/'.$student->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection