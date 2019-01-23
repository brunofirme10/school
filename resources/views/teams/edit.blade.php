@extends('layouts.app')
<!-- Tela de edição de turmas -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar turma</div>
                    <form action="{{ url('teams/'.$team->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="_method" value="PUT" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label for="title">Nome da turma</label>
                                <input type="text" required class="form-control{{$errors->has('title') ? ' is-invalid':''}}" value="{{ old('title', $team->title) }}" id="title" name="title" required min:3 max:255/>
                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="teacher_id">Professor responsável</label>
                                <select class="form-control{{$errors->has('teacher_id') ? ' is-invalid':''}}" id="teacher_id" name="teacher_id" required>
                                    <option selected disabled>Escolha um professor responsável</option>
@foreach($teachers as $teacher)
@if($team->teacher_id === $teacher->id)
                                    <option value="{{ $teacher->id }}" selected>{{ $teacher->name }}</option>
@else
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
@endif
@endforeach
                                </select>
                                <div class="invalid-feedback">{{ $errors->first('teacher_id') }}</div>
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

<!-- Validação dos formulários client side -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="/js/jqBootstrapValidation.js"></script>

<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>