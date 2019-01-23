@extends('layouts.app')
<!-- Tela home -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
@guest
                <div class="card-header">Bem vindo</div>
@else
                <div class="card-header">Dashboard</div>
@endguest
                <div class="card-body">
@guest
                    Seja bem vindo ao nosso sistema gerencial de escola!<br>
                    Para acessar, efetue o login ou registre-se!
@else
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
@endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection