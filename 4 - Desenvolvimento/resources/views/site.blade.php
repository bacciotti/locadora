@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Projeto de Engenharia de Software</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Este sistema foi criado como parte de um Projeto de Engenharia de Software.
                    Vídeo Locadora Imperial.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
