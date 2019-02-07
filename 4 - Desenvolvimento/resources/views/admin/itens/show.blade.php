@extends('adminlte::page')

@section('title', 'Iten - View')

@section('content_header')
    <h1>Iten</h1>
@stop

@section('content')
<a href="{{ url('/admin/itens') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
<a href="{{ url('/admin/itens/' . $iten->id . '/edit') }}" title="Edit Iten"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
<form method="POST" action="{{ url('admin/itens' . '/' . $iten->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Delete Iten" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
</form>
<br/><br/>

<div class="container">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $iten->id }}</td>
                    </tr>
                    <tr><th> Date Acquisition </th><td> {{ $iten->date_acquisition }} </td></tr><tr><th> Serial Number </th><td> {{ $iten->serial_number }} </td></tr><tr><th> Media Type Id </th><td> {{ $iten->media_type_id }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
