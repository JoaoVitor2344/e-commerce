@extends('layouts.app', [
    'title' => 'Dashboard'
])

@section('content')
    <div class="container">
        <div class="row mb-4" id="banner">
            <x-banner/>
        </div>
        <div class="row mb-4" id="categories">
            <div class="col-12 mb-3 text-center">
                <h2>Categorias</h2>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-3">
                            <x-card
                                link="#"
                                img="https://placehold.co/100x100"
                                title="{{ $category->name }}"
                                text="This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer."
                                small="Last updated 3 mins ago"/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row" id="products">
            <div class="col-12 mb-3 text-center">
                <h2>Produtos</h2>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 mb-3">
                            <x-card
                                link="{{ route('products.show', $product->id) }}"
                                img="https://placehold.co/100x100"
                                title="{{ $product->name }}"
                                text="This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer."
                                small="Last updated 3 mins ago"/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            initCardOverlay();
        });
    </script>
@endpush
