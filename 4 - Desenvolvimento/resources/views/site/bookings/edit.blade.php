@extends('layouts.app')

@section('title', 'Reserva - Editar')

@section('content_header')
    <h1>Editar Reserva</h1>
@stop

@section('content')
<a href="{{ url('/bookings') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
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

        <form method="POST" action="{{ url('/bookings/' . $booking->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            @include ('site.bookings.form', ['formMode' => 'edit'])
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
        $('#user_id').val({!! json_encode($booking->user_id ) !!}).trigger('change');
        $('#movies').val({!! json_encode($booking->movies()->allRelatedIds() ) !!}).trigger('change');
    </script>
@endsection
