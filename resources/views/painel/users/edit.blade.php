@extends('layouts.app.painel', [
    'title' => 'Dashboard',
    'breadcrumb' => [
        [
            'text' => 'Página inicial',
            'route' => 'painel.index'
        ],
        [
            'text' => 'Usuários',
            'route' => 'painel.users.index'
        ],
    ]
])

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Informações do usuário</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('painel.users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" class="form-control mb-3" placeholder="Nome Completo"
                               value="{{ $user->name }}">
                        <input type="email" name="email" class="form-control mb-3" placeholder="E-mail"
                               value="{{ $user->email }}">
                        <input type="password" name="password" class="form-control mb-3" placeholder="Senha">
                        <div class="form-group mb-3">
                            <input type="password" name="confirm-password" class="form-control"
                                   placeholder="Repita a Senha">
                            <small class="text-danger" id="wrong-password" style="display: none;">Senhas não correspondem</small>
                        </div>
                        <button type="submit" class="btn btn-outline-primary w-100">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(() => {
                $('[name="password"]').on('keyup', validatePassword);
                $('[name="confirm-password"]').on('keyup', validatePassword);
            });

            function validatePassword() {
                var password = $('[name="password"]').val();
                var confirmPassword = $('[name="confirm-password"]').val();

                if (confirmPassword !== password && confirmPassword !== '') {
                    $('#wrong-password').fadeIn();
                } else {
                    $('#wrong-password').fadeOut();
                }
            }
        </script>
    @endpush
@endsection
