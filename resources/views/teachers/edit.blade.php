@extends('layouts.app')
<!-- Tela de edição de estudante -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contato</div>
                    <form action="{{ url('teachers/'.$teacher->id) }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            @method('PUT')

                            @csrf

                            <div class="form-group">
                                <label for="name">Nome completo</label>
                                <input type="text" required class="form-control{{$errors->has('name') ? ' is-invalid':''}}" value="{{ old('name', $teachers->name) }}" id="name" name="name">
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="date">Especialidade</label>
                                <input type="datetime" class="form-control{{$errors->has('knowledge') ? ' is-invalid':''}}" value="{{ old('knowledge', $teachers->knowledge) }}" id="knowledge" name="knowledge">
                                <div class="invalid-feedback">{{ $errors->first('knowledge') }}</div>
                            </div>
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