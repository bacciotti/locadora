@extends('adminlte::page')

@section('title', 'CheckPayment - Editar')

@section('content_header')
    <h1>Editar CheckPayment</h1>
@stop

@section('content')
<a href="{{ url('/admin/check-payments') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
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

        <form method="POST" action="{{ url('/admin/check-payments/' . $checkpayment->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.check-payments.form', ['formMode' => 'edit'])

        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
