<div class="modal" id="modalLogin" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Acesar o sistema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formLogin" action="{{ route('painel.authenticate') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required>
                        <small>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha" required>
                        <small>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="$('#formLogin').submit()">Acessar</button>
            </div>
        </div>
    </div>
</div>
