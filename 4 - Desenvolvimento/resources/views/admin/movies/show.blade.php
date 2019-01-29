@extends('adminlte::page')

@section('title', 'Movie - View')

@section('content_header')
    <h1>Movie</h1>
@stop

@section('content')
    <div class="col-md-9">
        <a href="{{ url('/admin/movies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/admin/movies/' . $movie->id . '/edit') }}" title="Edit Movie"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('admin/movies' . '/' . $movie->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Movie" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>

        <br/><br/>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $movie->id }}</td>
                    </tr>
                    <tr><th> Original Title </th><td> {{ $movie->original_title }} </td></tr><tr><th> Pt Br Tittle </th><td> {{ $movie->pt_br_tittle }} </td></tr><tr><th> Countries </th><td> {{ $movie->countries }} </td></tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
