@extends('layouts.app')
<!-- Tela de criação de alunos -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alunos</div>
                    <form action="{{ url('students') }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                           
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Nome completo</label>
                                <input type="text" required class="form-control{{$errors->has('name') ? ' is-invalid':''}}" value="{{ old('name', $student->name) }}" id="name" name="name">
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="date">Data Nascimento</label>
                                <input type="datetime" class="form-control{{$errors->has('born_at') ? ' is-invalid':''}}" value="{{ old('born_at', $student->born_at) }}" id="born_at" name="born_at">
                                <div class="invalid-feedback">{{ $errors->first('born_at') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="team_id">Turma</label>
                                <input type="text" required class="form-control{{$errors->has('team_id') ? ' is-invalid':''}}" value="{{ old('team_id', $student->team_id) }}" id="team_id" name="team_id">
                                <div class="invalid-feedback">{{ $errors->first('team_id') }}</div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection