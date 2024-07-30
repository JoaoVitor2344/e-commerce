<div class="modal" id="edit-store-{{ $store->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $store->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('painel.stores.update', $store->id) }}"
                      id="form-edit-{{ $store->id }}"
                      method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">
                            Nome
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               class="form-control mb-3"
                               placeholder="Nome Completo"
                               value="{{ $store->name }}">
                        <small>
                            @error('name')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="user_id">
                            Usuário
                            <span class="text-danger">*</span>
                        </label>
                        <select name="user_id" class="form-select mb-3">
                            <option value="">Selecione um usuário</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}"
                                        @if($store->user_id == $user->id) selected @endif>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" onclick="$('#form-edit-{{ $store->id }}').submit()">
                    Atualizar
                </button>
            </div>
        </div>
    </div>
</div>
