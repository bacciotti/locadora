@extends('adminlte::page')

@section('title', 'Leasing - Editar')

@section('content_header')
    <h1>Editar Leasing</h1>
@stop

@section('content')
<a href="{{ url('/admin/leasings') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
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

        <form method="POST" action="{{ url('/admin/leasings/' . $leasing->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.leasings.form', ['formMode' => 'edit'])

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
        $('#items').val({!! json_encode($leasing->items()->allRelatedIds() ) !!}).trigger('change');
        $('#booking_id').val({!! json_encode($leasing->booking_id) !!}).trigger('change');
        $('#user_id').val({!! json_encode($leasing->user_id) !!}).trigger('change');
    </script>
@endsection

