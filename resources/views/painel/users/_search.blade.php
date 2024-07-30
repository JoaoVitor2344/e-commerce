<div class="row mb-3">
    <div class="col-12">
        <form action="{{ route('painel.users.index') }}" method="GET">
            <div class="d-flex gap-3">
                <input class="form-control"
                       type="text"
                       name="search"
                       placeholder="Digite nome ou email"
                        value="{{ request()->search ?? '' }}">
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                <a href="{{ route('painel.users.index') }}">
                    <button type="button" class="btn btn-outline-danger">Limpar</button>
                </a>
            </div>
        </form>
    </div>
</div>
