@extends('layouts.app.painel', [
    'title' => 'Produtos',
    'breadcrumb' => [
        [
            'text' => 'Página inicial',
            'route' => 'painel.index'
        ],
        [
            'text' => 'Lojas',
            'route' => 'painel.stores.index'
        ],
        ['text' => 'Produtos'],
    ],
    'btn' => [
        'modal' => 'modal-add-product',
        'text' => 'Adicionar produto',
    ],
])

@section('content')
    {{--    <div class="row">--}}
    {{--        @foreach($products as $product)--}}
    {{--            <div class="col-3 mb-3" style="height: 200px;">--}}
    {{--                <a href="{{ route('painel.products.edit', [--}}
    {{--                        'store_id' => $product->store_id,--}}
    {{--                        'id' => $product->id--}}
    {{--                    ]) }}"--}}
    {{--                   style="text-decoration: none;">--}}
    {{--                    <div class="card card-component h-100">--}}
    {{--                        <img src="" class="class-img-top" alt="">--}}
    {{--                        <div class="card-body">--}}
    {{--                            <h5 class="card-title">{{ $product->name }}</h5>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-footer">--}}
    {{--                            <small class="text-muted">R$ {{ number_format($product->price, 2, ',', '.') }}</small>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
    {{--    {{ $products->links() }}--}}

    <livewire:painel.product :products="$products" :store="$store"/>

    @include('painel.products.create', [
        'modal' => [
            'name' => 'modal-add-product',
        ],
        'store' => $store,
    ])
@endsection
