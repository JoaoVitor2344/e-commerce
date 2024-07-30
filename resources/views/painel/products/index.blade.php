@extends('layouts.app.painel', [
    'title' => 'Dashboard',
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
    'btnText' => 'Adicionar produto',
    'btnRoute' => [
        'painel.products.create',
        'id' => request()->store_id
        ],
    ])

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-3 mb-3" style="height: 200px;">
                <a href="{{ route('painel.products.edit', [
                    'store_id' => $product->store_id,
                    'id' => $product->id
                ]) }}" style="text-decoration: none;">
                    <div class="card card-component h-100">
                        <img src="" class="class-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}
@endsection
