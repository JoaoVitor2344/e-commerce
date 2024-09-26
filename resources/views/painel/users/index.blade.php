@extends('layouts.app.painel', [
    'title' => 'Dashboard',
    'breadcrumb' => [
        [
            'text' => 'Página inicial',
            'route' => 'painel.index'
        ],
        ['text' => 'Usuários'],
    ],
    'btn' => [
        'modal' => 'modal-add-user',
        'text' => 'Adicionar usuário',
    ],
])

@section('content')
    <livewire:painel.user :users="$users"/>

    @include('painel.users.create', [
        'modal' => [
            'name' => 'modal-add-user',
        ]
    ])
@endsection
