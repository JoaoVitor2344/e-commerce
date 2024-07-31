<div>
    @include('livewire.painel.stores._search')
    <div class="row">
        <div class="col-12">
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stores as $store)
                    <tr data-id="{{ $store->id }}">
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>
                            <span
                                class="badge bg-{{ $store->status->getBadge() }}">{{ __($store->status->value) }}</span>
                        <td>
                            <a class="btn btn-sm btn-outline-secondary"
                               href="{{ route('painel.products.index', ['store_id' => $store->id]) }}">
                                <i class="fa-solid fa-list"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary"
                               data-bs-toggle="modal"
                               data-bs-target="#edit-store-{{ $store->id }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-warning btn-status">
                                <i class="fa-solid fa-power-off"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
