@extends('adminlte::page')

@section('title', 'Item - Editar')

@section('content_header')
    <h1>Editar Item</h1>
@stop

@section('content')
<a href="{{ url('/admin/itens') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
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

        <form method="POST" action="{{ url('/admin/itens/' . $iten->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.itens.form', ['formMode' => 'edit'])

        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('.select2').select2();
        $('#media_type_id').val({!! json_encode($iten->media_type_id ) !!}).trigger('change');
        $('#movie_id').val({!! json_encode($iten->movie_id ) !!}).trigger('change');
        $('#distributor_id').val({!! json_encode($iten->distributor_id ) !!}).trigger('change');
    </script>
@endsection
