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
                            <a href="#">
                                <div class="card text-bg-dark">
                                    <img src="https://placehold.co/100x100" class="card-img"
                                         alt="{{ $category->slug }}">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">{{ $category->name }}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </a>
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
                            <a href="#">
                                <div class="card text-bg-dark">
                                    <img src="https://placehold.co/100x100" class="card-img"
                                         alt="">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
