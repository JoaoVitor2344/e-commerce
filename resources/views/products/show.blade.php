@extends('layouts.app.index', [
    'title' => $product->name
])

@section('content')
    <div class="container">
        <div class="row mb-4" id="banner">
            <x-banner/>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <h5 class="fw-bold">{{ $product->name }}</h5>
            </div>
        </div>
        <div class="row justify-content-between" id="product">
            <div class="col-5">
                <div class="row mb-3">
                    <div class="col-3 d-flex flex-column justify-content-between">
                        <img src="https://placehold.co/80x80" class="img-fluid" alt="">
                        <img src="https://placehold.co/80x80" class="img-fluid" alt="">
                        <img src="https://placehold.co/80x80" class="img-fluid" alt="">
                    </div>
                    <div class="col-9">
                        <img src="https://placehold.co/400x400" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-column justify-content-between" style="min-height: 150px;">
                    <div class="mb-3">
                        <h5 class="fs-5">{{ $product->description }}</h5>
                        <a class="fs-6" href="{{ route('stores.show', $product->store_id) }}">
                            Visite a loja {{ $product->store->name }}
                        </a>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0" style="font-size: 12px; font-weight: 500;">
                            Mais de x compras por mês
                        </p>
                        <hr>
                    </div>
                    <div>
                        <p class="fs-6 fw-semibold">
                            Sobre o produto
                        </p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between gap-3">
                        <div class="d-flex flex-column gap-2">
                            <h5 class="card-title">R$ {{ $product->price }}</h5>
                            <p style="font-size: 12px;">
                                Entrega R$ 10,00: <br>
                                <span class="fw-bold">10 a 15 de setembro</span>
                            </p>
                        </div>
                        <input class="form-control" type="number" name="amount" id="amount" value="1" min="1"
                               max="{{ $product->quantity }}">
                        <div class="d-flex flex-column gap-2">
                            <button class="btn btn-outline-secondary">Adicionar ao carrinho</button>
                            <button class="btn btn-outline-primary">Comprar agora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row justify-content-center">
            @foreach($products as $product)
                <div class="col-md-2">
                    <img src="https://placehold.co/100x100" class="card-img"
                         alt="">
                    <div class="flex-column justify-content-between text-dark fw-semibold">
                        <p class="card-text mb-0"><small>{{ $product->name }}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
        <hr class="mb-4">
        <div class="row">
            <div class="col-3">
                <h5>Avaliações dos clientes</h5>
                <small>4 de 5</small>
            </div>
            <div class="col-9">
                <h5>Imagens</h5>
                <div class="row">
                    <div class="col-3">
                        <img class="card-img" src="https://placehold.co/100x100" alt="">
                    </div>
                    <div class="col-3">
                        <img class="card-img" src="https://placehold.co/100x100" alt="">
                    </div>
                    <div class="col-3">
                        <img class="card-img" src="https://placehold.co/100x100" alt="">
                    </div>
                    <div class="col-3">
                        <img class="card-img" src="https://placehold.co/100x100" alt="">
                    </div>
                </div>
                <hr>
                <div class="row gap-3">
                    <div class="col-12 d-flex align-items-center gap-3">
                        <img class="rounded-circle" src="https://placehold.co/50x50" alt="">
                        <small class="fw-semibold">Nome do cliente</small>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center gap-3">
                                <small>estrelas</small>
                                <h6 class="mb-0">Lorem ipsum dolor sit amet</h6>
                            </div>
                            <div class="col-12">
                                <small class="fw-semibold mb-0">25/07/2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-10">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cupiditate ea iusto quisquam repudiandae totam ut! Eaque mollitia quasi unde vitae! Aspernatur eum ipsam iure laudantium perspiciatis quisquam quos sint?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-4">
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {

        });
    </script>
@endpush
