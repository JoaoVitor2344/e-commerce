@extends('layouts.app.painel', [
    'title' => 'Lojas',
    'breadcrumb' => [
        [
            'text' => 'Página inicial',
            'route' => 'painel.index'
        ],
        ['text' => 'Lojas']
    ],
    'btn' => [
        'modal' => 'modal-create-store',
        'text' => 'Adicionar loja',
    ],
])

@section('content')
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
                            <span class="badge bg-{{ $store->status->getBadge() }}">{{ __($store->status->value) }}</span>
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
    {{ $stores->links() }}

    @include('painel.stores.create', [
        'modal' => [
            'name' => 'modal-create-store',
        ]
    ])

    @foreach($stores as $store)
        @include('painel.stores.edit', [
            'store' => $store
        ])
    @endforeach

    @push('js')
        <script>
            $(() => {
                $('.btn-status').on('click', function () {
                    var id = $(this).closest('tr').data('id');

                    Swal.fire({
                        text: "Desaja alterar o status desta loja?",
                        icon: "warning",
                        confirmButtonText: "Ativar",
                        confirmButtonColor: "#198754",
                        showCancelButton: true,
                        cancelButtonText: "Desativar",
                        cancelButtonColor: "#dc3545"
                    }).then((result) => {
                        console.log(result);
                        if (result.isConfirmed) {
                            window.location.href = `/painel/lojas/status/${id}/ativar`;
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            window.location.href = `/painel/lojas/status/${id}/desativar`;
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
