<div class="row mb-3">
    <div class="col-12">
        <form wire:submit="search">
            <div class="d-flex gap-3">
                <input class="form-control"
                       type="text"
                       wire:model="search_text"
                       placeholder="Digite o nome do produto"
                        value="{{ $search_text }}">
                <input type="hidden" name="store_id" value="">
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
            </div>
        </form>
    </div>
</div>
