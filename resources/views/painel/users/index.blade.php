@extends('layouts.app.painel', [
    'title' => 'Dashboard',
    'breadcrumb' => [
        [
            'text' => 'Página inicial',
            'route' => 'painel.index'
        ],
        ['text' => 'Usuários'],
    ],
    'btnText' => 'Adicionar usuário',
    'btnRoute' => 'painel.users.create',
    'btnModal' => '#modal-add-user'
])

@section('content')
    @include('painel.users._search')
    <div class="row">
        @foreach($users as $user)
            <div class="col-3 mb-3" style="height: 200px;">
                <a href="{{ route('painel.users.edit', $user->id) }}" style="text-decoration: none;">
                    <div class="card card-component h-100">
                        <img src="" class="class-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    {{ $users->links() }}

    @include('painel.users.create', ['modal' => true])
@endsection
