@isset($modal)
    <x-painel.modal
        :button="[
            'text' => 'Adicionar',
            'form' => 'formCreateUser'
        ]">
        <x-slot name="html">
            <form action="{{ route('painel.users.store') }}" id="formCreateUser" method="POST">
                @csrf
                <input type="text" name="name" class="form-control mb-3"
                       placeholder="Nome Completo"
                       value="">
                <input type="email" name="email" class="form-control mb-3" placeholder="E-mail"
                       value="">
                <input type="password" name="password" class="form-control"
                       placeholder="Senha">
            </form>
        </x-slot>
    </x-painel.modal>
@endisset
