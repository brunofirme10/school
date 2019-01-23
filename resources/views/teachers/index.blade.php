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

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Professores
                <a href="{{ url('teachers/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive border-0">
                    <table class="table table-hover" style="margin-bottom: inherit">
                        <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td><a class='a-line' href="{{ url('teachers/'.$teacher->id) }}">{{ $teacher->name }}</a></td>
                                <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('teachers/'.$teacher->id) }}">{{ $teacher->knowledge }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection