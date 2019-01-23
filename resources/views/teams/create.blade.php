@extends('layouts.app')
<!-- Tela de criação de turmas -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Turmas</div>
                    <form action="{{ url('teams') }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Turma</label>
                                <input type="text" required class="form-control{{$errors->has('title') ? ' is-invalid':''}}" value="{{ old('title') }}" id="title" name="title" />
                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="teacher">Professor</label>
                                <input type="text" class="form-control{{$errors->has('teacher_id') ? ' is-invalid':''}}" value="{{ old('teacher_id') }}" id="teacher_id" name="teacher_id" />
                                <div class="invalid-feedback">{{ $errors->first('teacher_id') }}</div>
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