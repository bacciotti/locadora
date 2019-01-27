@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Listagem de usuários</h1>
@stop

@section('content')
        {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        {!! Table::withContents($users->items())
         ->striped()
         ->callback('Ações', function ($field, $model){
            $linkEdit = route('admin.users.edit', ['user' => $model->id]);
            $linkShow = route('admin.users.show', ['user' => $model->id]);
            return Button::link('Editar')->asLinkTo($linkEdit).'|'.
            Button::link('Visualizar')->asLinkTo($linkShow);
         })
         !!}

    {!! $users->links() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
