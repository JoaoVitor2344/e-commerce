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
    <form action="{{ route('painel.products.update', [$store_id, $product->id]) }}" id="formUpdateProduct"
          method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informações</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            <input type="text" name="name" class="form-control mb-3"
                                   placeholder="Nome do produto"
                                   value="{{ old('name') ?? $product->name }}">
                        </div>
                        <div class="form-group">
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                            <textarea name="description" class="form-control mb-3"
                                      placeholder="Descrição">{{ old('description') ?? $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <small class="text-danger">{{ $errors->first('price') }}</small>
                            <input type="text" name="price" id="price" class="form-control mb-3"
                                   placeholder="Digite o preço"
                                   value="{{ old('price') ?? $product->price }}">
                        </div>
                        <div class="form-group">
                            <small class="text-danger">{{ $errors->first('quantity') }}</small>
                            <input type="number" name="quantity" class="form-control mb-3"
                                   placeholder="Quantidade"
                                   value="{{ old("quantity") ?? $product->quantity }}">
                        </div>
                        <input type="hidden" name="store_id" value="{{ $store_id }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Sobre o produto</h5>
                    </div>
                    <div class="card-body">
                        <small class="text-danger">{{ $errors->first('about') }}</small>
                        <textarea id="summernote" name="about">
                            {{ old('about') ?? $product->about }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit"
                class="btn btn-outline-primary w-100 mb-3">
            Atualizar</button>
    </form>
@endsection

@push('js')
    <script>
        $(() => {
            $('#price').maskMoney({
                prefix: 'R$ ',
                allowNegative: false,
                thousands: '.',
                decimal: ',',
            });

            $('#summernote').summernote({
                height: 150,
                placeholder: 'Escreva sobre o produto...',
                tabsize: 2,
            });
        });
    </script>
@endpush
