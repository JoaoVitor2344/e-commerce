<nav class="navbar bg-dark">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-sm-4 d-flex align-items-center">
                <a href="{{ route('dashboard.index') }}" class="text-white fw-bold" style="text-decoration: none;">Página inicial</a>
            </div>
            <div class="col-sm-4">
                <form class="d-flex gap-3" id="" action="" method="GET">
                    <input type="text" class="form-control" name="search_product" id="search_product">
                    <button class="btn btn-outline-primary btn-sm">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>
            </div>
            <div class="col-sm-4 d-flex justify-content-end">
                @if(!empty(auth()->user()))
                    <a href="#">
                        <span class="material-symbols-outlined" style="font-size: 40px;">account_circle</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
