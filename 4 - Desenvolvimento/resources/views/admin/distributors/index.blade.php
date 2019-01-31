@extends('adminlte::page')

@section('title', 'Distributors')

@section('content_header')
    <h1>Distributors</h1>
@stop

@section('content')
<a href="{{ url('/admin/distributors/create') }}" class="btn btn-success btn-sm" title="Add New Distributor">
    <i class="fa fa-plus" aria-hidden="true"></i> Add New
</a>
<form class="form-inline my-2 my-lg-0 float-right" style="display: inline-flex;" method="GET" action="{{ url('/admin/distributors') }}" accept-charset="UTF-8" role="search">
    <input class="form-control" type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>

<br/><br/>
        
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Corporate Name</th><th>Cnpj</th><th>Address</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($distributors as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->corporate_name }}</td><td>{{ $item->cnpj }}</td><td>{{ $item->address }}</td>
                <td>
                    <a href="{{ url('/admin/distributors/' . $item->id) }}" title="View Distributor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/admin/distributors/' . $item->id . '/edit') }}" title="Edit Distributor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('/admin/distributors' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Distributor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $distributors->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
