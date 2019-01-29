@php
    $tabs = [
       ['title' => 'Account','link' => route('admin.users.edit',['user' => $user->id])],
       ['title' => 'Profile','link' => route('admin.users.profile.edit',['user' => $user->id])],
    ]
@endphp

{!! \Navigation::tabs($tabs) !!}
<div>
    {!! $slot !!}
</div>