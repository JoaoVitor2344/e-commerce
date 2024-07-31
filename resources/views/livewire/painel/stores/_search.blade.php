<div class="row mb-3">
    <div class="col-12">
        <form wire:submit="search">
            <div class="d-flex gap-3">
                <input class="form-control"
                       type="text"
                       wire:model="search_text"
                       placeholder="Digite nome ou email"
                       value="{{ $search_text }}">
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
            </div>
        </form>
    </div>
</div>
