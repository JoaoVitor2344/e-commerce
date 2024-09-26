<div class="row mb-3">
    <div class="col-12">
        <form wire:keydown="search">
            <div class="d-flex gap-3">
                <input class="form-control"
                       type="text"
                       wire:model="search_text"
                       placeholder="Digite nome ou email"
                       value="{{ $search_text }}">
            </div>
        </form>
    </div>
</div>
