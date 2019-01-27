@extends('adminlte::page')

@section('title', 'Visualizar Usuário')

@section('content_header')
    <h1>Visualizar Usuário</h1>
@stop

@section('content')
    @php
        $linkEdit = route('admin.users.edit', ['user' => $user->id]);
        $linkDelete = route('admin.users.destroy', ['user' => $user->id]);
    @endphp
    {!! Button::primary("Editar")->asLinkTo($linkEdit) !!}
    {!!
    Button::danger('Excluir')->asLinkTo($linkDelete)
        ->addAttributes([
            'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
        ])
    !!}

    @php
        $formDelete = FormBuilder::plain([
            'id' => 'form-delete',
            'url' => $linkDelete,
            'method' => 'DELETE',
            'style' => 'display:none'
        ])
    @endphp
    {!! form($formDelete) !!}

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$user->email}}</td>
        </tr>
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
