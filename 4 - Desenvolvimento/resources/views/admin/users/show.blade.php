@extends('adminlte::page')

@section('title', '- Usuário - Ver')

@section('content_header')
    <h1>Usuário</h1>
@stop

@section('content')
    @php
        $linkEdit = route('admin.users.edit', ['user' => $user->id]);
        $linkDelete = route('admin.users.destroy', ['user' => $user->id]);
    @endphp
    {!! Button::warning('<i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar')->asLinkTo(route('admin.users.index'))->addAttributes(['class' => "btn-sm"]) !!}
    {!! Button::primary('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar')->asLinkTo($linkEdit)->addAttributes(['class' => "btn-sm"]) !!}
    {!!
    Button::danger('<i class="fa fa-trash-o" aria-hidden="true"></i> Deletar')->asLinkTo($linkDelete)
        ->addAttributes(['class' => "btn-sm"])
        ->addAttributes(
            ['onclick' => "if(confirm(\"Confirm delete?\")){ event.preventDefault();document.getElementById(\"form-delete\").submit() };"]
        )
    !!}
    <br/><br/>
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
