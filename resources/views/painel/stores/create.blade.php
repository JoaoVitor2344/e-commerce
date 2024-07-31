<x-painel.modal
    :button="[
        'text' => 'Adicionar',
        'form' => 'formCreateStore'
    ]"
    :modal="$modal">
    <x-slot name="html">
        <form action="{{ route('painel.stores.store') }}"
              id="formCreateStore"
              method="POST">
            @csrf
            <div class="form-group">
                <label for="name">
                    <span class="text-danger">*</span>
                </label>
                <input type="text"
                       name="name"
                       class="form-control mb-3"
                       placeholder="Nome da loja">
                <small>
                    @error('name')
                    {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="user_id">
                    <span class="text-danger">*</span>
                </label>
                <select name="user_id" class="form-select mb-3">
                    <option value="" selected>Selecione um usuário</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                <small>
                    @error('user_id')
                    {{ $message }}
                    @enderror
                </small>
            </div>
        </form>
    </x-slot>
</x-painel.modal>
