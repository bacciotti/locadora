@extends('adminlte::page')

@section('title', 'Payment - Novo')

@section('content_header')
    <h1>Novo Payment</h1>
@stop

@section('content')
<a href="{{ url('/admin/payments') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
<br /><br />

<div class="container">
    <div class="col-md-9">
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/admin/payments') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('admin.payments.form', ['formMode' => 'create'])
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
