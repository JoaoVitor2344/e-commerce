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
    {{--    {{ $stores->links() }}--}}

    <livewire:painel.store :stores="$stores"/>

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
