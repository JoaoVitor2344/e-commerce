<div class="modal" id="{{ $modal['id'] }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $html }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-submit">{{ $button['text'] }}</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(() => {
            $('#btn-submit').on('click', () => {
                $('#{{ $button['form'] }}').submit();
            });
        });
    </script>
@endpush
