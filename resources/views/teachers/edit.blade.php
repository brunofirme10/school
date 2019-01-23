@extends('layouts.app')
<!-- Tela de edição de estudante -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar professor</div>
                    <form action="{{ url('teachers/'.$teacher->id) }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="_method" value="PUT" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label for="name">Nome do professor</label>
                                <input type="text" required class="form-control{{$errors->has('name') ? ' is-invalid':''}}" value="{{ old('name', $teacher->name) }}" id="name" name="name" />
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="knowledge">Matéria de conhecimento</label>
                                <input type="text" class="form-control{{$errors->has('knowledge') ? ' is-invalid':''}}" value="{{ old('knowledge', $teacher->knowledge) }}" id="knowledge" name="knowledge" />
                                <div class="invalid-feedback">{{ $errors->first('knowledge') }}</div>
                            </div>
                        </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="javascript:void(0)" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection