@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Listagem de usuários</h3>
        {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        {!! Table::withContents($users->items() ) !!}
    </div>

    {!! $users->links() !!}

@endsection