@php
    $tabs = [
       ['title' => 'Conta','link' => route('admin.users.edit',['user' => $user->id])],
       ['title' => 'Perfil','link' => route('admin.users.profile.edit',['user' => $user->id])],
    ]

@endphp

{!! \Navigation::tabs($tabs) !!}
<div>
    {!! $slot !!}
</div>