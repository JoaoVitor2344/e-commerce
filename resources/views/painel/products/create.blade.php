@isset($modal)
    <x-painel.modal
        :button="[
            'text' => 'Adicionar',
            'form' => 'formCreateProduct'
        ]"
        :modal="$modal">
        <x-slot name="html">
            <form action="{{ route('painel.products.store', $store->id) }}" id="formCreateProduct" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control mb-3"
                           placeholder="Nome do produto"
                           value="{{ old('name') }}">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control mb-3"
                              placeholder="Descrição">{{ old('description') }}</textarea>
                    <small class="text-danger">{{ $errors->first('description') }}</small>
                </div>
                <div class="form-group">
                    <input type="text" name="price" id="price" class="form-control mb-3"
                           placeholder="Digite o preço"
                           value="{{ old('price') }}">
                    <small class="text-danger">{{ $errors->first('price') }}</small>
                </div>
                <div class="form-group">
                    <input type="number" name="quantity" class="form-control mb-3"
                           placeholder="Quantidade"
                           value="{{ old("quantity") }}">
                    <small class="text-danger">{{ $errors->first('quantity') }}</small>
                </div>
                <input type="hidden" name="store_id" value="{{ $store->id }}">
            </form>
        </x-slot>
    </x-painel.modal>

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
@endisset
