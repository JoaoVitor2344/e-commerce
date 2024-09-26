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
        'text' => '',
        'route' => 'painel.products.create',
        'id' => $store->id,
    ],
])

@section('content')
    <livewire:painel.product :products="$products" :store="$store"/>
@endsection
