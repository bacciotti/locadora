@extends('adminlte::page')

@section('title', '- Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
    {!! Button::success('<i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo')->asLinkTo(route('admin.users.create'))->addAttributes(['class' => "btn-sm"]) !!}
    <br/><br/>
    {!! Table::withContents($users->items())
        ->striped()
        ->callback('Ações', function ($field, $model){
        $linkShow = route('admin.users.show', ['user' => $model->id]);
        $linkEdit = route('admin.users.edit', ['user' => $model->id]);
        return Button::info('<i class="fa fa-eye" aria-hidden="true"></i> Ver')->asLinkTo($linkShow)->addAttributes(['class' => "btn-sm"])
        .' '.Button::primary('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar')->asLinkTo($linkEdit)->addAttributes(['class' => "btn-sm"]);
        })
        !!}
    {!! $users->links() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
