@extends('layouts.app.painel', [
    'title' => 'Produtos',
    'breadcrumb' => [
        [
            'text' => 'Página inicial',
            'route' => 'painel.index'
        ],
        [
            'text' => 'Lojas',
            'route' => 'painel.stores.index',
        ],
        [
            'text' => 'Produtos',
            'route' => 'painel.products.index',
            'id' => $store_id
        ],
    ],
])

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Informações do usuário</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('painel.products.update', [$store_id, $product->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Nome Completo"
                               value="{{ $product->name }}">
                        <textarea name="description" id="description" class="form-control mb-3" placeholder="Descrição"
                                  rows="3">{{ $product->description }}</textarea>
                        <input type="text" name="price" id="price" class="form-control mb-3" placeholder="Preço"
                               value="{{ $product->price }}">
                        <input type="number" name="quantity" id="quantity" class="form-control mb-3"
                               placeholder="Quantidade"
                               value="{{ $product->quantity }}">
                        <button type="submit" class="btn btn-outline-primary w-100">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(() => {
                $('#price').maskMoney({
                    prefix: 'R$ ',
                    allowNegative: false,
                    thousands: '.',
                    decimal: ',',
                });
            });
        </script>
    @endpush
@endsection
