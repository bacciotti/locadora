@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Listagem de usuários</h3>
        {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        {!! Table::withContents($users->items())
         ->striped()
         ->callback('Ações', function ($field, $model){
            $linkEdit = route('admin.users.edit', ['user' => $model->id]);
            $linkShow = route('admin.users.show', ['user' => $model->id]);
            return Button::link('Editar')->asLinkTo($linkEdit).'|'.
            Button::link('Ver')->asLinkTo($linkShow);
         })
         !!}
    </div>

    {!! $users->links() !!}

@endsection